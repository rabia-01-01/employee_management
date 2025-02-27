<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <style>
        
        .backdiv{
            width:100%;
            height:780px;
            background-image: url("Royal Blue.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            position:fixed;

        }
        .imgsec{
            width:350px;
            background-image: url("th.jpg")
        }
        p.ex3 {
            font-family: "montserrat"; 
            color:white;          
            padding: 10px;
            width: 800px;
            margin: auto;
            display: block;
            font-size: 18px;
        }

        .heading {
            height:80px;
            width:100%;
            font-size:25px;
            font-family: "monospace"; 
            /* background-color:grey; */
            color:white;
            text-align: center;

        }

        .container {
            text-align: center;
            margin-top: 10px;
           
        }

table,td{
margin-left:20px;
margin-top:100px;

padding:10px;

}
td{
width:200px;
}

.btn {
            text-decoration: none;
            border: none;
            padding: 10px 10px;
            font-size: 20px;
            width: 100%;
            height:60px;
            background-color: #red ;
            margin-left:20px;
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
        
   .main{
 width:900px;
height:300px;
margin-top:30px;
margin-left:300px;

background-color: transparent;


/*background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);  /* Chrome 10-25, Safari 5.1-6 */
/*background: linear-gradient(to right, #4b134f, #c94b4b);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
  <div class="backdiv"> 

<div class="main" style="display:flex; justify-content:space-around; margin-top:150px">
   
    <!-- <div class="conatiner"> -->
    <div class="container">
<table>
<tr>
<td>
<form action="search.php" method="POST">
        <button class="btn " style ="margin-left:-120px;">Search </button>
</form>
</td>
    </tr>
    <tr>
<td>
<form action="insert.php"  method="POST">
        <button class="btn " style ="margin-left:-100px;">  Insert </button>
</form>
</td>
    </tr>
    </table>
    </div>
<div class="imgsec container"></div>
<div style="widht:100px;"></div>
<!-- 
    </div> -->
    <div class="conatiner" style="position:relative; left:10%;">
    <table>
    <tr>
<td>   
<form action="delete.php" method="POST">
        <button class="btn" style ="margin-left:-80px;"> Delete </button>
</form>
</td>
    </tr>
    <tr>
<td>
<form action="update.php" method="POST">
        <button class="btn" style ="margin-left:-60px;"> Update  </button>
</form>
</td>
</tr>
</table>
    </div>


</div>
<br>
<div class="heading">
        <h1 style="margin-right:15px; display:flex; justify-content:center; margin-top:100px;">Employee Management System</h1>
    </div>
</div>


</body>

</html>

