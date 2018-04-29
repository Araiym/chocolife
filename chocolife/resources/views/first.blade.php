<a href='<?php echo route('house.create'); ?>'>Create</a>
<br>
<br>
<table border="1">
	<tr>
		<th>Nb</th>
		<th>Id</th>
		<th>Address</th>
		<th>Action<th>
	</tr>
	<?php
	$no = 1;
	foreach ($house as $key => $value) {
	?>
	<tr>
		<td><?php echo $no++;  ?></td>
		<td><?php echo $value->Id; ?></td>
		<td><?php echo $value->address; ?></td>
		<td>
			<a href='<?php echo route('house.edit',$value->Id); ?>'>Edit</a>
			&nbsp;|&nbsp;
			<form action="<?php echo route('house.destroy', $value->Id) ?>" method="post" style="display: inline-block;">
				<?php echo csrf_field() ?>
				<?php echo method_field('DELETE') ?>
				<a href="javascript:;" onclick="confirm_delete(this.parentNode)">Delete</a>
			</form>
		</td>
	</tr>
	<?php
	}
	?>
</table>

<script type="text/javascript">
function confirm_delete(form){
	c = confirm("Delete Data?");
	if(c == true){
		form.submit();
	}else{
		// do nothing
	}
}
</script>
