<?php

require_once "model/TodoList.php";
require_once "View/ViewDeleteTodoList.php";
require_once "BussinessLogic/AddTodoList.php";
require_once "BussinessLogic/ShowTodoList.php";

addTodoList("Febrian");
addTodoList("Tisna");
addTodoList("Setiawan");
addTodoList("Fullstack");
addTodoList("Programmer");
addTodoList("SOC Analyst");

showTodoList();
viewDeleteTodoList();
showTodoList();