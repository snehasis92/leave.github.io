
<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Users Data</h2>

<table>
    <thead>
        <tr>
            <th>Full name</th>
            <th>Email id</th>
            <th>Date from</th>
            <th>Date to</th>
            <th>Purpose</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check if there are rows to display
        $sql = "SELECT FullName,Email,DateFrom, DateTO, PhoneNo,Purpose FROM leave1";
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                $html= "<tr>
                        <td>{$row['FullName']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['DateFrom']}</td>
                        <td>{$row['DateTO']}</td>
                        <td>{$row['PhoneNo']}</td>
                        <td>{$row['Purpose']}</td>
                    </tr>";
                    echo $html;
            }
        } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }
        $mpdf=new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $file=time().'.pdf';
        $mpdf->output($file,'D');

        // Close connection
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
