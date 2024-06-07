<?php

require_once "Helper/Input.php";
require_once "BussinessLogic/DeleteTodoList.php";

function viewDeleteTodoList()
{
    echo "Deletig Todo" . PHP_EOL;

    $choice = input("Number (x to cancel)");

    if ($choice == "x") {
        echo "Canceling delete todo" . PHP_EOL;
    } else {
        $success = deleteTodoList($choice);

        if ($success) {
            echo "Success deleting todo number $choice" . PHP_EOL;
        } else {
            echo "Failed deleting todo number $choice" . PHP_EOL;
        }
    }
};