<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>




 .data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th, .data-table td {
    border: 1px solid #ddd;
    padding: 60px;
}

.data-table th {
    background-color: #f2f2f2;
    font-weight: bold;
    text-align: left;
}

.data-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.data-table tbody tr:hover {
    background-color: #ddd;
}

</style>
</table>

<table class="data-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Occupation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>30</td>
            <td>Software Engineer</td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>25</td>
            <td>Graphic Designer</td>
        </tr>
        <tr>
            <td>Michael Johnson</td>
            <td>35</td>
            <td>Project Manager</td>
        </tr>
   
</table>

</body>
</html>