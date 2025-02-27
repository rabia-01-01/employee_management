<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
     <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container_search">
        <p class="para1"> Insert Employee Details here </p>
<form action="binsert.php" method="POST">
       

        <div class="word" style="border-bottom:2px solid #4169e1;  text-align: center; margin: 10px;">
            <input type="text" placeholder="Enter Employee Number" name="employeenum" />
        </div>

        <div class="mean" style="border-bottom:2px solid #4169e1 ;  text-align: center;margin: 10px;">
            <input type="text" placeholder="Enter Employee Name" name="employeename" />
        </div>

        <div class="mean" style="border-bottom:2px solid #4169e1 ;  text-align: center;margin: 10px;">
            <input type="text" placeholder="Enter Aadhar card number" name="adhar" value="" />
        </div>

 

 <div class="mean" style="border-bottom:2px solid #4169e1 ;  text-align: center;margin: 10px;">
            <input type="text" placeholder="Enter mobile number" name="mobilenum" value="" />
        </div>

 <div class="mean" style="border-bottom:2px solid #4169e1 ;  text-align: center;margin: 10px;">
            <input type="text" placeholder="Enter your department name" name="Synonyms" value="" />
        </div>
<div class="mean" style="border-bottom:2px solid #4169e1 ;  text-align: center;margin: 10px;">
            <input type="text" placeholder="Enter your address" name="Anto" value="" />
        </div>




        <div  >
            <button class="btn" Type="Submit"style="width:50%; margin-left:95px;margin-bottom: 40px;">Insert</button>
        </div>
    </form>
<form action="first.php">
<button class="round" type="submit">Back</button>
</form>


    </div>

</body>

</html>

