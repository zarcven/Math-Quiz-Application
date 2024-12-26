<?php
session_start();
$questions = $_SESSION['questions'] ?? [];
$answers = $_POST['answers'] ?? [];

$score = 0;

foreach ($questions as $index => $q) {
    if (isset($answers[$index]) && intval($answers[$index]) === intval($q['answer'])) {
        $score++;
    }
}

echo "<h1>Your Score: $score/" . count($questions) . "</h1>";
?>
