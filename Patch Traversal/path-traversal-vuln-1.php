<?php
// HINT: Open Burpsiute To Show Sensitive Data 

if (isset($_GET['path'])){
    $path = $_GET['path'] ;
        if (file_exists($path) || is_file($path) || is_readable($path) || getimagesize($path)) {
        
            header("Content-Type: image/jpg") ;
            $image = file_get_contents("$path") ;
            echo $image ;
            die() ;
        }
        else {
            echo "Error Path !" ;
        }
    }
    
    else {
        
    header("Content-Type: image/jpg") ;
    header("Location: /Path-Traversal/path-traversal-vuln-1.php?path=hacker.jpg") ;
    exit() ;
    
}

?>
<center>

<form method="get" enctype="multipart/form-data" >
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

/* HITN 2: In this case, it accepts the original paths without reference ٍSay: /home/dark/passwd.txt ( Not ) ../../../home/dark/passwd.txt */

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