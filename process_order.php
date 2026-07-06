<?php
require './order_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderSummary = order();
} else {
    $orderSummary = 'Dessert: ' . htmlspecialchars(sessionValue('dessert')) . '<br>'
        . 'Drink: ' . htmlspecialchars(sessionValue('drink')) . '<br>'
        . 'Drink size: ' . htmlspecialchars(sessionValue('drinkSize'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Receipt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Latest Receipt</h1>
        <nav>
            <a href="index.php">Order Form</a>
            <a href="process_order.php">Latest Receipt</a>
            <a href="about.php">How It Works</a>
        </nav>
    </header>

    <main class="container">
        <section class="card receipt-card">
            <h2>Your Saved Order</h2>
            <p><?= $orderSummary; ?></p>
        </section>

        <section class="insight-card">
            <h3>Order Feedback</h3>
            <p><?= htmlspecialchars(completionMessage()); ?></p>
            <p class="note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
        </section>

        <section class="insight-card pricing-grid">
            <div>
                <h3>Estimated Total</h3>
                <p class="price"><?= htmlspecialchars(formattedTotal()); ?></p>
            </div>
            <div>
                <h3>Order Profile</h3>
                <p><?= htmlspecialchars(orderProfile()); ?></p>
            </div>
            <p class="note full-width"><?= htmlspecialchars(pricingNote()); ?></p>
        </section>

        <div class="button-row">
            <a class="button" href="index.php">Order Again</a>
            <a class="button secondary" href="forget_order.php">Forget Order</a>
        </div>
    </main>
</body>
</html>
