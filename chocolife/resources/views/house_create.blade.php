<form action="<?php echo route('house.store') ?>" method="post">
	<!-- token here -->	
	<?php echo csrf_field() ?>
	Id <input type="int" name="house_id" />
	<br>
	Address <input type="text" name="house_address" />
	<br>
	<input type="submit" value="Save" />
</form>
