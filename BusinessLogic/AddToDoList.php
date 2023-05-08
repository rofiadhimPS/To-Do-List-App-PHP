<?php

/**
 * Menambah todo di list
 */

function addToDoList($todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}