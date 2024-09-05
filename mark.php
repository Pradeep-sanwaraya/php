<?php 
if(isset($_POST['submit'])){

    $Student=$_POST['Student'];
    $Father=$_POST['Father'];
    $Rollno=$_POST['Rollno'];
    $College=$_POST['College'];
    $enrollno=$_POST['enrollno'];
    $subject_code=$_POST['subject_code'];
    $exam_name=$_POST['exam_name'];
    $exam_date=$_POST['exam_date'];
    $class=$_POST['class'];
    $School_code=$_POST['School_code'];
    $Center_code=$_POST['Center_code'];
    $Exam_type=$_POST['Exam_type'];
    $Certification=$_POST['Certification'];

    $maths=$_POST['maths'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $english=$_POST['english'];
    $hindi=$_POST['hindi'];
    $computer=$_POST['computer'];

    $total=$maths+$physics+$chemistry+$english+$hindi+$computer;
    $per=($total/6);

    echo "<div style='border: 1px solid black; padding: 30px; width:600px;'>";
    echo "<h2>state board exam of class 12th </h2>";
    echo "<table border='1'>";
    echo "<tr><th>Student Details</th></tr>";
    echo"<tr><td>schoolcode</td>
         <td>center code</td>
        <td>EXAM type</td>
        <td>certification</td>
        </tr>";
    echo"<tr><td>$School_code</td>
        <td>$Center_code</td>
       <td>$Exam_type</td>
       <td>$Certification</td>
       </tr>";


    echo "<tr><td><b>Name:</b> $Student </td></tr>";
    
    echo "<tr><td><b>Father's Name:</b> $Father</td></tr>";
    echo "<tr><td><b>Roll No:</b> $Rollno</td></tr>";
    echo "<tr><td><b>College:</b> $College</td></tr>";
    echo "<tr><td><b>Enroll No:</b> $enrollno</td></tr>";
    echo "<tr><td><b>Subject Code:</b> $subject_code</td></tr>";
    echo "<tr><td><b>Exam Name:</b> $exam_name</td></tr>";
    echo "<tr><td><b>Exam Date:</b> $exam_date</td></tr>";
    echo "<tr><td><b>Class:</b> $class</td></tr>";

    echo "<tr><th>Subject</th><th>Max Marks</th><th>Marks Obtained</th></tr>";
    echo "<tr><td>Maths</td><td>100</td><td>$maths</td></tr>";
    echo "<tr><td>Physics</td><td>100</td><td>$physics</td></tr>";
    echo "<tr><td>Chemistry</td><td>100</td><td>$chemistry</td></tr>";
    echo "<tr><td>English</td><td>100</td><td>$english</td></tr>";
    echo "<tr><td>Hindi</td><td>100</td><td>$hindi</td></tr>";
    echo "<tr><td>Computer</td><td>100</td><td>$computer</td></tr>";

    echo "<tr><td><b>Total:</b></td><td><b>$total</b></td></tr>";
    echo "<tr><td><b>Percentage:</b></td><td><b>$per%</b></td></tr>";
    echo "</table>";
    echo "</div>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="ownmark" action="own.php" method="POST">
        
    
    
    
    
    
    
    
    
    
    <input type="text" name="School_code" value="" placeholder="Enter exam code"><br>
    <input type="text" name="Center_code" value="" placeholder="Enter center code"><br>
    <input type="text" name="Exam_type" value="" placeholder="Enter exam type"><br>
    <input type="text" name="Certification" value="" placeholder="Enter certificate"><br>
    <input type="text" name="Student" value="" placeholder="Enter your name"><br>
        <input type="text" name="Father" value="" placeholder="Enter your father's name"><br>
        <input type="text" name="Rollno" value="" placeholder="Enter your roll no"><br>
        <input type="text" name="College" value="" placeholder="Enter your college name"><br>
        <input type="text" name="enrollno" value="" placeholder="Enter your enroll no"><br>
        <input type="text" name="subject_code" value="" placeholder="Enter your subject code"><br>
        <input type="text" name="exam_name" value="" placeholder="Enter exam name"><br>
        <input type="date" name="exam_date" value="" placeholder="Enter exam date"><br>
        <input type="text" name="class" value="" placeholder="Enter your class"><br>
        








        <table>
        <tr>
            <td>Maths</td>
            <td><input type="number" name="maths"></td>
        </tr>
        <tr>
            <td>Physics</td>
            <td><input type="number" name="physics"></td>
</tr>
        <tr>
        <td>chemistry</td>

<td><input type="number" name="chemistry"></td>
</tr>
<tr>
<td>endlish</td>
<td><input type="number" name="english"></td>
</tr>

<tr>
<td>hindi</td>
<td><input type="number" name="hindi"></td>
</tr>
<tr>
    <td>computer</td>
    <td><input type="number" name="computer"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
</html>   