<?php
session_start();
$questions = $_SESSION['questions'] ?? [];

if (empty($questions)) {
    echo "No quiz data found.";
    exit;
}
?>