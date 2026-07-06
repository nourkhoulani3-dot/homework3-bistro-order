<?php require './order_functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>How It Works</h1>
        <nav>
            <a href="index.php">Order Form</a>
            <a href="process_order.php">Latest Receipt</a>
            <a href="about.php">How It Works</a>
        </nav>
    </header>

    <main class="container">
        <section class="card">
            <h2>PHP Session Flow</h2>
            <p>The order form sends the user selections to <strong>process_order.php</strong> using the POST method. The receipt page calls the <strong>order()</strong> function, which saves dessert, drink, and drink size into PHP session variables.</p>
            <p>When the user clicks <strong>Order Again</strong>, the form reads the saved session values. Helper functions return <strong>selected</strong> for dropdown options and <strong>checked</strong> for radio buttons, so the previous order appears again.</p>
            <p>If the user does not choose one of the options, the program stores <strong>(not selected)</strong>. This keeps the receipt clear and prevents blank output.</p>
            <p>The <strong>Forget Order</strong> page clears the session using <strong>session_unset()</strong> and <strong>session_destroy()</strong>. After that, the form returns to the default state.</p>
        </section>
    </main>
</body>
</html>
