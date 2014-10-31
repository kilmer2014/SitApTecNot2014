 <br>
<a href="<?php echo site_url('welcome/form_insert'); ?>">Create data</a>
<table border="1" width="70%">
	<tr>
		<td>ID</td>
		<td>Login</td>
		<td>Senha</td>
		<td>Email</td>
		
	</tr>
	<?php foreach ($record as $key): ?>
	<tr>
		<td><?php echo $key->ID; ?></td>
		<td><?php echo $key->Login; ?></td>
		<td><?php echo $key->Senha; ?></td>
		<td><?php echo $key->Email; ?></td>
		<td><?php echo anchor('welcome/form_edit/'.$key->ID, 'Edit'); ?>|
		<?php echo anchor('welcome/delete/'.$key->ID, 'Delete'); ?></td>
	</tr>
	<?php endforeach ?>
</table>