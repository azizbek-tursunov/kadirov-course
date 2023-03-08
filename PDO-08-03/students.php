<!DOCTYPE html>
<link href="style.css" rel="stylesheet">

<?php
require 'database.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];

try {
    $sql = "INSERT INTO students (name, surname, birthday, address) VALUES (:name, :surname, :birthday, :address)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'name' => $name,
        'surname' => $surname,
        'birthday' => $birthday,
        'address' => $address
    ]);
} catch (PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
}



$stmt = $pdo->prepare('SELECT * FROM students');

$stmt->execute();

$students = $stmt->fetchAll();

?>

<table>
    <tr>
        <th>Ism</th>
        <th>Familiya</th>
        <th>Tug'ilgan kun</th>
        <th>Manzil</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['surname']; ?></td>
        <td><?php echo $student['birthday']; ?></td>
        <td><?php echo $student['address']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
