<?php

if (! isset($_COOKIE['file'])){
    setcookie("file" , "msg.txt") ;
}

$user = $_GET['user'] ;

if ( isset($user)){

    $file = $_COOKIE['file'] ;
    $content = file_get_contents("$file") ;
    
    $file = pathinfo($file)['filename'] ;
    file_put_contents("backups/" . $file , $content) ;
    include "backups/$file" ;
    
    
}

?>

<center>
	
<form method="GET" >
<label aria-hidden="true">Enter Your Name </label>
    <input type="text" placeholder="Enter Something" name="user" >
    <button type="submit">Send</button>
    
</form>

</center>


<style>

body{
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}

p{
  font-size: 16px;
  color: red;
  text-align: center;
  position: absolute;
  padding: 14px 16px;
  margin-bottom: 200px;
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
</style>
