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
        <p class="para1"> Deletion</p>



<?php
include 'connect.php';
$Employeenum=$_POST["employeenum"];
$found=0;
$sql_stmt = "SELECT * FROM employee where Enumber ='$Employeenum'"; 
 $result = mysqli_query($conn,$sql_stmt);
     //execute SQL statement 
     
	if (!$result)     
		die("Database access failed: " . mysqli_error()); 
    	//output error message if query execution failed 
        
		$rows = mysqli_num_rows($result); 
   		// get number of rows returned 

 if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {  
        if( $row['Enumber']==$Employeenum)       
		{
$sql_stmt = "DELETE FROM employee WHERE Enumber like '$Employeenum'";


 $result1 = mysqli_query($conn,$sql_stmt);
if (!$result1)     
		die("Database access failed: " . mysqli_error()); 
else
{
$found=1;
 echo  '<table><tr><td><label class="lab2" > Your entered Employee with id : <label class="lab1">' .$Employeenum.'</label> is Deleted successfully</label></td></tr></table>';
echo '<form action="first.php">
Go back<button class="round" type="submit"><<-</button>
</form>';
}
}
}
}
if($found==0)
{
echo  '<table><tr><td><label class="lab2" > Can\'t Delete  : <label class="lab1">' .$Employeenum.'</label> is not found in the employee table</label></td></tr></table>';
echo '<form action="first.php">
<button class="round" type="submit">Back</button>
</form>';


}


?>
</div>
</body>
</html>

