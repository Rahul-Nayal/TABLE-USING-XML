<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
    <style>
        /* Table styling */
        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<?php
// Load the XML file
$xml = simplexml_load_file('users.xml') or die("Error: Cannot create object");

// Start the HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

// Loop through the <user> elements and display each user's data
foreach ($xml->user as $user) {
    echo "<tr>";
    echo "<td>" . $user->id . "</td>";
    echo "<td>" . $user->name . "</td>";
    echo "<td>" . $user->email . "</td>";
    echo "</tr>";
}

// End the table
echo "</table>";
?>

</body>
</html>
