<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Ikhsan");
addTodoList("Heriyawan");

var_dump($todolist);