<?php
require_once "classes/Student.php";
require_once "classes/Teacher.php";

$student1 = new Student("Jan", 18, "ZSK");
$student2 = new Student("Anna", 17, "ZSŁ");
$teacher1 = new Teacher("Piotr", 34, "Informatyka");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Uczniowie</h1>
    <h2>Informacje o użytkownikach</h2>
    <?php
    echo $student1->getInfo() . "<br>";
    echo $student2->getInfo() . "<hr>";
    ?>

    <h1>Nauczyciele</h1>
    <h2>Informacje o użytkownikach</h2>
    <?php
    echo $teacher1->getInfo() . "<hr>";
    ?>

    <h2>Informacje HTML - HEREDOC</h2>
</body>

<?php
echo $student1->getHtml();
echo $student2->getHtml();
echo $teacher1->getHtml();

?>

</html>