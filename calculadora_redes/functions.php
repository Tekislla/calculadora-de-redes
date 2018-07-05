<?php

    require_once "index.php";


    function calc ($ipInformado, $mask){


        $enderecos = pow(2,(32-$mask));
        $subredes = 256 / $enderecos;
        $hosts = $subredes - 2;
        $ip = explode("." , "$ipInformado");

        $a = $ip[3] / $enderecos;
        $firstHost = floor($a) * $enderecos + 1;
        $lastHost = $firstHost + ($enderecos - 3);
        $broadcast = $lastHost + 1;
        $maskDecimal = 256 - $enderecos;

        switch ($ipInformado){
            case $ipInformado >= 0 AND $ipInformado <= 127:
                $classe =  "classe A";
                break;

            case $ipInformado >= 128 AND $ipInformado <= 191:
                $classe = "classe B";
                break;

            case $ipInformado >=192 AND $ipInformado <= 223:
                $classe = "classe C";
                break;

            case $ipInformado >= 240 AND $ipInformado <= 255:
                $classe = "classe D";
                break;
        }

        switch ($ipInformado){
            case $ipInformado >= 10 AND $ipInformado <= 10.255:
                $classeIp =  "privado";
                break;

            case $ipInformado >= 172.16 AND $ipInformado <= 172.31:
                $classeIp = "privado";
                break;

            case $ipInformado >=192.168 AND $ipInformado <= 172.169:
                $classeIp = "privado";
                break;

            default:
                $classeIp = "publico";
                break;
        }


        $ar = ['enderecos' => $enderecos,
            'subredes' => $subredes,
            'hosts' => $hosts,
            'primeiro endereco de host' => "$ip[0].$ip[1].$ip[2].$firstHost",
            'ultimo endereco de host' => "$ip[0].$ip[1].$ip[2].$lastHost",
            'broadcast' => "$ip[0].$ip[1].$ip[2].$broadcast",
            'mascara de rede' => "255.255.255.$maskDecimal",
            'classe do ip' => "$classe, $classeIp"
        ];



        print_r($ar);

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

//    $ip = $_POST['ip'];
//    $mask = $_POST['mask'];
    $ip = '192.168.10.156';
    $mask = '27';
    $calculo = calc($ip, $mask);