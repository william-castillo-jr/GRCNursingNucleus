<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questionnaire</title>
    <link rel="icon" href="/images/Nursing.ico" type="image/x-con">
    

    <link rel="stylesheet" href="/sprint3/style.css">
    <script src="/sprint3/dark_mode.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body data-bs-theme="light">

<!--navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/index.html"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <a href="http://chipmunks.greenriverdev.com/"><img src="/images/Nursing.png" class="nav-item mx-4 justify-content-left" width=50px height=50px></a>
            <li>
                <a class="nav-link mx-5" href="/sprint3/requirements.php" role="button">Requirements</a>
            </li>
            <li>
                <a class="nav-link mx-5" href="/sprint3/questionnaire.html" role="button">Questionnaire</a>
            </li>
            <li>
                <a class="nav-link mx-5" href="/sprint3/contacts.html" role="button">Contact Us</a>
            </li>
        </ul>
    </div>
    <button onclick = "darkMode()" id="dark-mode-toggle" class="btn btn-dark"> Dark </button>
</nav>

<!--page content-->
<div class="container container-bg">
   <h1>List of Entries</h1>
   <br>
   <div class="table-responsive">
   <table class="table table-striped rounded" id="sortable-table">
       <thead>
           <tr>
               <th onclick="sortTable(0, 'numeric')">Clinic Rating</th>
               <th onclick="sortTable(1, 'alphabetic')">Hospital/Placement</th>
               <th onclick="sortTable(2, 'numeric')">I enjoyed my time at this clinic</th>
               <th onclick="sortTable(3, 'numeric')">The clinical staff was supportive of my role.</th>
               <th onclick="sortTable(4, 'numeric')">The site helped facilitate my learning objectives.</th>
               <th onclick="sortTable(5, 'numeric')">The preceptor helped facilitate my learning objectives.</th>
               <th onclick="sortTable(6, 'numeric')">I would recommend this site to another student.</th>
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
</script>
<script src="/sprint3/dark_mode.js"></script>
</body>
</html>