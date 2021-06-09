<?php

require_once "View/ViewShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Ikhsan");
addTodoList("Heriyawan");
addTodoList("Kuncoro");

viewShowTodoList();