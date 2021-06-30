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
        <h4  id="monthAndYear"></h4>
        <table class="calendar" id="calendar">
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
            <tbody id="calendar-body">
            </tbody>
        </table>
        <br/>
    </div>
</div>
<script src="scripts.js"></script>
<script>
let firstDay='<?php echo $birth_date;?>';
let bornDate = new Date(firstDay);  //getting date from user
let bornMonth = bornDate.getMonth();
let bornYear = bornDate.getFullYear();
let bornDay=bornDate.getDate();

let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let monthAndYear = document.getElementById("monthAndYear");

showCalendar(bornMonth, bornYear,bornDay);
</script>
</body>
</html>
