<?php

require_once "../Model/ToDoList.php";
require_once "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("Muh");
addToDoList("Adhim");
addToDoList("Rajab");
addToDoList("Gokil");
addToDoList("Coding");

showToDoList();

viewRemoveToDoList();

showToDoList();

