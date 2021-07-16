
<!doctype html>
<html>
<head>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>



    <div class = "container">
        <div class="row content">
            <div class = "col md-6 mb-3">
            <img src= "https://www.vidyalayaschoolsoftware.com/assets/images/school-software.svg" class="imag-fluid" >
    </div>
    <div class = "col md-6">
        <h1 >School Management System </h1>
        <br>
        <h3 class ="signin-text mb-3"> Login</h3>
    
       
        <form method = "POST" action = "loginnew" >
            
@csrf 
<!-- <input type ="hidden" name = "_token" value = "{{ csrf_token()  }}"> -->
        <div class ="form-group">
        Username: 
        <input type = "username" name = "username" class="form-control">
        </div>
        
        <div class ="form-group">
        Password: 
        <input type = "password" name ="password" class="form-control">
        </div>

        <div class ="form-group">
        <input type = "submit" name = "login">
        <button type = "button" onclick = "window.location = '{{ url("registerpage") }}' "  name = "register"> Register </button>
        <!-- <button type = "button" onclick = "window.location = '{{ url("signup") }}' "  name = "signup"> Signup </button> -->
        <div>
        </form>


        
</div>

</div>


       
</div>

<div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://pbs.twimg.com/profile_images/1291161506231365632/dcIqKPvR.jpg" alt="img" style="width:100px;">
  
                    <div class="card-body">
                    </div>
                </div>
            </div>



            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://pbs.twimg.com/profile_images/1291161506231365632/dcIqKPvR.jpg" alt="" style="width:100px;">
  
                    <div class="card-body">
                    </div>
                </div>
            </div>
</div>
</div>
</body>
</html>