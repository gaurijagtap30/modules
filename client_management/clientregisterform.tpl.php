
<?php
drupal_add_js('jQuery(document).ready(function(){ 
	jQuery("#client-registration-form").validate();
	
 });', 'inline');
?>

  <div class="dashboard_content">
    <?php print render($registrationform); ?>
  </div>

