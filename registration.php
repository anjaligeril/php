<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <script>
       function validateForm(){
			var firstName = document.getElementById("firstName").value;
			var phone = document.getElementById("phone").value;
			var email = document.getElementById("email").value;
			var pwd = document.getElementById("pwd").value;
			var confirmPwd = document.getElementById("confirmPwd").value;
			
			if (firstName == "" || phone == "" || email == "" || pwd == "" || confirmPwd == "" ) {
					alert("Please enter valid info..");
					return false;
           
			} else{
				if(pwd==confirmPwd){
					alert("Information submitted successfully..");
					return true;
				}else{
					alert("Please enter valid info..");
					return false;
				}
			}
			return true;
		
	  }

    </script>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form method="POST" action="AddUser.php" onsubmit="validateForm()" >
	<div class="form-group">
      <label for="firstName">Name:</label>
      <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
    </div>
	<input type="hidden" name="userType" value="user">
	<div class="form-group">
      <label for="phone">phone</label>
      <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
    </div>
	<div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmPwd" placeholder="Confirm Password" name="ConfirmPwd">
    </div>
    
    <button type="submit" class="btn btn-default"  >Register</button>
  </form>
</div>

</body>
</html>
