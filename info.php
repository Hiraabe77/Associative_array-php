<style>
body{    
        color:white;
        margin:auto 0;
       background:url(p.png);
     background-size:cover;
     background-position:center;
      font-family:verdana;
      font-size:40px;
  
    }
    h1{
  background:darkblue;
      text-align:center;
      font-size:20px;     
position: relative;
font-size:1.5cm;
font-weight: bold;
text-decoration: none;
line-height: 4cm;
letter-spacing: 2px;
text-transform: uppercase;
color: transparent;
-webkit-text-stroke: 1px rgba(225, 225, 225, 225);
}
</style>
<?php
$studentId="130553";
$student_name="Abdullahi Ali Hiraabe";
$subject="PHP web Development ";
$activty_one=10;
$midterm=25;
$activity_two=10;
$final_result=50;
$total_mark=$activty_one+$activity_two+$midterm+$final_result;
$semester="5th Semester";
echo "<h1> Student Information </h1>";
echo "StudentId:$studentId <br>";
echo "student Name: $student_name <br>";
echo "Subjects: $subject <br>";
echo "Activity one: $activty_one <br>";
echo "mid term :$midterm <br>";
echo "activity two:$activity_two <br>";
echo "finaal result:$final_result <br>";
echo "total mark:$total_mark <br>";
echo "semester:$semester<br> ";
 echo "Grade:";
if($total_mark>50 )
{

  echo "A+";
}
else {
echo "failled";
}
//$student_name+"Subject"+$subject+"activity one"+$activty_one
//"activity two"+$activity_two+"final result"+$final_result+"total mark"+$total_mark+"semester"+$semester;
?>





  
