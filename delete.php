<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
   <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container_search">

<form action="bdelete.php" method="POST">
        <div class="word" style="border-bottom:2px solid #4169e1 ; text-align: center;margin: 10px;">
            <input type="text" placeholder="Type the employee number you want to delete.. " name="employeenum" />
        </div>

       
       
            <button class="btn" type="submit" name="delete-btn"style="width:50%; margin-left:95px;margin-bottom: 40px;">Delete</button>
       
</form>
<form action="first.php">
<button class="round" type="submit">Back</button>
</form>

</div>

    

</body>

</html>

