<?php

require_once "model/TodoList.php";
require_once "BussinessLogic/DeleteTodoList.php";
require_once "BussinessLogic/AddTodoList.php";
require_once "BussinessLogic/ShowTodoList.php";

addTodoList("Febrian");
addTodoList("Tisna");
addTodoList("Setiawan");
addTodoList("Mpi");
addTodoList("Kampret");

showTodoList();

deleteTodoList(3);

showTodoList();

deleteTodoList(4);

showTodoList();

$success = deleteTodoList(6);
var_dump($success);

showTodoList();