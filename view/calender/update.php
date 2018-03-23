<p><a href="<?=URL?>Calender">< Back</a></p>

<?php foreach($birthdays as $birthday){	?>

<form action="<?=URL?>Calender/updateSave?id=<?= $birthday["id"]; ?>" method="post">	
	<label for="name">Name</label>
	<input type="text" id="name" name="name" value="<?= $birthday["name"]; ?>"><br>
	<label for="day">Day</label> 
	<input type="text" id="day" name="day" value="<?= $birthday["day"]; ?>"><br>
	<label for="month">Month</label>
	<input type="text" id="month" name="month" value="<?= $birthday["month"]; ?>"><br>
	<label for="year">Year</label>
	<input type="text" id="year" name="year" value="<?= $birthday["year"]; ?>"><br>
	<input type="submit" id="save" value="Save">
</form>

<?php } ?>
