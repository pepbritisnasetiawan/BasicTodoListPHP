<?php

require_once "model/TodoList.php";
require_once "Helper/Input.php";
require_once "BussinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Add Todo" . PHP_EOL;

    $todo = input("Todo (x to cancel)");

    if ($todo == "x") {
        echo "Canceling add todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}