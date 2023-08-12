<?php
if(isset($_GET['search'])){
    $url = $_GET['search'];
    $image = file_get_contents($url);
    header('Content-Type: image/jpeg');
    echo $image;
}
?>

<html>
<body>
<center>

<form method="GET" >
    <input type="text" placeholder="Enter Something" name="search" >
    <button type="submit">Send</button>
    
</form>

</center>

</body>
</html>





<style>
h3{

    top :20px;
    margin-bottom: 20px;
    display: inline-table ;
    padding: 20px;
    margin: 10px;
    border: #e0dede ridge;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}
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


