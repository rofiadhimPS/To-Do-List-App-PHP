<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";

function viewRemoveToDoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan )");

    if ($pilihan == "x") {
        echo "Batal menghapus ToDo" . PHP_EOL;
    } else {
        $succes = removeToDoList($pilihan);
        
        if($succes) {
            echo "Sukses Menghapus ToDo Nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus ToDo Nomor $pilihan" . PHP_EOL;
        }
    }
}