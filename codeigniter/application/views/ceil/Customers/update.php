<?php if(isset($customers[0]['id'])) : ?>
<?php echo validation_errors(); ?>
<?php echo form_open('customers/update/'.$customers[0]['id']); ?>
<?php endif; ?>

<div class="w3-section w3-card"><?php if(isset($message)) echo $message; ?></div>