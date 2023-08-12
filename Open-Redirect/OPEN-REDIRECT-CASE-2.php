<?php
/* 

* How To bypass this Case ?
------------------------------
- u can search from any domain start name server name The victem and any subdomain
- in may Case The My server Name is `localhost` in your Case Say google !!

* Say 
------
- generate Your subdomain and ready your input `.night.com`
- go to buy or generate this domain google.night.com
- After Enter this input `.night.com` will redirect the site to https://google.night.com


*/ 

if (isset($_POST['redirect'])){
    // echo "<h1> " . $_POST['redirect'] . " </h1>" ;
    header("Location: ". $_SERVER['SERVER_NAME'] . $_POST['redirect']) ;
	exit();
}
?>

<center>
	
<form method="POST" >
<label aria-hidden="true">REDIRECT TO SITE</label>
    <input type="text" placeholder="Enter Something" name="redirect" >
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