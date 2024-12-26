<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Simple Math Quiz</h1>
        <form id="quizForm" action="process.php" method="POST">
            <div class="settings">
                <label>Choose Operations:</label>
                <div>
                    <input type="checkbox" name="operations[]" value="addition" id="addition" checked>
                    <label for="addition">Addition</label>
                </div>
                <div>
                    <input type="checkbox" name="operations[]" value="subtraction" id="subtraction">
                    <label for="subtraction">Subtraction</label>
                </div>
                <div>
                    <input type="checkbox" name="operations[]" value="multiplication" id="multiplication">
                    <label for="multiplication">Multiplication</label>
                </div>

                <label for="operands">Number of Operands:</label>
                <input type="number" name="operands" id="operands" min="1" max="5" value="2">

                <label for="difficulty">Difficulty Level:</label>
                <select name="difficulty" id="difficulty">
                    <option value="1">Easy (1-10)</option>
                    <option value="2">Medium (1-100)</option>
                    <option value="3">Hard (1-1000)</option>
                </select>

                <button type="submit">Start Quiz</button>
            </div>
        </form>
    </div>
</body>
</html>