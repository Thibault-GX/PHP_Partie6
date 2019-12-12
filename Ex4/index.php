<?php
$partNb = 6;
$exerciseNb = 'Exercice 4';
include '../header.php';
var_dump($_GET); ?>
<a class="text-danger" href="index.php?language=PHP&amp;server=LAMP">URL à tester</a>
<p><?php
if (isset($_GET['language']) && isset($_GET['server']))
{
    echo('Language = '.$_GET['language'].'<br>Server = '.$_GET['server']);
}
else
{
    echo('Is not ok!');
}
?></p>
<?php
include '../footer.php';