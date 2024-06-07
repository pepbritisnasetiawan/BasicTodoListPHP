<?php

function showTodoList()
{
    global $todoList; // ambil $todoLIst dari global scope

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $number=> $value) {
        echo "$number. $value" . PHP_EOL;
    }
};