<?php

$string = $_POST['search'] ;

?>

<h1 id="xss">Hello <?php echo strtoupper($string) ?> </h1>

<center>

<!-- You Can execute Alert Function or equivalent JS code ??? -->
<form method="POST" >
<label aria-hidden="true">Search For Anything</label>
    <input type="text" placeholder="Enter Something" name="search" >
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

h1{
  font-size: 16px;
  color: red;
  text-align: center;
  position: absolute;
  padding: 20px ;
  width: 50px;
  margin-bottom: 300px;

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
