<html lang="en">
    <head>
        <title>Number guessing game</title>
    </head>
    <body>
        <h1>Guess the number game</h1>

        <form method="post">
            <label for="guess">Enter your guess (between 1 and 100):</label>
            <!-- Add value attribute to keep user input -->
            <input type="number" id="guess" name="guess" min="1" max="100" step="1" required 
            value="<?php echo isset($_SESSION['guess']) ? $_SESSION['guess'] : ''; ?>">
            
            <input type="submit" value="Submit">
            <!-- Add a Give up button -->
            <button type="submit" name="give_up" value="give_up">Give up</button>
        </form>

        <?php
        // Start session before including process_guess.php
        session_start();

        // Include the PHP logic
        ob_start();    // Use output buffering
        include 'process_guess.php';
        $message = ob_get_clean();    // capture the output from process_guess.php and store it in the $message variable.

        if (isset($message) && !empty($message)) {
             echo "<p>$message</p>";
        }
        ?>
    </body>
</html>
