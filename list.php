<select name="mydropdownlist">
<?php
	$options = array('option1' => 'option 1'
				 'option2' => 'option 2'
				 'option3' => 'option 3');

	foreach($options as $value => $caption)
   {
		echo "<option value=\"$value\">$caption</option>";
   }
?>
</select>