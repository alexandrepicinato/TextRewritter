<?php

function Rewritte($textogeral){
    $palavrastext =explode(" ",$textogeral );
    $textoreescrito="";
    $sinonimos = fopen("BaseSinonimos.csv", "r");
    $row = 0;
    $palavras =[];
    while ($line = fgetcsv($sinonimos, 1000, ",")) {
        if ($row++ == 0) {
            continue;
        }
        $data = explode( ";" ,$line[0]);
        array_push($palavras, $data);
        //$palavras[] .= $data;

    }


        foreach($palavrastext as $searsh){
                    $rewritten =1;
                    //$sortnumber=rand(1,2);
                $sortnumber=2;
            if($sortnumber == 2){
                $replace = 0 ;
                    if($rewritten == 1){
                            foreach($palavras as $conjuntosinonimos){
                                $sinonimosdata = array_search($searsh, $conjuntosinonimos);
                                $sinarray =in_array($searsh, $conjuntosinonimos);
                            if($replace ==0){
                                if($sinarray == true){
                                    $sinonimosarraycount= count($conjuntosinonimos);
                                        if($sinonimosarraycount > 0){
                                            $selectedword = " ". $conjuntosinonimos[(rand(0, ($sinonimosarraycount -1)))];
                                        }
                                        else{
                                            $selectedword=" ".$searsh;
                                        }
                                        $replace=1;
                                }
                                else{
                                    $selectedword=" ".$searsh;
                                }
                            }
                        }
                    $textoreescrito .=" ".$selectedword;
                    }
                    else{
                        $textoreescrito .=" ".$searsh;
                    }
            }
            else{
                $textoreescrito .= " ". $searsh;
            }
        }
        return $textoreescrito;

}
