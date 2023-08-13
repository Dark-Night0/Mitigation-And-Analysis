<?php

/*

* You Can bypass ??
- idea Concatenate Or Merge 

    * Payload
        Night"-eval("ale".concat("rt(1337)")) //
*/ 

$string = $_GET['search'] ;


$regex = "/{|}|src|confirm|prompt|write|<|>|alert|print/" ;

?>
<script>
    
    window.test = {
        site: "Night" ,
    page: {
        name : "<?php echo  preg_replace( $regex, '' ,$string) ?>" ;    
    }
}    

</script>

<center>
<form method="GET" >    
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
