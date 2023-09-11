<?php
class User {
    public $name ;
    public $roll ;
    public $status_user ;


    public function __construct($name, $roll , $status_user) {
        $this->name = $name;
        $this->roll = $roll;
        $this->status_user = $status_user ;
      }
}
$user = new User("Mohammed" , "Guest" , "Guest User") ;
$seria = serialize($user) ;

if ($_SERVER['REQUEST_METHOD'] === "GET"){

    if (! isset($_COOKIE['id'])){
        
        $decode_seria = base64_encode($seria) ;
        setcookie("id" , $decode_seria ) ;
    
        header("Refresh:0") ;
    }
}

if (isset($_COOKIE['id'])){
    
    $id_seria = $_COOKIE['id'] ;
    $decode_seria = base64_decode($id_seria) ;

    $deseria = unserialize($decode_seria) ;
    $roll_user = $deseria->roll ;
}
 


?>


<body>
<nav>
  <ul>
  
  	<li><a href="#">HOME</a></li>
    <li><a href="#">Comments</a></li>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Search</a></li>
    <?php
    if ($roll_user === "Admin") {
        echo "<li><a href='#'>Admin Panel</a></li>" ;
        
    }
    else {
        echo "<li><a href='#'>Guest</a></li>" ;
        
    }   
    ?>

    
<h1 id="text"></h1>    

<script>
	
	let text = <?php 
  
    echo ($roll_user === "Admin") 
    ? '"Congrats! , Welcome Admin How are you today ?"' 
    : '"Welcome Guest You Can Access Admin Panle ?"' ;
  
  ?> ;
  
	let i = 0;
	
  
	function typeWriter() {
		if (i < text.length) {
			document.getElementById("text").innerHTML += text.charAt(i);
			i++;
			setTimeout(typeWriter, 50); 
		}
	}
	
	typeWriter();
	
</script>
  </ul>
  
</nav>


<h1 class="title"><a href="#">LAB</a></h1>

</body>


<style>

body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: right;
	align-items: baseline;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
a{

  display: block;
  padding: 10px 20px;
  background-color: #573b8a;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}
nav{
  position: absolute;
  top: 20px;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 15px;
}

nav a {
  display: block;
  padding: 10px 20px;
  background-color: #573b8a;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

nav a:hover {
  background-color: #6d44b8;
}

.title {  
  top: 5;
  left: 20px;
  
}
.title a:hover {
  background-color: #6d44b8;
}

#text{
	padding: 10% 35%;
  /* padding-bottom: 100px; */
  /* padding-left: 100px; */
	color: #fff;
	font-size: 2.3em;
	
	font-weight: bold;
	display: block;
  justify-content: center;
  align-items: center; 
  
}
.title {
  position: fixed;
  top: 5px;
  /* left: -100px; */
  margin: 0;
  padding: 20px;
  font-size: 32px;
  font-weight: bold;
  color: #fff;
  transition: all 0.3s ease-in-out;
}

.title {
  left: 10px;
}

</style>
