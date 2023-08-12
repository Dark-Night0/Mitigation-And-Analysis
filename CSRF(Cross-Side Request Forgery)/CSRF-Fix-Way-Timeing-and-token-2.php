<?php
session_start() ;

function generate_token(){
  
  if (isset($_SESSION['time']) or ! isset($_SESSION['time']) ){
    
    $_SESSION['time'] = strtotime("+15 second") ;
    $_SESSION['token'] = bin2hex(random_bytes(32)) ;

  }

  else if ($_SESSION['time'] <= time()){
    $_SESSION['token'] = bin2hex(random_bytes(32)) ;
  }
  
}


if ($_SERVER['REQUEST_METHOD'] === "GET"){
  
  generate_token() ;

}
	
// Type the commands that you want to execute if the token is valid
if ($_SERVER['REQUEST_METHOD'] === "POST" ){
	
	echo "<h3> POST Token: " . $_POST['_csrf-token'] . " </h3>  <br>" ;
	echo "<h3> Server Token: " . $_SESSION["token"] . "   </h3>  <br>" ;
	echo "<h3> Real Time : " . time() . "   </h3>  <br>" ;
	echo "<h3> Your Time : " . $_SESSION['time'] . "   </h3>  <br>" ;


if ($_SESSION['time'] <= time() or $_POST['_csrf-token'] !== $_SESSION['token']){
  // This Massage For testing only and it is better not to show users
  echo "
  <br>
  <h3>Error ! the CSRF is Not Valid </h3>
  <br>
  <br>
  " ;
  
  generate_token() ;
}

// Type the commands that you want to execute if the token is incorrect
	else if ($_POST['_csrf-token'] === $_SESSION['token'] and $_SESSION['time'] >= time()){

    echo "
		<br>
		<h3>Success ! the CSRF is Valid </h3> 
		<br>
		<br>
		" ;
   generate_token()  ;
  }
}

?>
<center>


<form method="POST" >

<label for="chk" aria-hidden="true">USERNAME</label>
    <input type="text" placeholder="Username" name="user" >

<label for="chk" aria-hidden="true">PASSWORD</label>
	<input type="password" placeholder="Password" name="pass" >

    <input type="hidden" name='_csrf-token' value=<?php echo $_SESSION['token'] ; ?> >
    <button type="submit">Send</button>
    
</form>

</center>


<style>

body{
margin: 0;
padding: 100px;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}


input{
width: 400px;
height: 20px;
background: #e0dede;
justify-content: center;
display: flex;
margin: 20px auto;
padding: 10px;
border: none;
outline: none;
border-radius: 5px;
}
button{
width: 30%;
height: 40px;
margin: 10px auto;
justify-content: center;
display: block;
color: #fff;
background: #573b8a;
font-size: 1em;
font-weight: bold;
margin-top: 20px;
outline: none;
border: none;
border-radius: 5px;
transition: .2s ease-in;
cursor: pointer;
}
button:hover{
background: #6d44b8;
}

h3{
margin: 0;
padding: 20px;
display: flex;
justify-content: center;
align-items: center;

}
</style>