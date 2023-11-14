<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?php echo '<p>POST</p>'; ?> 
  <?php echo var_dump($_POST); ?>

  <?php echo '<p>GET</p>'; ?> 
  <?php echo var_dump($_GET); ?> 
  <!--echo $_GET["fieldname"]-->
  <!--if($_GET["fieldname"] == "something"){} -->
 </body>
</html>