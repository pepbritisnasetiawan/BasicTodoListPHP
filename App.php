<?php

require_once "model/TodoList.php";
require_once "BussinessLogic/ShowTodoList.php";
require_once "BussinessLogic/AddTodoList.php";
require_once "BussinessLogic/DeleteTodoList.php";

require_once "View/ViewShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewDeleteTodoList.php";

require_once "Helper/Input.php";

echo "Aplikasi Todo List" . PHP_EOL;

viewShowTodoList();