<?php


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="">
    <div class="card">
        <h4  id="monthAndYear_2"></h4>
        <table class="showCalendar_2" id="calendar_2">
            <thead>
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            </thead>
            <tbody id="calendar-body_2">
            </tbody>
        </table>
        <br/>
    </div>
</div>
<script src="scripts_2.js"></script>
<script>
firstDay='<?php echo $current_date;?>';
bornDate = new Date(firstDay);  //getting date from user
bornMonth = bornDate.getMonth();
bornYear = bornDate.getFullYear();
bornDay=bornDate.getDate();

months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

monthAndYear = document.getElementById("monthAndYear_2");

showCalendar_2(bornMonth, bornYear,bornDay);
</script>
</body>
</html>
