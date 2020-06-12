<h1><?php echo $pageTitle; ?></h1>
<p>&nbsp;</p>
<?php foreach($customers as $customer) : ?>
    <div class="customer" style="width: 300px; margin: 10px auto; padding: 4px; border: 1px solid #000;">
        <?php echo $customer['FirstName'] . ' - ' . $customer['id']; ?>
    </div>
<?php endforeach; ?>