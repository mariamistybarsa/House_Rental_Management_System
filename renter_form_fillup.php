<html>
<?php
     
        include_once ('header.php');

?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renter Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
        form {
            margin: 0 auto;
            max-width: 600px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Renter Information Form</h1>
    <form action="print_renter.php" method="post">
        <label for="id">Renter id:</label>
        <input type="text" id="id" name="id" required>


 <label for="name">Renter Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Renter Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="fln">Renter Flat No:</label>
        <input type="text" id="fln" name="fln" required>

        <label for="blood">Renter Blood Group:</label>
        <input type="text" id="blood" name="blood" required>

        <label for="nid">Renter NID:</label>
        <input type="text" id="nid" name="nid" required>

        <label for="desig">Renter Designation:</label>
        <input type="text" id="desig" name="desig" required>

        <label for="contact">Renter Contact:</label>
        <input type="text" id="renter_contact" name="contact" required>

        <input type="submit" value="Submit">
    </form>
</body>

<?php
     include_once ('footer.php');

   
     
        ?>



</html>