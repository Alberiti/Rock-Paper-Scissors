<?php



$player = [ 'Opponent_1', 'Opponent_2']; //список пользователей, которые будут участвовать в конкурсе не меньше 2.

for ($i=0;$i<count($player);$i++){
    include "$player[$i]" . '.php';
}
// подключаем пользователей
$first_pl_answer = 0;
$second_pl_answer = 0;


$raund = 200; // количество раундов

$player_result = array(array()); // массив с результатами 


for ( $j = 0; $j<count($player); $j++) {
    for ($i = 0; $i < count($player);$i++) {
        if ($i != $j){
    
            $result = [];

            for ($iter_res=0; $iter_res < $raund; $iter_res++){
                $first_pl_answer_copy = $first_pl_answer;
                $first_pl_answer = $player[$j]($second_pl_answer);
                $second_pl_answer = $player[$i]($first_pl_answer_copy);

                if ($first_pl_answer == 1){
                    
                    if ($second_pl_answer == 3){$result[$iter_res] = 2;}
                    if ($second_pl_answer == 2){$result[$iter_res] = 1;}
                    if ($second_pl_answer == 1){$result[$iter_res] = 0;}
                }
                if ($first_pl_answer == 2){
                    if ($second_pl_answer == 3){$result[$iter_res] += 1;}
                    if ($second_pl_answer == 2){$result[$iter_res] += 0;}
                    if ($second_pl_answer == 1){$result[$iter_res] += 2;}
                }
                if ($first_pl_answer == 3){
                    if ($second_pl_answer == 3){$result[$iter_res] += 0;}
                    if ($second_pl_answer == 2){$result[$iter_res] += 2;}
                    if ($second_pl_answer == 1){$result[$iter_res] += 1;}
                }
            }

        $first_pl_res = 0;
        $second_pl_res = 0;
        for ($ij=0; $ij < $raund; $ij++){
            if ($result[$ij] == 1){$first_pl_res += 1;}
            if ($result[$ij] == 2){$second_pl_res += 1;}

        }

        if ($first_pl_res == $second_pl_res){
            $player_result[$j][$i] = 1/4;
            $player_result[$i][$j] = 1/4;
        }# Сюда результат при ничье

        if ($first_pl_res > $second_pl_res){
            $player_result[$j][$i] = 1;
            $player_result[$i][$j] = 0;
        }# Сюда результат при победе первого игрока

        if ($first_pl_res < $second_pl_res){
            $player_result[$j][$i] = 0;
            $player_result[$i][$j] = 1;
        }# Сюда результат при победе второго игрока


        }
        else{
            $player_result[$j][$i] = 'X';
            // когда игрок играет сам с собой
        }
    }
}

?>