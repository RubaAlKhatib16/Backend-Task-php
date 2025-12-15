<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button {
            background: #6366f1;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #4f46e5;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #1e293b;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Calculator</h2>

    <form method="post">
        <input type="number" name="num1" placeholder="First Number" required>
        <input type="number" name="num2" placeholder="Second Number" required>

        <select name="operation" required>
            <option value="">Select Operation</option>
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (×)</option>
            <option value="div">Division (÷)</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <div class="result">
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $op   = $_POST['operation'];
            if ($op == "add") {
                echo "Result: " . ($num1 + $num2);
            } elseif ($op == "sub") {
                echo "Result: " . ($num1 - $num2);
            } elseif ($op == "mul") {
                echo "Result: " . ($num1 * $num2);
            } elseif ($op == "div") {
                if ($num2 == 0) {
                    echo "Cannot divide by zero!";
                } else {
                    echo "Result: " . ($num1 / $num2);
                }
            }
        }
        ?>
    </div>
</div>
</body>
</html>
