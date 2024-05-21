<!DOCTYPE html>
<html>
<head>
    <title>Registry Management</title>

    <style>
        /* Import Google Fonts for modern typography */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        /* Global styles */
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        /* Heading styles */
        h1, h2 {
            text-align: center;
            color: #2a2a2a;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            font-weight: 700;
        }

        h2 {
            font-size: 24px;
            font-weight: 500;
        }

        /* Marquee styles */
        marquee {
            font-size: 22px;
            color: #666;
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        /* Printable area styles */
        #printableArea {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        /* List container styles */
        .list-container {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
            background-color: white;
        }

        /* List item styles */
        .list-item {
            padding: 15px 20px;
            margin-bottom: 10px;
            background-color: #f4f6f8;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .list-item h3 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #2a2a2a;
        }

        .list-item p {
            margin: 5px 0;
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        /* Button styles */
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin: 20px auto;
            display: block;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Printing styles */
        @media print {
            body {
                background-color: white;
                margin: 0;
                padding: 0;
            }

            button, marquee {
                display: none;
            }

            #printableArea {
                box-shadow: none;
                padding: 20px;
                margin: 0;
                max-width: 100%;
            }

            h1, h2, h3, p {
                margin: 10px 0;
            }

            .list-container {
                background-color: white;
                border: none;
            }
        }
    </style>
</head>
<body>
    <center>
        <h1>House Rent Management System (Renter Information)</h1>
    </center>
    <marquee>Renter Information</marquee>
    <header>
        <div class="nav">
            <!-- Add any additional navigation elements here if needed -->
        </div>
    </header>

    <div id="printableArea">
        <h2 align="center">Renter Information</h2>
        <div class="list-container">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_rt";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch renter information
            $sql = "SELECT * FROM tb_rntt";
            $result = mysqli_query($conn, $sql);

            // Display each renter's information as a list item
            while ($test = mysqli_fetch_array($result)) {
                echo '<div class="list-item">';
                echo '<h3>' . $test['name'] . '</h3>';
                echo '<p>Renter ID: ' . $test['id'] . '</p>';
                echo '<p>Email: ' . $test['email'] . '</p>';
                echo '<p>Flat No.: ' . $test['fln'] . '</p>';
                echo '<p>Blood Group: ' . $test['blood'] . '</p>';
                echo '<p>NID: ' . $test['nid'] . '</p>';
                echo '<p>Designation: ' . $test['desig'] . '</p>';
                echo '<p>Contact: ' . $test['contact'] . '</p>';
                echo '</div>';
            }

            mysqli_close($conn);
            ?>
        </div>

        <button type="button" onclick="printDiv('printableArea')">Print!</button>
        <button type="button" onclick="location.href = 'http://localhost/Last/s.php'">Back</button>
    </div>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</body>
</html>