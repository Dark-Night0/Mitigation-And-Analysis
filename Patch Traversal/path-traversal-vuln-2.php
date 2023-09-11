<?php
// HINT: Open Burpsiute To Show Sensitive Data 

if (isset($_GET['path'])){
    $path = "/var/WWW/html/" . $_GET['path'] ;
    $path = str_replace('../' , '' , $path) ;
        var_dump($path);
        header("Content-Type: image/jpg") ;
        $image = file_get_contents("$path") ;
        echo $image ;
        
    }
    
    else {

        header("Location: /Path-Traversal/path-traversal-vuln-2.php?path=hacker.jpg") ;
}

?>
<center>

<form method="get">
<label aria-hidden="true">PATH TRAVERSAL </label>
    <input type="text" name="path" >
    <button type="submit">get Path</button>
    
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
width: 300px;
height: 25px;
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