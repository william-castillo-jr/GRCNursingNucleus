<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Receipt</title>
    <link rel="icon" href="/images/Nursing.ico" type="image/x-con">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sprint2/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</head>

<body data-bs-theme="light">

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
                echo "<span style=font-size:250%; padding: 10px;>Please fill out Experience form</span>";
                exit();
            }
            if ($_POST !== null)
            {
                if ($month == "January" ||$month == "February" || $month == "March")
                {
                    echo "<body style='background-color: $JanFebMar;'>";
                }
                if ($month == "April" || $month == "May" || $month == "June")
                {
                    echo "<body style='background-color: $AprMayJun;'>";
                }
                if ($month == "July" || $month == "September")
                {
                    echo "<body style='background-color: $JumSep;'>";
                }
                if ($month == "October" || $month == "November" || $month == "December")
                {
                    echo "<body style='background-color: $OctToDec;'>";
                }
            }


            $first = $month[0];
            $random = rand(0000,9999);
            $year = date("Y");
            $last1 = $year[2];
            $last2 = $year[3];

            echo '<span style="font-size:250%; padding: 10px;">'.$month." ".$year;
            echo "<br />".$first.$random.$last1.$last2;
            echo "<br />Screenshot this page as a receipt for your Instructor.</span>";
            ?>
    </body>
</html>