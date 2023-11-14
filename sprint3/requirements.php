<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinical Requirements</title>
    <link rel="icon" href="/images/Nursing.ico" type="image/x-con">
    <link rel="stylesheet" href="/sprint3/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <style>

        nav {
            box-shadow: 0 3px 6px;
        }
        .arrow-icon {
            margin-left: 10px;
            transition: transform 0.2s;
        }

    </style>

</head>
<body data-bs-theme="light">
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
                <a class="nav-link mx-5" href="/sprint3/requirements.php" role="button">Requirements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint3/questionnaire.html" role="button">Questionnaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5" href="/sprint3/contacts.html" role="button">Contact Us</a>
            </li>
        </ul>
    </div>
    <button onclick = "darkMode()" id="dark-mode-toggle" class="btn btn-dark"> Dark </button>
</nav>

<div class="container p-3 mb-5 rounded" style="background-color: white; margin-top: 20px; box-shadow: 0 19px 38px;">
    <div class="card border-dark mb-3" style="background-color: white;">
        <div class="card-header border-dark">
            <h1 class="text-center">Green River College Nursing Program Clinical Requirements</h1>
            <br>
            <h4 class="text-center">2660*All vaccination proof must include full name, date of birth, and date of vaccine, titer (blood draw), or test</h4>
        </div>
        <?php
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="container mt-5">';
            echo '<div class="card border-dark">';
            echo '<div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseExample' . $counter . '">';
            echo '<div class="d-flex justify-content-between align-items-center">';
            echo '<h5 class="text-center mb-0" style="flex: 1;">' . $row['title'] . '</h5>';
            echo '<i class="fas fa-chevron-right arrow-icon"></i>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row collapse" id="collapseExample' . $counter . '">';




            if (!empty($row['OptionOneTitle']) || !empty($row['OptionOnePointOne'])) {
                echo '<div class="col-sm-6 mb-3 mb-sm-0">';
                echo '<div class="card">';
                echo '<div class="card-body p-2 g-col-6" style="padding: 50px 30px 50px 80px">';
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
                echo '</div>';



                if (!empty($row['OptionTwoTitle']) || !empty($row['OptionTwoPointOne'])) {
                    echo '<div class="card">';
                    echo '<div class="card-body">';
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
                    echo '</div>';
                }
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $counter++;
        }
        ?>
        <div>
            <h3 class="text-center mt-3">If you have any questions about the requirements, you can email me at csavage@greenriver.edu</h3>
        </div>
    </div>
</div>

<script>
    var collapse = document.querySelectorAll(".card-header");
    for (var i = 0; i < collapse.length; i++) {
        collapse[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>

<script src="/sprint3/dark_mode.js"></script>
</body>
</html>