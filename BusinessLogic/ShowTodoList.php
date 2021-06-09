<?php

/**
 * Menampilkan data di list
 * @return [type] [description]
 */
function showTodoList()
{
    global $todolist;
    echo "-----------" . PHP_EOL;
    echo "TODOLIST" . PHP_EOL;
    echo "-----------" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}

?>