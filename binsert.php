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
        <p class="para1">Insertion</p>




<?php 

include 'connect.php';

$Employeenum=$_POST["employeenum"];
$Employeename=$_POST["employeename"];
$Adhar=$_POST["adhar"];
$Mobilenum=$_POST["mobilenum"];
$Department=$_POST["Synonyms"];
$Address=$_POST["Anto"];
$found=0;
$sql_stmt = "SELECT * FROM employee"; 
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
		{$found=1;


}
}
}
if($found)
{
echo  '<table><tr><td><label class="lab2" > Can\'t Insert : <label class="lab1">' .$Employeenum.'</label> is Already Present</label></td></tr></table>';
echo '<form action="first.php">
Go back<button class="round" type="submit"><<-</button>
</form>';
}

else{

$sql_stmt = "insert into employee values('$Employeenum','$Employeename','$Adhar','$Mobilenum','$Department','$Address')"; 
 $result = mysqli_query($conn,$sql_stmt);
if (!$result)     
	die("Database access failed: " . mysqli_error()); 
else
{
echo  '<table><tr><td><label class="lab2" > Your employee details has been added successfully : <label class="lab1">' .$Employeenum.'</label> </td></tr></table>';
echo '<form action="first.php">
<button class="round" type="submit">Back</button>
</form>';
}
}


?>

