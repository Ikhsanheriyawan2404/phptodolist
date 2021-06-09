<?php

require_once 'Model/Todolist.php';
require_once 'View/ViewShowTodolist.php';
require_once 'View/ViewAddTodolist.php';
require_once 'View/ViewRemoveTodolist.php';
require_once 'BusinessLogic/ShowTodoList.php';
require_once 'BusinessLogic/AddTodoList.php';
require_once 'BusinessLogic/RemoveTodoList.php';

addTodoList('Ikhsan');
addTodoList('Heriyawan');
addTodoList('Kuncoro');
addTodoList('Budi');

viewShowTodoList();