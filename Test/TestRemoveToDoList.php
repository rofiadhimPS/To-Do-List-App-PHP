<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";

addToDoList("Adhim");
addToDoList("Rajab");
addToDoList("Santi");
addToDoList("Lala");

showToDoList();

removeToDoList(2);

showToDoList();