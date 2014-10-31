<?php echo form_open('welcome/update'); ?>
<?php foreach ($record as $key): ?>
	<input type="hidden" name="ID" value="<?php echo $key->ID; ?>">
	Login :<input type="text"  name="Login" value="<?php echo $key->Login; ?>"><br>
	Senha :<input type="text" value="<?php echo $key->Senha; ?>" name="Senha"><br>
	Email :<input type="text" value="<?php echo $key->Email; ?>" name="Email"><br>
	<input type="submit" value="submit"><br>
<?php endforeach ?>
<?php echo form_close(); ?>