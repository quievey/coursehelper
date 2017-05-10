<?php
//include('config.php');
include 'Arr.php';
include "Cluster.php";
include "helpers.php";

use System\Cluster;
/*
//$scores = select m.grade as score,s.name as subject from student_grades m
//join on m.subject_id  = s.id
$result = []; //this is the result set from the db
$data = []; //empty array to store subjects score array
$key = 'subject';
$value = 'score';
*/
while ($scores = mysql_fetch_assoc($result)){
    $data[$scores[$key]] = $scores[$value];
}

$subjects = $data;
/*
$subjects = [
    'english'=>40,
    'swahili'=>70,
    'math'=>30,
    'physics'=>80,
    'biology'=>55,
    'chemistry'=>56,
    'geography'=>67,
    'computer'=>89,
    'history'=>99,
    'cre'=>45
];
*/

$cluster = new Cluster($subjects);
$cluster->setCategory(1,['english','swahili','math']);
$cluster->setCategory(2,['biology','physics','chemistry']);
$cluster->setCategory(3,['cre','history','geography']);
$points = $cluster->getWeighted('CIT');
?>