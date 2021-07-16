<html>
<body>

<form method = "POST" action = "/loginme" >


<input type ="hidden" name = "_token" value = "{{ csrf_token()  }}">
<input type = "email" name = "email">
<input type = "password" name ="password">
<input type = "submit" name = "submit">
</form>



</body>
    </html>
