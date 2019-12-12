<?php
$partNb = 6;
$exerciseNb = 'Exercice 6';
include '../header.php';
var_dump($_GET); ?>
<a class="text-danger" href="index.php?building=12&amp;room=101">URL à tester</a>
<p><?php
if (isset($_GET['building']) && isset($_GET['room']))
{
    echo('Building = '.$_GET['building'].'<br>Room = '.$_GET['room']);
}
else
{
    echo('Is not ok!');
}
?></p>
<?php
include '../footer.php';