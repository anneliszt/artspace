<!-- Error page -->

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo nl2br($error) ?></p>
  	<?php endforeach ?>
  </div>
<?php endif ?>

<?php  if (count($register) > 0) : ?>
	<div class="error">
		<?php foreach ($register as $register) : ?>
		<p><?php echo nl2br($register) ?></p>
		<?php endforeach ?>
  </div>

<?php endif ?>


