
<!doctype html>
<html>
<head>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div style="padding:150px; border:5px grey; ">
<center> <h1>School Management System </h1> </center>
<br>
<div class = "container" style="width:500px;">
        <div class="row content">
            <div class = "col md-3 mb-3">
            <img src= "https://www.vidyalayaschoolsoftware.com/assets/images/school-software.svg" class="img-fluid" style ="width:200px; height:200px;" >
    </div>
    <div class = "col md-6">
        
        
        <h3 class ="signin-text mb-3"> Login</h3>
    
<form method = "POST" action = "loginnew" >



@csrf 
<!-- <input type ="hidden" name = "_token" value = "{{ csrf_token()  }}"> -->
<div class ="form-group">
Username: <input type = "username" name = "username" class ="form-control" required>
</div>

<div class ="form-group">
Password: <input type = "password" name ="password" class= "form-control" required>
</div>

<br>
<br>
<div class ="form-group">
<input type = "submit" name = "login"  class="btn btn-primary " style ="width:110px;">
<button type = "button" onclick = "window.location = '{{ url("registerpage") }}' "  name = "register" class="btn btn-secondary " style ="width:110px;"> Register </button>
<!-- <button type = "button" onclick = "window.location = '{{ url("signup") }}' "  name = "signup"> Signup </button> -->
<div class ="form-group">
 
</form>

</div>
</div>       
</div>
</div>
</body>
</html>
