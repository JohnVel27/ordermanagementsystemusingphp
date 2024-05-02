<!DOCTYPE html>
<html>
<head>
    <title>Canteen Menu</title>
</head>
<body>
    <h2>Welcome to the canteen, here are the prices:</h2>
    <ul>
        <li>Fishball - 30PHP</li>
        <li>Kikiam - 40PHP</li>
        <li>Corndog - 50PHP</li>
    </ul>
    <form method="post" action="calculate.php">
        <label for="food">Choose your order:</label>
        <select id="food" name="food">
            <option value="fishball">Fishball</option>
            <option value="kikiam">Kikiam</option>
            <option value="corndog">Corndog</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="0" step="0.01" required><br><br>
        <input type="submit" name="submit" value="Submit Order">
    </form>

</body>
</html>


