<?php

function deleteTodoList(int $number): bool
{
    global $todoList;

    // check number lebih dari number todolst
    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
};