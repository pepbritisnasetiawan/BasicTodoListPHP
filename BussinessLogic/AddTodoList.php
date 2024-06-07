<?php

function addTodoList(string $todo)
{
    global $todoList;

    // check size di todolist
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
};