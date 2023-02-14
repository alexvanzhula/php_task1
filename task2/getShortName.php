<?php


function getShortName ($ArrayPartNames){
        $resultShort = [];
        foreach ($ArrayPartNames as $value) {
            unset($value['patronomyc']);
             $temp = [
                'surname' => substr($value['surname'], 0, -3),
                 'name' => mb_substr($value['name'], 1, 1)."."
            ];
            $resultShort[] = implode(" ",$temp);
            
        }
       return $resultShort;
}

?>