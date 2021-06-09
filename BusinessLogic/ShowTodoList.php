<?php

/**
 * Menampilkan data di list
 * @return [type] [description]
 */
function showTodoList()
{
    global $todolist;

    echo "TODOLIST" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        echo "$number. $value";
    }
}

?>