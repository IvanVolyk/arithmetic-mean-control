<?php
// Задача 3. В классе учится 12 учеников. Каждый из учеников получили оценки за контрольную по математике (от 1 до 5). Необходимо найти средний балл за контрольную по математике.

$totalSchoolchildren = 12;
$mathScores = array(3, 4, 3, 4, 4, 5, 1, 2, 4, 3, 2, 5);
$mathScore = array_sum($mathScores);

echo $meanNumbers = $mathScore / $totalSchoolchildren;


?>





