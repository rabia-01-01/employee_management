<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
     <link rel="stylesheet" href="main.css">
<style>
.lab1{
padding:20px , 10px;
margin:20px;
font-size: 21px;
color:blue;
text-align:left;
}


 .word .mean {
            height: 50px;
            width: 50%;
            display: flex;
            margin: auto;
            justify-content: space-between;
        }

.container_search {
            background-color: white;
            width: 120vmin;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(38, 33, 61, 0.2);

        }
.lab2{
padding:10px , 10px;
margin-top:50px;
font-size: 20px;
color:black;
text-align:right;

}
</style>
</head>

<body>
    <div class="container_search">
        <p class="para1"> Update Employee details here </p>





<?php 

include 'connect.php';




$Employeenum=$_POST["employeenum"];
$sql_stmt = "SELECT * FROM employee WHERE Enumber like '$Employeenum'";
//sql_stmt="SELECT * FROM wordsindict where Word='$Word'"; 
 $result=mysqli_query($conn,$sql_stmt);
     
     if (!$result)     
		die("Database access failed: " . mysqli_error()); 
    	
        
		$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
 if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {  
      
              
		echo '
         <form action="Bbupdate.php" method="POST">';


        echo ' 
        <div class="word" style="border-bottom:2px solid #4169e1;padding-top:20px;" >
            <label class="lab2">Employee Number</label>
            <input type="text" value="'.$row['Enumber'].'" name="employeenum" />
        </div>

        <div class="word" style="border-bottom:2px solid #4169e1;padding-top:20px;">
          <label class="lab2">Employee Name</label>
          <input type="text" value=" '.$row['Ename'].'" name="employeename" style="border-bottom:2px solid #4169e1; width:580px;margin-bottom:20px; />  
        </div>
 
        <div class="word" style="border-bottom:2px solid #4169e1;" >
           <label class="lab2">Aadhar Card Number</label>
           <input type="text" value=" '.$row['Aadhar'].'" name="aadhar" />
        </div>

          <div class="word" style="border-bottom:2px solid #4169e1;padding-top:20px;">
           <label class="lab2">Mobile Number</label>
           <input type="text" value=" '.$row['Mobile'].'" name="mobilenum"  />
        </div>

   
        <div class="word" style="border-bottom:2px solid #4169e1; padding-top:20px;" >
            <label class="lab2">Department</label>
            <input type="text" value=" '.$row['Department'].'" name="department" />   
        </div>

        <div class="word" style="border-bottom:2px solid #4169e1; padding-top:20px;">
            <label class="lab2">Address</label>
            <input type="text" value=" '.$row['Address'].'" name="address"  />
        </div>


        <div>
            <button class="btn" type="Submit" style ="margin-left:230px;">Update</button>
        </div>
    </form>';
      
        
		
	} 
} 
	else
{

echo  '<table><tr><td><label class="lab2" > Can\'t update as employee number:<label class="lab1">'.$Employeenum.'</label> is not found in the employee table</label></td></tr></table>';
echo '<form action="first.php">
<button class="round" type="submit">Back</button>
</form>';
}	
      
		
 

?>

</div>
</body>
</html>

