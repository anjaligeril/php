<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_POST['firstname'] ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <?php
  	if(isset($_POST['firstname'])||isset($_POST['age'])){
  	    $name=$_POST['firstname'];
          $age=$_POST['age'];
          $message='';
          $isAllowed=false;
  	    if($age>18){
  		    $message= $name." allowed to drink";
  		    $isAllowed=true;
  	    }
  	    else{
  		      $message= $name." not allowed to drink";
  		     $isAllowed=false;
  	    }
  		}
  		else{
  	        echo "no data passed";
  	    }

  ?>
</head>
<body>

<div class="container">
     <?php
         if($isAllowed){

     ?>
            <div class="alert alert-success">
                <?php
                    echo $message
                 ?>
            </div>
     <?php
        }
            else
        {
     ?>
            <div class="alert alert-danger">
                <?php
                     echo $message
                 ?>
            </div>

      <?php
            }
       ?>
  </div>


</div>

</body>
</html>
