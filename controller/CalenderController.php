<?php

require(ROOT . "model/CalenderModel.php");

function index()
{
	render("calender/index", array(
		'birthdays' => getAllBirthDays()));
}

function create()
{
	render("calender/create");
}

function createSave()
{	
	if (insertData($_POST)){		
		header('location: '.  "/projecten/kalender/");	
	}	
}

function delete()
{
	$id = $_GET['id'];
	if (deleteData($id)){
		header('location: '.  "/projecten/kalender/");
	}
}

function update()
{	
	$id = $_GET["id"];
	render("calender/update", array('birthdays' => getBirthday($id)));		
}

function updateSave()
{
	$id = $_GET['id'];
	if (updateData($_POST, $id)){
		header('location: '.  "/projecten/kalender/");
	}
}
