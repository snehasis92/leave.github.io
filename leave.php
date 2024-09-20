
<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Leave Application Form</h2>
    <form  method="post" id="applicationForm">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        

        <label for="date from">Date From:</label>
        <input type="date" id="datefrom" name="datefrom" required>
        <label for="date Upto">Date Uptp:</label>
        <input type="date" id="dateupto" name="dateupto" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="message">Why do you want to apply?</label>
        <input type="text" name="message" required></textarea>

        <input type="submit" value="Submit Application" name="submit_btn">
    </form>
</div>



       
<?php
if(isset($_POST["submit_btn"]))
{
    $Fname=$_POST["name"];
    $email=$_POST["email"];
    $d_from=$_POST["datefrom"];
    $d_to=$_POST["dateupto"];
    $ph=$_POST["phone"];
    $msg=$_POST["message"];

    $q="insert into leave1 values(' $Fname','$email','$d_from',' $d_to',' $ph',' $msg')";

    $sql=mysqli_query($conn,$q);
}
?>