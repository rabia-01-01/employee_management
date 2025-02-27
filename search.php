
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
<style>
    
.btn {
            text-decoration: none;
            border: none;
            padding: 10px 10px;
            font-size: 20px;
            /* width: 100%; */
            height:60px;
            background-color: #red ;
            /* margin-left:20px; */
            color: #000000;
            border-radius: 5px;
            box-shadow: 7px 6px 28px 1px rgba(0, 0, 0, 0.24);
            cursor: pointer;
            outline: none;
            transition: 0.2s all;
        }
          
        .btn:active {
            transform: scale(0.98);
            box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
        }

.round {

       text-decoration: none;
            border: none;
            /* margin-top:50px; */
            
            
            width: 100%;
            background-color: #000000 ;
            margin-left:0px;
            color: #fff;
           
            /* box-shadow: 7px 6px 28px 1px rgba(0, 0, 0, 0.24); */
            cursor: pointer;
            outline: none;
            transition: 0.2s all;
            /* border-radius: 5%; */
            }
</style>

   <link rel="stylesheet" href="main.css">
</head>
<body >
 <div class="container_search">
    <form action="bsearch.php" method="POST">
        <div class="word" style="border-bottom:2px solid #4169e1 ; text-align: center;margin: 10px;">
            <input type="text" placeholder="Enter employee number" name="EmployeeNumber" />
        </div>

       
       
            <button class="btn" type="submit" name="Search-button" style="width:50%; margin-left:95px;margin-bottom: 40px;">Search</button>
       
</form>
<form action="first.php">
<button class="round" type="submit">Back</button>
</form>

</div>

    
</body>
</html>

