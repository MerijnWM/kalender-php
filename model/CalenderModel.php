<?php

function getAllBirthDays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM data ORDER BY month, day, year";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function insertData($data)
{	
	$name = $data['name'];
	$day = $data['day'];
	$month = $data['month'];
	$year = $data['year'];

	$db = openDatabaseConnection();

	$sql = "INSERT INTO data (name, day, month, year) VALUES (:name, :day, :month, :year)";

	$query = $db->prepare($sql);
	$query->bindParam(":name", $name);
	$query->bindParam(":day", $day);
	$query->bindParam(":month", $month);
	$query->bindParam(":year", $year);
	$query->execute();
	
	$db = null;
	return true;
}

function deleteData($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM data WHERE id=$id";

	$query = $db->prepare($sql);		
	$query->execute();

	$db = null;
	return true;
}

function getBirthDay($id)
{
	$db = openDatabaseConnection();
	
	$sql = "SELECT * from data Where id=:id";

	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	
	$db = null;	

	return $query->fetchAll();
}

function updateData($data, $id){			
	$name = $data['name'];
	$day = $data['day'];
	$month = $data['month'];
	$year = $data['year'];

	$db = openDatabaseConnection();
	
	$sql = "UPDATE data SET name=:name, day=:day, month=:month, year=:year WHERE id=$id";

	$query = $db->prepare($sql);
	$query->bindParam(":name", $name);
	$query->bindParam(":day", $day);
	$query->bindParam(":month", $month);
	$query->bindParam(":year", $year);
	$query->execute();
	
	$db = null;
	return true;	
}

