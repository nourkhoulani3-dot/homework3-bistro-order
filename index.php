<?php require './order_functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session-Based Bistro Order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Session-Based Bistro Order</h1>
        <nav>
            <a href="index.php">Order Form</a>
            <a href="process_order.php">Latest Receipt</a>
            <a href="about.php">How It Works</a>
        </nav>
    </header>

    <main class="container">
        <section class="card">
            <h2>Build Your Order</h2>
            <p>Choose a dessert, drink, and drink size. Your choices will be saved with PHP sessions.</p>

            <form action="process_order.php" method="post">
                <label for="dessert">Dessert</label>
                <select id="dessert" name="dessert">
                    <option value="none">Choose a dessert</option>
                    <option value="Cheesecake" <?= dessertSelected('Cheesecake'); ?>>Cheesecake</option>
                    <option value="Chocolate Cake" <?= dessertSelected('Chocolate Cake'); ?>>Chocolate Cake</option>
                    <option value="Carrot Cake" <?= dessertSelected('Carrot Cake'); ?>>Carrot Cake</option>
                    <option value="Tiramisu" <?= dessertSelected('Tiramisu'); ?>>Tiramisu</option>
                </select>

                <label for="drink">Drink</label>
                <select id="drink" name="drink">
                    <option value="none">Choose a drink</option>
                    <option value="Coffee" <?= drinkSelected('Coffee'); ?>>Coffee</option>
                    <option value="Hot Chocolate" <?= drinkSelected('Hot Chocolate'); ?>>Hot Chocolate</option>
                    <option value="Root Beer" <?= drinkSelected('Root Beer'); ?>>Root Beer</option>
                    <option value="Tea" <?= drinkSelected('Tea'); ?>>Tea</option>
                    <option value="Milk" <?= drinkSelected('Milk'); ?>>Milk</option>
                </select>

                <fieldset>
                    <legend>Drink Size</legend>
                    <label><input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected('Small'); ?>> Small</label>
                    <label><input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected('Medium'); ?>> Medium</label>
                    <label><input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected('Large'); ?>> Large</label>
                </fieldset>

                <button type="submit">Submit Order</button>
            </form>
        </section>

        <section class="insight-card">
            <h3>Live Guidance</h3>
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
    </main>
</body>
</html>
