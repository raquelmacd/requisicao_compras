<?php
/*****
//funcao para formatar a data 

****/
    function formatar($data){
        $data = explode("-", $data);
        return $data = $data[2]."/".$data[1]."/".$data[0];
    }
