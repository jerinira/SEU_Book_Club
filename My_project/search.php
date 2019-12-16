<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width:20" initial-scale="1">
<style> 

body{
	margin: 50;
	padding: 60;
	background: black;
	color: #fff;
	
	 
	 
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 3px solid #ee963c;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
     padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

.mybutton {
            width: 250px;
            height: 40px;
            padding: 10px 40px;
            border: 3px solid #ee963c;            
            background: #ee8f1a;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
        }
</style>
</head>
<body>
<div align="center">

    <h2>Search Your Book</h2>

<form method= "post">
<center>
  <input type="text" name="bname" placeholder="Search.." required="required" />
   
  <br>
            
            
            
            <button class="mybutton" type="submit" name="search" style="margin-top: 50px;">Search</button><br>
		<center>
</form>

</div>
<center>


 <?php

    if(isset($_POST['search'])){
        
        
        $bname = $_POST['bname'];
		
        echo 'You are Searching for : '.$bname.'<br />'.'<br />';

        // connecting with database
        
        
        define ( 'DB_HOST', 'localhost' );
        define ( 'DB_USER', 'root' );
        define ( 'DB_PASSWORD', '' );
        define ( 'DB_DB', 'book_store' );


        // Create connection
        $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DB);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          //  echo "Established";
        }

        
        
        // showing data from database
        
        
		$sql ="SELECT * FROM `book_info` WHERE `Book Name` = '$bname'";
        $result = $conn->query($sql);
		
		//print_r($result);
        
       // print_r($result);
	if($result -> num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            echo "Book Name: " . $row["Book Name"]. " - Author: " . $row["Author"]. " -Edition: ".$row["Edition"]. " - Price: " . $row["Price"]." -Contact with: ".$row["contact_no"]. "<br />";
			// echo '<p style="text-align: center;"><span style="font-size: large; font-family: georgia,palatino; color: #003366;</span></p> This is a {$mandate} {$compname} {$make} {$modelnum} {$wii} </br>;'
                
        }
  
        $conn->close();
        
	}  
    }


?>

</center>

</body>
</html>
