<?php
$students = array(
    "Ali" => "BIC21203",
    "Abu" => "BIT11003",
    "Ahmad" => "BIC21103"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Course Code</th>
        </tr>
        <?php
        foreach ($students as $name => $course) {
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$course</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
