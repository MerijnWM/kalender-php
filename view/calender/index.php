<?php	
	$months = array("empty", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	$currentMonth;
	$currentday;

	foreach ($birthdays as $birthday)
	{
		if($currentMonth != $months[$birthday['month']])
		{
		  	echo "<h1>" . $months[$birthday['month']] . "</h1>";
		  	$currentday = "";
		  	$currentMonth = $months[$birthday['month']];
		}	
		
		if($currentday != $birthday['day'])
		{
		  	echo "<h2>" . $birthday['day'] . "</h2>";
			$currentday = $birthday['day'];
		}
		
?>
		<p>
			<a href="<?=URL?>calender/update?id=<?= $birthday['id']; ?>"><?= $birthday['name']?> (<?=$birthday['year']?>)</a>	   
			<a href="<?=URL?>calender/delete?id=<?= $birthday['id']; ?> " onclick="return  confirm('Are you sure you want to delete this birthday?')">x</a>
		</p>

<?php 		
	} 
?>

<p><a href="<?=URL?>calender/create">+ Toevoegen</a></p>


 