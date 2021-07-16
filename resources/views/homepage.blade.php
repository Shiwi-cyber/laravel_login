
<form method = "POST" action = "/homepage" >



@csrf 
<!-- <input type ="hidden" name = "_token" value = "{{ csrf_token()  }}"> -->

Email: <input type = "email" name = "email">
<br/>
Password: <input type = "password" name ="password">
<br/>
<input type = "submit" name = "login">
<button type = "button" onclick = "window.location = '{{ url("users/index") }}' "  name = "signup"> Signup </button>
<!-- <button type = "button" onclick = "window.location = '{{ url("signup") }}' "  name = "signup"> Signup </button> -->

 
</form>