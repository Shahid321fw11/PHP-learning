<?php
session_start();

// Initialize the game or reset if the user starts over
if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 1;
    $_SESSION['number'] = 0;
}

$step = $_SESSION['step'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($step) {
        case 1:
            // Start the game: Ask the user to take a number
            $message = "Step 1: Pick a secret number and keep it in your mind. Click 'Next' when done.";
            break;

        case 2:
            // Step 2: Multiply by 2
            $message = "Step 2: Multiply your number by 2. Click 'Next' when done.";
            break;

        case 3:
            // Step 3: Add 10
            $message = "Step 3: Add 10 to your result. Click 'Next' when done.";
            break;

        case 4:
            // Step 4: Divide by 2
            $message = "Step 4: Divide your result by 2. Click 'Next' when done.";
            break;

        case 5:
            // Step 5: Subtract the original number
            $message = "Step 5: Subtract your original number from the result. Click 'Next' when done.";
            break;

        case 6:
            // Final Step: Reveal the answer
            $message = "Hurray! The result is 5. Click 'Restart' to play again.";
            session_destroy(); // Reset the game
            break;
    }

    $_SESSION['step']++;
} else {
    // Start message for the first time or on refresh
    $message = "Step 1: Pick a secret number and keep it in your mind. Click 'Next' when done.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Mind-Reading Game</title>
</head>
<body>
    <h1>Interactive Mind-Reading Trick</h1>
    <p><?php echo $message; ?></p>
    <form method="post" action="">
        <?php if ($step < 6): ?>
            <button type="submit">Next</button>
        <?php else: ?>
            <button type="submit">Restart</button>
        <?php endif; ?>
    </form>
</body>
</html>
