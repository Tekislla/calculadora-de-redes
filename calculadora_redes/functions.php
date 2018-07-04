<?php

    require_once "index.php";


    function calc ($ip, $mask){


        $enderecos = pow(2,(32-$mask));
        $subredes = 256 / $enderecos;
        $hosts = $subredes - 2;
        $ip = array explode("." , "$ip");

        


        echo "O IP contém $enderecos endereços, $subredes subredes, cada subrede contém $hosts endereços de hosts";

//        if ($mask == 24) {
//            echo "O IP contém 1 subrede\n";
//            echo "Cada subrede contém 256 endereços";
//        }
//
//        elseif ($mask == 25) {
//            echo "O IP contém 2 subredes\n";
//            echo "Cada subrede contém 128 endereços";
//        }
//
//        elseif ($mask == 26) {
//            echo "O IP contém 4 subredes\n";
//            echo "Cada subrede contém 64 endereços";
//        }
//
//        elseif ($mask == 27) {
//            echo "O IP contém 8 subredes\n";
//            echo "Cada subrede contém 32 endereços";
//        }
//
//        elseif ($mask == 28) {
//            echo "O IP contém 16 subredes\n";
//            echo "Cada subrede contém 16 endereços";
//        }
//
//        elseif ($mask == 29) {
//            echo "O IP contém 32 subredes\n";
//            echo "Cada subrede contém 8 endereços";
//        }
//
//        elseif ($mask == 30) {
//            echo "O IP contém 64 subredes\n";
//            echo "Cada subrede contém 4 endereços";
//        }
//
//        elseif ($mask == 31) {
//            echo "O IP contém 128 subredes\n";
//            echo "Cada subrede contém 2 endereços";
//        }
//
//        elseif ($mask == 32) {
//            echo "O IP contém 256 subredes\n";
//            echo "Cada subrede contém 1 endereço";
//        }
    }

    $ip = $_POST['ip'];
    $mask = $_POST['mask'];
    $calculo = calc($mask);