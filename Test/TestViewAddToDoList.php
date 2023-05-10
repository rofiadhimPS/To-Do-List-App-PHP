<?php

require_once "../View/ViewAddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Adhim");
addToDoList("Rajab");
addToDoList("Muh");

viewAddToDoList();

showToDoList();

viewAddToDoList();

showToDoList();