<?php
$conn = new mysqli('localhost', 'root', '', 'sampledb');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$result = $conn->query('SELECT * FROM sampletable');
if ($result->num_rows > 0) {
    echo '<table border="1" width=50% cellspacing="0" cellpadding="10">';
    echo '<tr><th>Sno</th><th>Name</th><th>Age</th><th>Salary</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['Sno'] . '</td>';
        echo '<td>' . $row['Name'] . '</td>';
        echo '<td>' . $row['Age'] . '</td>';
        echo '<td>' . $row['Salary'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No records found';
}
$conn->close();
?>
