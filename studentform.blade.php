
<!doctype html>
<html>
<head>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<form method = "post" action ="/dashboard2">
<div class = "container" style ="width:400px; padding: 80px;">
        <div class="row content">
            <div class = "col md-6">
                <!-- <h1 >School Management System </h1> -->
                    <h3> Register </h3>

                @csrf
                <div class ="form-group">
                Firstname:  <input type ="text" name ="fname" class="form-control" required>
                </div>
                <div class ="form-group">
                Lastname: <input type ="text" name ="lname" class="form-control" required>
                </div>
                <div class ="form-group">
                Username: <input type ="text" name ="username" class="form-control" required>
                </div>
                <div class ="form-group">
                Password: <input type ="password" name ="password" class="form-control" required>
                </div>
                <div class ="form-group">
                Class: <input type ="number" name ="class" class="form-control" required>
                </div>
                <br>
                <br>
                <div class ="form-group">
                <input type = "submit" name ="submit" value = "Submit" class="btn btn-primary" style ="width: 110px;" >

                <button type="button" name = "backtologin" onclick = "window.location = '{{url("/registerpage")}}'" class="btn btn-secondary" style ="width: 110px;"> Back  </button>
                </div>


                

</div>
</div>
</div>

</form>

</body>
</html>