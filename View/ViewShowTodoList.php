<?php

require_once "model/TodoList.php";
require_once "BussinessLogic/ShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewDeleteTodoList.php";
require_once "Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Delete Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $choice = input("Choose");

        if ($choice == "1") {
            viewAddTodoList();
        } else if ($choice == "2") {
            viewDeleteTodoList();
        } else if ($choice == "x") {
            break;
        } else {
            echo "Invalid choice" . PHP_EOL;
        }
    }
    
    echo "See you" . PHP_EOL;
};