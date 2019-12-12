<?php
$partNb = 6;
$exerciseNb = 'Exercice 1';
include '../header.php';
var_dump($_GET);
?>
<a class="text-danger" href="index.php?lastname=Nemare&amp;firstname=Jean">URL à tester</a>
<p><?php echo('Nom : '.$_GET['lastname'].'<br>Prénom : '.$_GET['firstname']);?></p>
<?php
include '../footer.php';
