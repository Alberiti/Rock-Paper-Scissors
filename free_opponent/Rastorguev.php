<?php 
$Rastorguev_numer=0;
$Rastorguev_array=[];
function Rastorguev($o){
    array_push($GLOBALS['Rastorguev_array'],$o);
    $count1=count(array_keys($GLOBALS['Rastorguev_array'], 1));
    $count2=count(array_keys($GLOBALS['Rastorguev_array'], 2));
    $count3=count(array_keys($GLOBALS['Rastorguev_array'], 3));
    $chislo=count($GLOBALS['Rastorguev_array']);
    if ($GLOBALS['Rastorguev_numer']==0){
        $GLOBALS['Rastorguev_numer'] += 1;
        return 3;

    }
        else if ($GLOBALS['Rastorguev_array'][$chislo-1]==$GLOBALS['Rastorguev_array'][$chislo-2]and$GLOBALS['Rastorguev_array'][$chislo-1]==$GLOBALS['Rastorguev_array'][$chislo-3]){
            if ($GLOBALS['Rastorguev_array'][count($GLOBALS['Rastorguev_array'])-1]==1){
                return 3;
            }else if($GLOBALS['Rastorguev_array'][count($GLOBALS['Rastorguev_array'])-1]==2){
                return 1;
            }else if($GLOBALS['Rastorguev_array'][count($GLOBALS['Rastorguev_array'])-1]==3){
                return 2;
            }
        }else if($count1 > $count2 and $count1 > $count3){
            return 3;
        }else if ($count2 > $count1 and $count2 > $count3){
            return 1;
        }else if ($count3 > $count1 and $count3 > $count2) {
            return 2;
        }else {
            return rand(1,3);
        }

}




