<html>
<style>

@media print {
    /* Hide non-essential elements */
    body * {
        display: none;
    }

    /* Display only the content with the submitted data */
    body h1,
    body p {
        display: block;
    }

    /* Reset margin and padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Set page orientation and size */
    @page {
        size: A4 portrait;
        margin: 20mm;
    }

    /* Set font size and family for print */
    body h1 {
        font-size: 24px;
        font-family: 'Georgia', serif;
        margin-bottom: 15px;
    }

    body p {
        font-size: 16px;
        font-family: 'Georgia', serif;
        margin-bottom: 8px;
    }

    /* Print button hidden in print view */
    button {
        display: none;
    }
}
</style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fln = $_POST['fln'];
    $blood = $_POST['blood'];
    $nid = $_POST['nid'];
    $desig = $_POST['desig'];
    $contact = $_POST['contact'];

    // Optionally, process form data (e.g., save it to a database)
    // ...

    // Display submitted data to the user
    echo '<h1>Renter Information</h1>';
    echo '<p>Renter ID: ' . htmlspecialchars($id) . '</p>';
    echo '<p>Renter Name: ' . htmlspecialchars($name) . '</p>';
    echo '<p>Renter Email: ' . htmlspecialchars($email) . '</p>';
    echo '<p>Renter Flat No: ' . htmlspecialchars($fln) . '</p>';
    echo '<p>Renter Blood Group: ' . htmlspecialchars($blood) . '</p>';
    echo '<p>Renter NID: ' . htmlspecialchars($nid) . '</p>';
    echo '<p>Renter Designation: ' . htmlspecialchars($desig) . '</p>';
    echo '<p>Renter Contact: ' . htmlspecialchars($contact) . '</p>';

    // Add print button
    echo '<button onclick="window.print()">Print</button>';
}
?>
</h