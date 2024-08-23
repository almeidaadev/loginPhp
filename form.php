<?php
require "dataBase"

if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];

	if (empty($name) || empty($lastname)) {
		echo "Name and Last Name fields are required.";
	} else {
		$stmt = $Db->mysqli->prepare("INSERT INTO dbteste (name, lastname) VALUES (?, ?)");
		if ($stmt) {
			$stmt->bind_param("ss", $name, $lastname);
			if ($stmt->execute()) {
				echo "Adicionado no banco";
			} else {
				echo "Erro ao adicionar: " . $stmt->error;
			}
			$stmt->close();
		} else {
			echo "Erro na preparação da consulta: " . $Db->mysqli->error;
		}
	}

	$Db->close();