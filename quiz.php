<?php
session_start();
$questions = $_SESSION['questions'] ?? [];

if (empty($questions)) {
    echo "No quiz data found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Answer the Questions</h1>
        <form action="results.php" method="POST">
            <?php foreach ($questions as $index => $q): ?>
                <div class="question">
                    <label><?php echo $q['expression']; ?> = ?</label>
                    <input type="number" name="answers[<?php echo $index; ?>]" required>
                </div>
            <?php endforeach; ?>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
