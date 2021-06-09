<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList('Ikhsan');
addTodoList('Heriyawam');
addTodoList('Jono');
addTodoList('Joni');

$success = removeTodoList(5);
var_dump($success);
showTodoList();