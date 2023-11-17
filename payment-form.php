<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
   <form action="pay.php" method="post">
        Rs.1600<input type="hidden" name="price" value='1600'><br>
        Name: <input type="text" name="customername"><br>
        Email: <input type="email" name="email"><br>
        Contact No: <input type="text" name="contactno"><br>
        <input type="submit" name="submit" value="Proceed to Pay">
</form>
</body>
</html>
