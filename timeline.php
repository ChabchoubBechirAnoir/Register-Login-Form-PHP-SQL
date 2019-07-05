<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<script type="text/javascript">  
function test(){  
var number=document.getElementById("demo");  
number.innerHTML =  document.getElementById("number").value;
}  
</script> 
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

           <form>  
Enter No:<input type="text" id="number" name="number"/><br/>  
<input type="button" value="click" onclick="test()"/>  

</form>

            
            
        </div>
           
    </div>
   <div>  <p id="demo"></p> </div>
</div>

</body>
</html>