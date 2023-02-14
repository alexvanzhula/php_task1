<?php
function getGenderFromName ($ArrayPartNames);
$maleOrFemale = 0;
            $maleSignPatronomyc = 'ич';
            $maleSignName = 'н';
            $maleSignSurname = 'в';
            $feMaleSignPatronomyc = 'вна';
            $feMaleSignName = 'a';
            $feMaleSignSurname = 'ва';
            $name = mb_substr($full_name['name'],-1, 1);
            $surname = mb_substr($full_name['surname'],-2, 2);
            $patronomys = mb_substr($full_name['patronomys'],-3, 3);

            if ($name == 'я') {
                $maleOrFemale -=1;
            }
            if ($surname == 'ва') {
                $maleOrFemale -=1;
            }
            if ($patronomys == 'вна' ) {
                $maleOrFemale -=1;
            }

            if ($name == $maleSignName) {
                $maleOrFemale +=1;
            }
            if ($surname == $maleSignSurname) {
                $maleOrFemale +=1;
            }
            if ($patronomys == $maleSignSurname ) {
                $maleOrFemale +=1;
            }


            if($maleOrFemale > 0){
                echo ('мужской пол');
            }elseif($maleOrFemale < 0){
                echo ('женский пол');
            }else{
                echo ('Neutral gender');
            }
        }
?>


