<?php
$partNb = 6;
$exerciseNb = 'Exercice 2';
include '../header.php';
var_dump($_GET);
?>
<a class="text-danger" href="index.php?lastname=Nemare&amp;firstname=Jean&amp;age=27">URL à tester</a>
<p><?php
if (isset($_GET['age']))
{
    echo ('La valeur de $_GET[\'age\'] vaut '.$_GET['age'].'.');
}
else
{
    echo ('Il n\'y a pas d\'âge dans la requête.');
}
?></p>
<?php
include '../footer.php';