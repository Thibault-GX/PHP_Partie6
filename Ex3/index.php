<?php
$partNb = 6;
$exerciseNb = 'Exercice 3';
include '../header.php';
var_dump($_GET); ?>
<a class="text-danger" href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">URL à tester</a>
<p><?php
if (isset($_GET['startDate']) && isset($_GET['endDate']))
{
    echo('StartDate = '.$_GET['startDate'].'<br>EndDate = '.$_GET['endDate']);
}
else
{
    echo('Is not ok!');
}
?></p>
<?php
include '../footer.php';
