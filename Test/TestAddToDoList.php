<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Muh.");
addToDoList("Rofiadhim");
addToDoList("Rajab");

var_dump($todoList);