
<form method="POST" >

<label for="chk" aria-hidden="true">Done Cached in Memory And Edit File , Find XSS</label>
<br>

    <input type="text" placeholder="Username" name="user" >

	<input type="password" placeholder="Password" name="pass" >
    <button type="submit">Send</button>
    
</form>
<?php
echo "Success Congrats " . $_GET['name'] ;
echo "Run conf.php To Reomve Cache " ;
?>
</center>


<style>

body{
margin: 0;
padding: 100px;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
background: linear-gradient(to bottom, #fff, #0f0c29, #24243e);
}


input{
width: 400px;
height: 20px;
background: #302b63;
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
background: #24243e;
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
background: #0f0c29;
}

h3{
margin: 0;
padding: 20px;
display: flex;
justify-content: center;
align-items: center;

}
</style>