<!doctype html>
<html>
  <head>
    <title><?php _e( 'WP Facebook Comments Options', 'wpfc' ) ?></title>
</head>
<body>
<?php
global $is_IE;
if ($is_IE){
  echo "<p style='font-size:18px; color:#F00;'>" . __( 'Important Notice:', 'wpfc') . "</p>";
  echo "<p style='font-size:16px; color:#F00;'>" . 
  		__( 'You are using Internet Explorer. This plugin may not work properly with IE. Please use any other browser.', 'wpfc') . "</p>";
  echo "<p style='font-size:16px; color:#F00;'>" . __( 'Recommended: Google Chrome.', 'wpfc') . "</p>";
}
?>
  
<!-- <div class="woosocio-service-entry" >
</div>
 -->
 <h3 class="ws-table-title"> <?php _e( 'Comments Box!', 'wpfc' ); ?> </h3>
	<!-- Video tutorial   
<div class="woosocio-service-entry">    

</div>
-->

</body>
</html>