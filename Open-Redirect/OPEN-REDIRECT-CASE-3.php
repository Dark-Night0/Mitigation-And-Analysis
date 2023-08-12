<?php
/*

* How To bypass ?
------------------
- u can add # to convert all after the link to comment but convert this # to URL %23 Or // Or /*
    - why ?
        Enter this to comment anything After You input And ! 
        After Processing This It will appear like this # -> https://night.com%23.google.com
        Or After Processing This It will appear like this // -> https://night.com%2F%2F.google.com
        Or After Processing This It will appear like this /* -> https://night.com%2F%2A.google.com
        
        - Post will be ignored %23 Or # before URL endoing 
        - Post will be ignored %2F%2F Or // before URL endoing 
        - Post will be ignored %2F%2A Or /* before URL endoing 
        
*/

if (substr($_POST['redirect'] , 0 , 4) === "http" or substr($_POST['redirect'] , 0 , 5) === "https" ){
    $sub = $_POST['redirect'] ;
    
    echo $sub ;
    if (strpos($sub,".google.com")){
        echo "<h1> " . $sub . " </h1>" ;
        header("Location: " . $sub  ) ;
		exit() ;
    }
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