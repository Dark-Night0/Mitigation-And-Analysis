<?php
/*
Details Files
---------------
array(5) {
     ["name"]=> string(9) "photo.jpg" 
     ["type"]=> string(10) "image/jpeg" 
     ["tmp_name"]=> string(14) "/tmp/phpg9y84Q" 
     ["error"]=> int(0) 
     ["size"]=> int(136506) 
    } 

    */
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['upload'])) {
        $file = $_FILES['upload'];
    
        if ($file['error'] === UPLOAD_ERR_OK) {
    // Remember Adding All Permisions To 'uploads' Directory
            $main_path = 'uploads/' . $file['name'];
    
            move_uploaded_file($file['tmp_name'], $main_path);
    
            echo "<h1>Success</h1>";
        } 
        else {
            echo "<h1>Error !</h1>";
        }
    }
    ?>
<center>

<form method="POST" enctype="multipart/form-data" >
<label aria-hidden="true">Upload Files </label>
    <input type="file"name="upload" >
    <button type="submit">UPLOAD</button>
    
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
height: 40px;
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