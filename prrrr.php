<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form.example {
            text-align: center;
        }
        input[type=text] {
            padding: 10px;
            width: 70%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        /* Print button */
        .print-button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Ensure button behaves like inline element */
            margin-right: 10px;
        }
        .print-button:hover {
            background-color: #005f6b;
        }
    </style>
</head>
<body>
<main>
    <h2>Search ID</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="id">ID:</label>
        <form class="example">
            <input type="text" placeholder="Search.." name="id">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </form>

    <!-- PHP code to retrieve and display data -->
    <!-- Your PHP code here -->

    <!-- Print button/link -->
    <a href="mam.php" class="print-button">Print</a>
</main>
</body>
</html>