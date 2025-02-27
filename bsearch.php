<html>
<head>
 <link rel="stylesheet" href="main.css">
<style>

table,td{
padding-top:20px;
padding-bottom:20px;

margin-top:50px;
}
.lab1{
padding:20px , 10px;
margin:20px;
font-size: 21px;
color:blue;
text-align:left;
}

.lab2{
padding:10px , 10px;
margin:10px;
font-size: 20px;
color:black;
text-align:right;

}


.container_search {
            background-color: white;
            width: 110vmin;
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
        <p class="para1"> The details of your searched employee are displayed here </p>


<?php

include 'connect.php';
$employee_num=$_POST["EmployeeNumber"];
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
        if( $row['Enumber']==$employee_num)       
		{
$found=1;
        echo '<table><tr><td><label class="lab1">'.'Employee Name'.': </label></td><td> <label class="lab2" >'.$row['Ename'].'</label></td></tr>';
        // echo '<tr><td><label class="lab1">Employee Name: </label></td><td> <label class="lab2" >'.$row['Employee Name'].'</label></td></tr>';
         echo '<tr><td><label class="lab1">Aadhar Card Number: </label></td><td> <label class="lab2" >'.$row['Aadhar'].'</label></td></tr>';
          echo '<tr><td><label class="lab1">Mobile No: </label> </td><td><label class="lab2" >'.$row['Mobile'].'</label></td></tr>';
           echo '<tr><td><label class="lab1">Department : </label></td><td> <label class="lab2" >'.$row['Department'].'</label></td></tr>';
           echo '<tr><td><label class="lab1">Address : </label></td><td> <label class="lab2" >'.$row['Address'].'</label></td></tr></table>';
         
         
  }  


    
		
	} 
} 
if($found==0)
{
echo  '<table><tr><td><label class="lab2" > Can\'t Search : <label class="lab1">' .$employee_num.'</label> is not found in the employee table.</label></td></tr></table>';


}

 echo '<form action="first.php">
<button class="round" type="submit">Back</button>
</form>';
?>
</div>
</body>
</html>


