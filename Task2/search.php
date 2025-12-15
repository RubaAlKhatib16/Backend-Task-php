<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #cbd5f5;
        }

        button {
            background: #6366f1;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #4f46e5;
        }
    </style>
</head>
<body>

<form method="post">
    <h2>Search</h2>
    <input type="text" name="url" placeholder="Enter URL " required>
    <button type="submit">GO</button>
</form>

<?php
if (isset($_POST['url'])) {
    $url = $_POST['url'];
    header("Location: $url");
    exit();
}
?>

</body>
</html>
