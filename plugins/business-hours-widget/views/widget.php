<!-- This file is used to markup the public-facing widget. -->



<?php if(strlen(trim($monday_friday)) > 0) : ?>
  <p>
    <span class="business-hours-items">Monday-Friday:</span> <?php echo $monday_friday; ?>;
  </p>

<?php endif; ?>

<?php if(strlen(trim($saturday)) > 0) : ?>
  <p>
    <span class="business-hours-items">Saturday:</span> <?php echo $saturday; ?>;
  </p>
<?php endif; ?>

<?php if(strlen(trim($sunday)) > 0) : ?>
  <p>
    <span class="business-hours-items">Sunday:</span> <?php echo $sunday; ?>;
  </p>
<?php endif; ?>