<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Form Example</title>
    </head>
<body>
    <main>
        <form action="config.php" method="POST">
        <label>City:</label><br>
        <div><input type="text" name="houseCity" required></div>
    
        <label>Price:</label><br>
        <div><input type="number" name="price" required></div>
    
        <label>Days Listed:</label><br>
        <div><input type="number" name="daysListed" required></div>
    
        <input type="submit" value="Insert">
</form>

</body>
</html>