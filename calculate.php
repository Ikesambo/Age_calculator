<?php

  class Age{

    public $birth_date;

    public $current_date;


    //function for calculating
    function set_date($birth_date,$current_date){

      $first=date_create($birth_date);

      $last=date_create($current_date);

      $diff=$first->diff($last);

      $interval=date_diff($first,$last);


      //calculating number of days
      $num_days=$interval->format('%R%a');

      $this->numDays=$diff->format('%d days');


      //calculating  number of Weeks
      $numWeeks=$num_days/7;

      $remaDays=$num_days%7;


      //calculating hrs
      $num_hrs=$num_days*24;


      //calculating minutes
      $numMins=$num_hrs*60;


      //calculting numSec
      $numSec=$numMins*60;


      if($first<=$last){

      	   $first_line="";
      	   $sec_line="";
      	   $third_line="";
      	   $fourth_line="";

      	if($diff->y!=0){
      		 $first_line=$diff->y." years ".$diff->m." months ".$diff->d." days <br>or ";
      		 $sec_line=($diff->y*12+$diff->m)."months" .($diff->d)." days <br>or ";
      		 $third_line=floor($numWeeks)." Weeks ".$remaDays." days <br>or ";
      		 $fourth_line=number_format($num_days)." days <br> or ".number_format($num_hrs)." hours <br>  or ".
                        number_format($numMins)." minutes <br>  or ".number_format($numSec)." seconds<br>";
      		 }

       else if(floor($numWeeks)>=4&&$diff->y==0){

      			$sec_line=$diff->m."months" .$diff->d." days <br>or ";
      			$third_line=floor($numWeeks)." Weeks ".$remaDays." days <br>or";
      			$fourth_line=number_format($num_days)." days <br> or ".number_format($num_hrs)." hours <br>  or ".
                         number_format($numMins)." minutes <br>  or ".number_format($numSec)." seconds<br>";
      			}

       else if($diff->y/12==0&&$diff->y==0)
      			{
      			$third_line=floor($numWeeks)." Weeks ".$remaDays." days <br>or ";
      			$fourth_line=number_format($num_days)." days <br> or ".number_format($num_hrs)." hours <br>  or ".
                        number_format($numMins)." minutes <br>  or ".number_format($numSec)." seconds<br>";
      		  }

      	 else{
      			$fourth_line=number_format($num_days)." days <br> or ".number_format($num_hrs)." hours <br>  or ".
                        number_format($numMins)." minutes <br>  or ".number_format($numSec)." seconds<br>";
      			 }
      			$answer=$first_line.$sec_line.$third_line.$fourth_line;
      				echo "<div><h2>Result</h2></div>";
      				echo "<h1 style='color:black;'>Age:</h1>";
      				echo "<p>".$answer."</p>";
                      include("calander_1.php");
                      include("calander_2.php");

            }

            else {
              echo "<a style='color:red;font-size:25px;'>Date of birth needs to be earlier than age at date</a>";
            }
    }

  }
 ?>
