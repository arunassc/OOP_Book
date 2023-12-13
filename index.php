<!--Sukurti klasę Book.
Properties: title, pages, releaseYear
visi properties turi būti inkapsuliuoti.
sukurti 3 objektus su reikšmėmis naudojantis tuščiu konstruktoriu, ir tris naudojantis pilnu konstuktoriu.
sudėti juos į knygų masyvą.
prasukti ciklą per masyvą ir atspausdinti knygas (naudojam getterius)-->

<?php
include "./Book.php";
$book1 = new Book();
$book2 = new Book();
$book3 = new Book();

$book4 = new Book("The Book4", 152, 2005);
$book5 = new Book("The Book5", 237, 2012);
$book6 = new Book("The Book6", 89, 2021);

$booksArray = [$book1, $book2, $book3, $book4, $book5, $book6];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($booksArray as $book) {
        echo "<li>Title: {$book->getTitle()}, Pages: {$book->getPages()}, Release Year: {$book->getReleaseYear()}</li>";
    }
    ?>
</body>

</html>