<?php
session_start();

// إنشاء مصفوفة المهام إذا ما كانت موجودة
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// إضافة مهمة جديدة
if (isset($_POST['task'])) {
    $task = trim($_POST['task']);
    if ($task != "") {
        $_SESSION['tasks'][] = $task;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .todo {
            background: white;
            padding: 30px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            background: #6366f1;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
        }

        ul {
            margin-top: 20px;
            padding-left: 20px;
        }

        li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<div class="todo">
    <h2>To Do List</h2>

    <form method="post">
        <input type="text" name="task" placeholder="Enter a task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php
        foreach ($_SESSION['tasks'] as $task) {
            echo "<li>$task</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
