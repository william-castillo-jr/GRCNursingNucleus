<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm</title>
    <link rel="icon" href="/images/Nursing.ico" type="image/x-con">
    

    <link rel="stylesheet" href="/sprint4/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    
    body{
        background: white;
    }
        #review-input{
            margin: 30px 100px;
        }
        #text {
            margin-top: 3em;
        }
        #button{
            margin-top: 4em;
            padding: 10px 30px ;
            text-align: center;
            font-size: 17px;
        }



    </style>
</head>
<body>

<!--navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="http://chipmunks.greenriverdev.com/">
        <img src="/images/Nursing.png" class="nav-item" style="margin-left: 12px" width=50px height=50px>
    </a>
    <a class="navbar-brand" href="/index.html"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint4/requirements.php" role="button">Requirements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint4/questionnaire.php" role="button">Questionnaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint4/contacts.html" role="button">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="http://chipmunks.greenriverdev.com/sprint4/php/viewentries.php" role="button">View Entries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="http://chipmunks.greenriverdev.com/sprint4/php/editrequirements.php" role="button">Edit Requirements</a>
            </li>
        </ul>
    </div>
    <button class="theme-toggle-button btn btn-dark m-3">Dark</button>
</nav>

<!--page content-->
<div class="container">
    <?php
    $hasValue = true;
    $requiredFields = array(
        "What clinical site did you attend?" => $_POST["clinicSite"],
        "I enjoyed my time at this clinic." => $_POST["rating-qn2"],
        "The clinical staff was supportive of my role." => $_POST["rating-qn3"],
        "The site helped facilitate my learning objectives." => $_POST["rating-qn4"],
        "The preceptor helped facilitate my learning objectives." => $_POST["rating-qn5"],
        "I would recommend this site to another student." => $_POST["rating-qn6"]
    );

    foreach ($requiredFields as $field => $value) {
        if (empty($value)) {
            $hasValue = false;
            break;
        }
    }

    if ($hasValue) {
        echo '<div class="container justify-content-center m-5">
                <div class="row">
                  <div id="text" class="col-lg-12">
                    <img src="/images/checkmark_icon.png" class="img-responsive center-block d-block m-auto" width="150px" alt="stop">
                    <h1 class="text-center my-3">Awesome!</h1>
                  </div>
                </div>
                <div class="row">
                <div class="col-lg-12 text-center">
                <p>Thank you for completing the form! Please review your entry below.</p>
                </div>
                </div>';
        echo "<div class='card p-5 shadow-lg p-3 mb-5 bg-white rounded' style='border-radius: 5%' id='review-input'><h2>Form Confirmation</h2><br>";

        foreach ($requiredFields as $field => $value) {
            echo "<p><b>$field :</b><br> $value</p><br>";
        }
        $last2Fields = array_slice($_POST, -2, 2);
        foreach ($last2Fields as $field => $value) {
            echo "<p><b>$field :</b> $value</p><br>";
        }

        echo ' </div>
 <div class="row">
         <div class="col-12 text-center mt-5">
         <h4>Are you ready to submit?</h4>
         </div>
         </div>
         <div class="row">
          <div class="col-6 text-center">
          <a id="button" class="btn btn-danger btn-lg" href="/sprint4/questionnaire.html" role="button">Back to Form</a>
          </div>
          
          <div class="col-6 text-center">
            <form name="questionnaire" method="post" action="/sprint4/php/receipt.php">';
      foreach ($_POST as $field => $value) {
          echo '<input type="hidden" name="'.$field.'" value= "'.$value.'">';
      }
          echo '<input name="button" id="button" class="btn btn-success btn-lg" type="submit" value="Submit" role="button">
        </form>
      </div>
    </div>';
    
    //     require '/home/chipmunk/db.php';

    //         $qn1 = $_POST['clinicSite'];
    //         $qn2 =$_POST['rating-qn2'];
    //         $qn3 =$_POST['rating-qn3'];
    //         $qn4 =$_POST['rating-qn4'];
    //         $qn5 =$_POST['rating-qn5'];
    //         $qn6 =$_POST['rating-qn6'];
    //         $qn7 =$_POST['Comments'];
    //         $qn8 =$_POST['Feedback'];
    
    
    
    //         $sql = "INSERT INTO `experience`(`What clinical site did you attend?`, `I enjoyed my time at this clinic`, `The clinical staff was supportive of my role.`, `The site helped facilitate my learning objectives.`, `The preceptor helped facilitate my learning objectives.`, `I would recommend this site to another student.`, `Comments`, `Feedback`) VALUES ('".$qn1."','".$qn2."','".$qn3."','".$qn4."','".$qn5."','".$qn6."','".$qn7."','".$qn8."')";
    
    //         $result = @mysqli_query($cnxn, $sql);


 
    } else {
        echo '<div class="col d-flex justify-content-center">
              <div class="card p-lg-5 m-lg-5 shadow-lg p-3 mb-5 bg-white rounded" style="width: 30em; height: 40em; border-radius: 5%">
                  <div class="row">
                      <div id="text" class="col-lg-12">
                        <img src="/images/warning_light.PNG" class="img-responsive center-block d-block mx-auto" width="200px" alt="stop">
                        <h1 class="text-center">Oops..</h1>
                      </div>
                  </div>
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h4>Form was not filled out correctly. Please go back and try again.</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center">
                  <a id="button" class="btn btn-success btn-lg" href="/sprint4/questionnaire.html" role="button">Back to Form</a>
                  </div>
                </div>
              </div>
              </div>';
    }
    ?>


</div>

<!--//     document.querySelector('.theme-toggle-button').addEventListener('click', (element) =>{-->
<!--//     document.body.classList.toggle('dark');-->
<!--//       if (element.target.innerHTML === "Light") {-->
<!--//           element.target.innerHTML = "Dark";-->
<!--//       } else {-->
<!--//           element.target.innerHTML = "Light";-->
<!--//       }-->
<!--//     });-->

</body>
</html>