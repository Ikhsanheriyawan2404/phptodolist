<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

function viewAddTodoList()
{
	echo "-----------" . PHP_EOL;
	echo "MENAMBAH TODO LIST" . PHP_EOL;	
	echo "-----------" . PHP_EOL;

	$todo = input("Todo : (x untuk batal)");
	if ($todo == "x") {
		// batal
	} else {
		addTodoList($todo);
	}
}