<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questionnaire</title>
    <link rel="icon" href="/images/Nursing.ico" type="image/x-con">
    

    <link rel="stylesheet" href="/sprint2/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1a3fb24dcc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        nav {
            box-shadow: 0 3px 6px
        }
        body {
            background-color: #106333;
        }
        #text {
            margin-top: 3em;
        }

    </style>
</head>
<body data-bs-theme="light">

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
                <a class="nav-link mx-5" href="/sprint2/index.html" role="button">Requirements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint2/questionnaire.html" role="button">Questionnaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint2/contacts.html" role="button">Contact Us</a>
            </li>
        </ul>
    </div>
    <button onclick = "darkMode()" id="dark-mode-toggle" class="btn btn-dark"> Dark </button>
</nav>

<!--page content-->
<div class="container container-bg">
    <?php
    echo '<div class="container justify-content-center m-5">
            <div class="row">
              <div id="text" class="col-lg-12">
                <img src="/images/checkmark_icon.png" class="img-responsive center-block d-block m-auto" width="150px" alt="stop">
                <h1 class="text-center my-3">Awesome!</h1>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 text-center">
            <p>Thank you for completing the form! We will review your issue.</p>
            </div>
            </div>';
    $to = "GreenRiverChipmunks@gmail.com";
    $subject =  "Request from " .$_POST["name"];

    $message = "<html><body><p>Help request from ".$_POST['name']."</p>";
    if ($_POST['phone'] != null){
        $message .= "<p>Phone Number: ".$_POST['phone']."</p>";
    }
    $message .= "<p>Message: ".$_POST['message']."</p>";
    $message .= "</body></html>";
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type:text/html;charset=UTF-8"."\r\n";
    $header .= "From: " . $_POST['email'] . "\r\n";
    $header .= "Reply-To: " . $_POST['email'] . "\r\n";
    $header .= "CC: GreenRiverChipmunks@gmail.com" . "\r\n";

    mail($to, $subject, $message, $header);
    ?>



</div>
<script src="/sprint2/dark_mode.js"></script>
</body>
</html>