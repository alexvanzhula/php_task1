<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8"> 
        </head> 

<body>
    <?php
include 'getPartsFromFullname.php';
include 'getShortName.php';
include 'getGenderDescription.php';

$example_persons_array = [
   
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];


$fullNames = getFullnameFromParts($example_persons_array);

echo "<br><br>";
print_r($fullNames);


$ArrayPartNames = getPartsFromFullname($fullNames);
echo "<br><br> Разбиение и объединение ФИО <br><br>";
print_r($ArrayPartNames);

echo "<br><br> Сокращение ФИО <br>";

$getShortNamesRes = getShortName($ArrayPartNames);
print_r($getShortNamesRes);

echo "<br><br> определение пола <br>";

var_dump($ArrayPartNames);
$getGenderRes = getGenderFromName($ArrayPartNames);
?>
</body>
</html> 
