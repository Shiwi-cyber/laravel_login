

<!-- <html>
<head>
<style>

div {
    width: 450px;
	height: 550px;
	background-color: DodgerBlue;
    border: 5px solid gray;
	/* position: absolute; */
    display: flex;
    /* align-items: center; */
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

body{
    font-family : Verdana;
    color: white;
    text-align : center;
    
}
/* form{
    width: 200px;
    height: 200px;
    background-color: gray;
     display: flex; 
} */

</style>
<head> -->




<!-- <div class="card" style="width:200px">
  <img class="card-img-top" src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Student-3-512.png" alt="image">
  <div class="card-body">
    <h4 class="card-title">Student</h4>
    <input type = "button" name ="Student" value = "Student" class="btn btn-primary " onclick = "window.location = '{{url("studentform")}}'">

  </div>
</div>


<div class="card" style="width:200px">
<img class="card-img-top" src="https://e7.pngegg.com/pngimages/349/288/png-clipart-teacher-education-student-course-school-avatar-child-face.png" alt="image">
 
  <div class="card-body">
    <h4 class="card-title">Teacher</h4>
    <input type = "button" name ="Teacher" value ="Teacher" class="btn btn-primary" onclick = "window.location = '{{url("teacherform")}}'">

  </div>
</div>
</div> -->

<!doctype html>
<html>
<head>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<div class="container" style="width:600px; padding:100px;">
<center><h2 > Choose your Role </h2> </center>
<form> 
<div class ="vertical-center;">
<div class="container">
        <div class="row" style= "align-items: center;">
            <div class="col-lg-6 mb-4">
                <div class="card"style ="align-items:center">
                    <img class="card-img-top" src="https://img.icons8.com/bubbles/2x/student-male.png" alt="img" style="width:100px;">
  
                    <div class="card-body">
                    <input type = "button" name ="Student" value = "Student" class="btn btn-primary " onclick = "window.location = '{{url("studentform")}}'">

                    </div>
                </div>
            </div>



            <div class="col-lg-6 mb-4">
                <div class="card" style ="align-items:center">
                    <img class="card-img-top" src="https://img.icons8.com/bubbles/2x/student-male.png" alt="" style="width:100px;">
  
                    <div class="card-body">
                    <input type = "button" name ="Teacher" value ="Teacher" class="btn btn-primary" onclick = "window.location = '{{url("teacherform")}}'">

                    </div>
                </div>
            </div>
        </div>
</div>


<center><a href ="{{url('/sections')}}" >Already have an account? </a>


</div>

</div>
</form>

</body>
</html>