<?php

require_once "model/TodoList.php";
require_once "BussinessLogic/AddTodoList.php";

addTodoList("Febrian");
addTodoList("Tisna");
addTodoList("Setiawan");

var_dump($todoList);