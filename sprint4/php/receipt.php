<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Receipt</title>
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
            
        require '/home/chipmunk/db.php';
        
        // ? - placeholder for bind_param 
        $sql = "INSERT INTO `experience`(`What clinical site did you attend?`, `I enjoyed my time at this clinic`, `The clinical staff was supportive of my role.`, `The site helped facilitate my learning objectives.`, `The preceptor helped facilitate my learning objectives.`, `I would recommend this site to another student.`, `Comments`, `Feedback`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $cnxn->prepare($sql);
        
        // ssssssss - indicates a string for each variable (we have 8 's' for 8 questions)
        $stmt->bind_param("ssssssss", $qn1, $qn2, $qn3, $qn4, $qn5, $qn6, $qn7, $qn8);
        
        $qn1 = $_POST['clinicSite'];
        $qn2 = $_POST['rating-qn2'];
        $qn3 = $_POST['rating-qn3'];
        $qn4 = $_POST['rating-qn4'];
        $qn5 = $_POST['rating-qn5'];
        $qn6 = $_POST['rating-qn6'];
        $qn7 = $_POST['Comments'];
        $qn8 = $_POST['Feedback'];
        
        $stmt->execute();
   
        $stmt->close();

        $cnxn->close();
        
            
            $month = date("F");
            $JanFebMar = blue;
            $AprMayJun = green;
            $JumSep = red;
            $OctToDec = orange;

            if ($_POST == null)
            {
                echo "<span style=font-size:250%;'>Please fill out Experience form</span>";
                exit();
            }
            if ($_POST !== null)
            {
                if ($month == "January" ||$month == "February" || $month == "March")
                {
                    echo "<div class='container p-5 shadow-lg p-3 mb-5 rounded' style='background-color: $JanFebMar; height: 650px; text-align: center;'>";
                }
                if ($month == "April" || $month == "May" || $month == "June")
                {
                    echo "<div class='container p-5 shadow-lg p-3 mb-5 rounded' style='background-color: $AprMayJun; height: 650px; text-align: center;'>";
                }
                if ($month == "July" || $month == "September")
                {
                    echo "<div class='container p-5 shadow-lg p-3 mb-5 rounded' style='background-color: $JumSep;  height: 650px; text-align: center;'>";
                }
                if ($month == "October" || $month == "November" || $month == "December")
                {
                    echo "<div class='container p-5 shadow-lg p-3 mb-5 rounded' style='background-color: $OctToDec; height: 650px; text-align: center;'>";
                }
            }


            $first = $month[0];
            $random = rand(0000,9999);
            $year = date("Y");
            $last1 = $year[2];
            $last2 = $year[3];

            echo '<span style="font-size:250%;">'.$month." ".$year;
            echo "<br />".$first.$random.$last1.$last2;
            echo "<br />Screenshot this page as a receipt for your Instructor.</span>";
            ?>
            </div>
    </body>
</html>