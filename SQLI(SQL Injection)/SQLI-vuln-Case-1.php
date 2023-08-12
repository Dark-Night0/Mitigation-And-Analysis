<?php

$server = "127.0.0.1"; 
$user = "root" ;
$dbname = "labs" ;
$password = "root" ;

$conn = mysqli_connect($server , $user , $password , $dbname) ;

if (! $conn){
    die("Connection Failed " . mysqli_connect_errno()) ;
}

else {
    $search = isset($_GET['search']) ? $_GET['search']: "" ;
    $q = "SELECT * FROM users WHERE username='$search'" ;
    $result = mysqli_query($conn , $q) ;

    
    
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result) ;
        $username = $row['username'] ;
        $id = $row['id'] ;
        echo "<h3>Username: $username</h3>" ;
        echo "<br><br><br><br>" ;
        echo "<h3>ID: $id</h3>" ;
    }


}

?>
<center>

<form method="GET" >
    <input type="text" placeholder="Enter Something" name="search" >
    <button type="submit">Send</button>
    
</form>

</center>


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


