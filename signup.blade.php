

<form method = "post"  action = "/users/index">



@csrf
Name: <input type ="text" name ="name" >
<br/>
Email: <input type = "email" name ="email">
<br/>
Password: <input type ="password" name ="password">
<br/>
<input type = "submit" name ="submit">
<button type ="button" name ="login" onclick= "window.location = '{{ url("homepage")  }}'"   > Login</button>

</form>