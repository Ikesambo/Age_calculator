
  <?php
      if(isset($_POST['calculate'])){
        $start_day=$_POST['datefrom'];
        $last_day=$_POST['dateTo'];
        include("calculate.php");
		
	    $age=new Age();
        $age->set_date($start_day,$last_day);	

      }
	  else
		  echo "<p>The Age Calculator can determine the age or interval between two dates.The calculated age will be displayed
          in years,months,weeks,days,hours,minutes, and seconds.</p>
		        <br>
				<div class='container'><a><br>Modify values and click Calculate to use</a></div>";
				
		
?>
