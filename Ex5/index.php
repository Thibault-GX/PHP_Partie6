<?php
$partNb = 6;
$exerciseNb = 'Exercice 5';
include '../header.php';
var_dump($_GET); ?>
<a class="text-danger" href="index.php?week=12">URL à tester</a>
<p><?php
if (isset($_GET['week']))
{
    echo('Week = '.$_GET['week']);
}
else
{
    echo('Is not ok!');
}
?></p>
<?php
include '../footer.php';