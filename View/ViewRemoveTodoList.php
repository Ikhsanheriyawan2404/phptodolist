<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList()
{
	echo "-----------" . PHP_EOL;
	echo "MENGHAPUS TODO LIST" . PHP_EOL;	
	echo "-----------" . PHP_EOL;

	$pilihan = input("Nomor (x untuk batal)");
	if ($pilihan == 'x') {
		// batal
	} else {
		$success = removeTodoList($pilihan);
		if ($success) {
			echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
		} else {
			echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
		}
	}
}