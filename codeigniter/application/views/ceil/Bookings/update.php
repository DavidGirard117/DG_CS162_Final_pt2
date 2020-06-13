<?php if(isset($bookings[0]['id'])) : ?>
<?php echo validation_errors(); ?>
<?php echo form_open('bookings/update/'.$bookings[0]['id']); ?>
<?php endif; ?>

<div class="w3-section w3-card"><?php if(isset($message)) echo $message; ?></div>