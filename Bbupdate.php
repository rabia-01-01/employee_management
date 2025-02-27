<html>
<head>
 <link rel="stylesheet" href="main.css">
<style>

table,td{

margin-top:50px;
}
.lab1{
padding:20px , 10px;
margin-top:30px;
font-size: 21px;
color:blue;
text-align:left;
}

.lab2{
padding:10px , 10px;
margin-top:30px;
font-size: 20px;
color:black;
text-align:right;

}

table{

margin-top:30px;
}

.container_search {
            background-color: white;
            width: 100vmin;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(38, 33, 61, 0.2);
             text-align:left;

        }


</style>

</head>
<body>


<div class="container_search">
        <p class="para1"> Updation</p>



<?php
include 'connect.php';


$Employeenum=$_POST["employeenum"];

$Employeename=$_POST["employeename"];
$Aadhar=$_POST["aadhar"];

$Mobilenum=$_POST["mobilenum"];

$Department=$_POST["department"];
$Address=$_POST["address"];


$sql_stmt = "UPDATE employee SET Ename='$Employeename' , Mobile='$Mobilenum' , Aadhar='$Aadhar' ,Department='$Department' ,Address='$Address'   WHERE Enumber='$Employeenum' ";
 
if (! mysqli_query($conn,$sql_stmt))     
		die("Database access failed: " . mysqli_error()); 
else
{
 echo  '<table><tr><td><label class="lab2" > Your employee detail for employee number: <label class="lab1">' .$Employeenum.'</label> is updated successfully</label></td></tr></table>';
echo '<form action="first.php">
Go back<button class="round" type="submit"><<-</button>
</form>';
}


?>
</div>
</body>
</html>

