<?php

require_once "../Model/ToDoList.php";
require_once "../Helper/Input.php";
require_once "../BusinessLogic/AddToDoList.php";

function viewAddToDoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x"){
        echo "Batal menambah ToDo" . PHP_EOL;
    }
    else {
        addToDoList($todo);
    }    
}