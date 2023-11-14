<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
     <h1>Order Summary</h1>
     <h3>Name:</h3><?php echo $_POST["name"]; ?>
     <h3>Number:</h3><?php echo $_POST["phone"]; ?>
     <h3>Size:</h3>
     
     <!-- conditional statement for printing out price sizes -->
     <?php 
     $size = "";
     $price = "";
     if ($_POST["sizes"] == "Small")
     {
         $price = '$20.99';
     }
     elseif ($_POST["sizes"] == "Medium")
     {
         $price = '$35.99';
     }
     else
     {
         $price = '$55.99';
     }
     $size = $_POST["sizes"].': '.$price;
     echo $size;
     ?>
     
     <h3>Toppings:</h3>
    
     <?php 
     if(isset($_POST['toppings'])) 
     {
         foreach($_POST['toppings'] as $selectedOption) 
         {
            echo $selectedOption . "<br>";
          }
          
        }
        else 
        {
            echo "No options selected.";
        }
     ?>

    
     
    
     <h3>Comments:</h3><?php echo $_POST["comments"]; ?>
     
     <?php 
     
        require '/home/chipmunk/db.php';
        $both_toppings = "";
        foreach($_POST['toppings'] as $value) 
         {
            $both_toppings .= $value. " ";
         }
        $name = $_POST['name'];
        $phone =$_POST['phone'];
        $sizes = $_POST['sizes'];
        $comments = $_POST['comments'];

    
        
        $sql = "INSERT INTO `pizza_data`(`Name`, `Phone`, `Size`, `Toppings`, `Price`, `Comments`) VALUES ('".$name."','".$phone."','".$sizes."','".$both_toppings."','".$price."','".$comments."')";
        
         $result = @mysqli_query($cnxn, $sql);
 
        
     ?>
     
     
     
    <?php
     
      $to = "GreenRiverChipmunks@gmail.com";
      $subject =  "Pizza Order for " .$_POST["name"];
     
      $message = "<html><body><p>Thank you for placing your order!</p><p>Name: ".$_POST['name']."</p><p>Phone Number: ".$_POST['phone']."</p><p>Size: ".$size."</p><p>Toppings: ".$_POST["toppings"]."</p><p>Comments: ".$_POST['comments']."</p></body></html>";
     
     
      $header = "MIME-Version: 1.0" . "\r\n";
      $header .= "Content-type:text/html;charset=UTF-8"."\r\n";
      $header .= "From: GreenRiverChipmunks@gmail.com" . "\r\n" . "CC: GreenRiverChipmunks@gmail.com";


      mail($to, $subject, $message, $header);
     
     ?>
     
     
     
     
 </body>
</html>