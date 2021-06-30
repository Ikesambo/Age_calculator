<html>
  <head><title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form method="POST" action="index.php">
    <br>
    <h1>Age Calculator</h1>

      <?php
          include("results.php");
	   ?>
    <div class="container-2">
       <br><br>
       <a>Date of Birth</a><br>
       <input type="date" name="datefrom"  id="first" required>
       <br>
	   <br>
	   <a>Age at the age of</a><br>
       <input type="date" name="dateTo" required>
       <br>
	   <div class="button">
          <input type="submit" name="calculate" value="Calculate">
       </div>
     </div>
	 </form>
  </body>
</head>


