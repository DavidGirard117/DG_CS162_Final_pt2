<?php if(isset($employees[0]['id'])) : ?>
<?php echo validation_errors(); ?>
<?php echo form_open('employees/update/'.$employees[0]['id']); ?>
<?php endif; ?>

<div class="w3-section w3-card"><?php if(isset($message)) echo $message; ?></div>