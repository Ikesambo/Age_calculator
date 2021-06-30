<html>
<head>
</head>
<body >
<script type="text/javascript">
  var firstDay='<?php echo $start_day;?>';
  var dt= new Date(firstDay);
  var month=dt.getMonth(); // read the current month
  var year=dt.getFullYear(); // read the current year
  var day=dt.getDate();

  dt=new Date(year, month, 01);//Year , month,date format

  var first_day=02 //, first day of present month
  dt.setMonth(month+1,0); // Set to next month and one day backward.
  var last_date=dt.getDate(); // Last date of present month
  var dy=1; // day variable for adjustment of starting date.
  var first_Month=""
  var f_Month=month+1;

  bornMonth=date_fun(f_Month,first_Month);
  document.write("<b><a style='margin-left:40%'>"+bornMonth+" "+year+"</a></b>")
  document.write ("<table class='table'><tr style='background-color:#add8e6;'><b><td>S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td>S</td></b>");




     for(i=0;i<=41;i++){
       if((i%7)==0){document.write("</tr><tr>");} // if week is over then start a new line
          if((i>= day) && (dy<= last_date)){
	          if(day==i-1)
                {
                   var cl="a";
                }
             else
                {
	              var cl="b";
                }
             document.write("<td class="+cl+">"+ dy +"</td>");
             dy=dy+1;
          }else {document.write("<td> </td>");} // Blank dates.
    } // end of for loop

    document.write("</tr></table>")
    </script>
       <a style="margin-left:50%">...</a><br>
          <script type="text/javascript">
var firstDay='<?php echo $last_day;?>';
var dt= new Date(firstDay);
var month=dt.getMonth(); // read the current month
var year=dt.getFullYear(); // read the current year
var st_date=dt.getDate();

dt=new Date(year, month, 01);//Year , month,date format

var first=01//, first day of present month
//document.write("first_day=" + first_day + "<br><br>");

dt.setMonth(month+1,0); // Set to next month and one day backward.
var last_date=dt.getDate(); // Last date of present month

var s_dy=1; // day variable for adjustment of starting date.
var s_Month=month+1;

  bornMonth=date_fun(s_Month,first_Month);
  document.write("<b><a style='margin-left:40%'>"+bornMonth+" "+year+"</a></b>")
  document.write ("<table class='table'><tr style='background-color:#add8e6;'><b><td>S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td>S</td></b>");
for(i=0;i<=41;i++){
if((i%7)==0){document.write("</tr><tr>");} // if week is over then start a new line
if((i>= st_date) && (s_dy<= last_date)){
          if(day==i-1)
                {
                   var cl="a";
                }
             else
                {
	              var cl="b";
                }
             document.write("<td class="+cl+">"+ s_dy +"</td>");
             s_dy=s_dy+1;
}else {document.write("<td> </td>");} // Blank dates.
} // end of for loop

document.write("</tr></table>")
</script>


</body>
</html>
