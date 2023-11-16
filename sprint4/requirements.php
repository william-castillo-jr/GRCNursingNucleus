<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinical Requirements</title>
    <link rel="icon" href="/images/Nursing.ico" type="image/x-con">
    <link rel="stylesheet" href="/sprint4/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


</head>
<body>
<?php
$username = 'chipmunk';
$password = 'H13Wh9FEo-w5b[';
$hostname = 'localhost';
$database = 'chipmunk_grcc';
$cnxn = @mysqli_connect($hostname, $username, $password, $database) or
die("Error Connecting to DB: " . mysqli_connect_error());

$sql = "SELECT * FROM requirements";
$result = @mysqli_query($cnxn, $sql);
?>

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

<div class="container border rounded-5 my-5 shadow" style="width: 950px">
    <div id="box" class="row p-5 m-3">
        <div class="text-center">
            <h1>Green River College Nursing Program Clinical Requirements</h1>
            <br>
            <h4>2660*All vaccination proof must include full name, date of birth, and date of vaccine, titer (blood draw), or test</h4>
        </div>
        <?php
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="container mt-5">';
            echo '<div class="border p-2 rounded-5" data-bs-toggle="collapse" data-bs-target="#collapseExample' . $counter . '">';
            echo '<div >';
            echo '<div class="d-flex justify-content-between align-items-center">';
            echo '<h5 class="text-center mb-0" style="flex: 1;">' . $row['title'] . '</h5>';
            echo '<i class="fas fa-chevron-right arrow-icon mx-4"></i>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row collapse p-5" id="collapseExample' . $counter . '">';


            if (!empty($row['OptionOneTitle']) || !empty($row['OptionOnePointOne'])) {
                echo '<div class="container p-2 col-lg-5">';
                echo '<h5>' . $row['OptionOneTitle'] . '</h5>';
                if (!empty($row['OptionOnePointOne'])) {
                    echo '<li class="card-text">' . $row['OptionOnePointOne'] . '</li>';
                }
                if (!empty($row['OptionOnePointTwo'])) {
                    echo '<li class="card-text">' . $row['OptionOnePointTwo'] . '</li>';
                }
                if (!empty($row['OptionOnePointThree'])) {
                    echo '<li class="card-text">' . $row['OptionOnePointThree'] . '</li>';
                }
                echo '</div>';
    



                if (!empty($row['OptionTwoTitle']) || !empty($row['OptionTwoPointOne'])) {
                    
                    echo'<div class="container col-lg-2"><h2>OR</h2></div>';
                    echo '<div class="container p-2 col-lg-5">';
                    echo '<h5 class="card-title">' . $row['OptionTwoTitle'] . '</h5>';
                    if (!empty($row['OptionTwoPointOne'])) {
                        echo '<li class="card-text">' . $row['OptionTwoPointOne'] . '</li>';
                    }
                    if (!empty($row['OptionTwoPointTwo'])) {
                        echo '<li class="card-text">' . $row['OptionTwoPointTwo'] . '</li>';
                    }
                    if (!empty($row['OptionTwoPointThree'])) {
                        echo '<li class="card-text">' . $row['OptionTwoPointThree'] . '</li>';
                    }
                    echo '</div>';
                }
                echo '</div>';
            }
          
            echo '</div>';
            echo '</div>';
            $counter++;
        }
        ?>
        <div>
            <h6 class="text-center mt-5">If you have any questions about the requirements, you can email me at csavage@greenriver.edu</h6>
        </div>
    </div>
</div>
<script>
    document.querySelector('.theme-toggle-button').addEventListener('click', (element) =>{
    document.body.classList.toggle('dark');
      if (element.target.innerHTML === "Light") {
          element.target.innerHTML = "Dark";
      } else {
          element.target.innerHTML = "Light";
      }
    });
</script>

</body>
</html>