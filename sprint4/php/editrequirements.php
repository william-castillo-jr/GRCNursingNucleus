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
<body class="light">

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
<!---->
<!--<div class="container p-3 mb-5 rounded container-bg" style="margin-top: 20px; box-shadow: 0 3px 6px;">-->
<!--    <div class="card">-->
<!--        <div class="card-body container-bg">-->
<!--            <div class=”row”>-->
<!--                <div class=col-12”>-->
<!--                    <div>-->
<!--                        <h1>Edit Requirements Data</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            -->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<script src="/sprint4/dark_mode.js"></script>-->

<div class="container mt-4">
    <h1 class="text-center">List of Entries</h1>
    <br>
    <div class="table-responsive">
        <table class="table table-striped" id="sortable-table">
            <thead>
            <tr>
                <th onclick="sortTable(0, 'numeric')">Clinic Rating</th>
                <th onclick="sortTable(1, 'alphabetic')">Hospital/Placement</th>
                <th onclick="sortTable(2, 'numeric')">Enjoyed Site</th>
                <th onclick="sortTable(3, 'numeric')">Supportive Site</th>
                <th onclick="sortTable(4, 'numeric')">Facilitated Learning</th>
                <th onclick="sortTable(5, 'numeric')">Preceptor Helped</th>
                <th onclick="sortTable(6, 'numeric')">Recommend Site</th>
                <th onclick="sortTable(7, 'numeric')">Average</th>
                <th>Comments</th>
                <th>Feedback</th>


                <!--<th>Action</th>-->
            </tr>
            </thead>
            <tbody>
            <?php
            require '/home/chipmunk/db.php';

            $sql = "SELECT * FROM `experience`";
            $result = @mysqli_query($cnxn, $sql);

            $data = [];
            $hospitalRatings = [];
            while ($row = mysqli_fetch_assoc($result))
            {
                $clinic = $row["What clinical site did you attend?"];
                $rating1 = $row["I enjoyed my time at this clinic"];
                $rating2 = $row["The clinical staff was supportive of my role."];
                $rating3 = $row["The site helped facilitate my learning objectives."];
                $rating4 = $row["The preceptor helped facilitate my learning objectives."];
                $rating5 = $row["I would recommend this site to another student."];
                $comments = $row["Comments"];
                $feedback = $row["Feedback"];

                $ratings = array($rating1, $rating2, $rating3, $rating4, $rating5);
                $sum = array_sum($ratings);
                $count = count($ratings);
                $average = round($sum / $count, 2);

                if (!isset($hospitalRatings[$clinic])) {
                    $hospitalRatings[$clinic] = array('sum' => 0, 'count' => 0);
                }

                // Update the sum and count for the hospital
                $hospitalRatings[$clinic]['sum'] += $average;
                $hospitalRatings[$clinic]['count'] ++;

                $rowData = [
                    "clinic" => $clinic,
                    "rating1" => $rating1,
                    "rating2" => $rating2,
                    "rating3" => $rating3,
                    "rating4" => $rating4,
                    "rating5" => $rating5,
                    "comments" => $comments,
                    "feedback" => $feedback,
                ];

                // Add the row data to the main data array
                $data[] = $rowData;
            }


            foreach ($data as $row){

                $ratings = array($row['rating1'], $row['rating2'], $row['rating3'], $row['rating4'], $row['rating5']);
                $sum = array_sum($ratings);
                $count = count($ratings);
                $average = round($sum / $count, 2);

                echo "<tr>
                        <td>" . round($hospitalRatings[$row['clinic']]['sum']/$hospitalRatings[$row['clinic']]['count'], 2) . "</td>
                        <td>" . $row['clinic'] . "</td>
                        <td>" . $row['rating1'] . "</td>
                        <td>" . $row['rating2'] . "</td>
                        <td>" . $row['rating3'] . "</td>
                        <td>" . $row['rating4'] . "</td>
                        <td>" . $row['rating5'] . "</td>
                        <td>" . $average . "</td>
                        <td>" . $row['comments'] . "</td>
                        <td>" . $row['feedback'] . "</td>
                        </tr>";

            }


            // <td>
            //     <a href='delete'>Delete</a>
            // </td>

            // foreach ($hospitalRatings as $hospital => $data) {
            //     $averageHospital = round($data['sum'] / $data['count'], 2);

            // }


            ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    var sortOrders = {}; // Keep track of sort orders for each column

    function sortTable(columnIndex, dataType) {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("sortable-table");
        switching = true;

        // Set initial sort order for the column
        sortOrders[columnIndex] = sortOrders[columnIndex] === 'asc' ? 'desc' : 'asc';

        while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;

                x = rows[i].getElementsByTagName("td")[columnIndex];
                y = rows[i + 1].getElementsByTagName("td")[columnIndex];

                if (dataType === 'alphabetic') {
                    if (
                        (sortOrders[columnIndex] === 'asc' && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) ||
                        (sortOrders[columnIndex] === 'desc' && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase())
                    ) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (dataType === 'numeric') {
                    if (
                        (sortOrders[columnIndex] === 'asc' && Number(x.innerHTML) > Number(y.innerHTML)) ||
                        (sortOrders[columnIndex] === 'desc' && Number(x.innerHTML) < Number(y.innerHTML))
                    ) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }

            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
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