<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operations = $_POST['operations'] ?? [];
    $operands = intval($_POST['operands']);
    $difficulty = intval($_POST['difficulty']);

    if (empty($operations)) {
        echo "Please select at least one operation.";
        exit;
    }


    $range = match ($difficulty) {
        1 => 10,
        2 => 100,
        3 => 1000,
        default => 10,
    };

    $questions = [];
    for ($i = 0; $i < 10; $i++) {
       
        $operation = $operations[array_rand($operations)];


        $numbers = [];
        for ($j = 0; $j < $operands; $j++) {
            $numbers[] = rand(1, $range);
        }

        $expression = implode(
            match ($operation) {
                'addition' => ' + ',
                'subtraction' => ' - ',
                'multiplication' => ' * ',
                default => ' + ',
            },
            $numbers
        );

        $answer = eval("return $expression;");
        $questions[] = ["expression" => $expression, "answer" => $answer];
    }

   
    session_start();
    $_SESSION['questions'] = $questions;
    header('Location: quiz.php');
}
?>
