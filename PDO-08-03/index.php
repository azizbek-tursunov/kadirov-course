<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azil.uz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




<form action="students.php" method="POST">
    <h2> Talabalarni ro'yhatga olish </h2>
    <label for="name">Ismingiz:</label>
    <input type="text" id="name" name="name" required>

    <label for="username">Familiyangiz:</label>
    <input type="text" id="surname" name="surname" required>

    <label for="birthday">Tug'ilgan kuningiz:</label>
    <input type="date" id="birthday" name="birthday" required>

    <label for="address">Manzilingiz:</label>
    <input type="text" id="address" name="address" required>

    <input type="submit" value="Saqlash">
    <a style="color: blue; text-decoration: underline;" href="talabalar.php">Barcha talabalar</a>
</form>


    
</body>
</html>