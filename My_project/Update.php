<html>
<head>
    <style>
	
	
body{
	margin: 20;
	padding: 30;
	background: black;
	color: #fff;
	
	 
	 
}
		
        .myselect {
            width: 250px;
            height: 40px;
            border: 3px solid #ee963c;
            padding: 10px 40px;
            background: #fff;
            border-radius: 5px;
        }
        .mybutton {
            width: 250px;
            height: 40px;
            padding: 10px 40px;
            border: 3px solid #ee963c;             
            background:  #ee8f1a;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
        }
		
		
        table  {
            border: 1px solid lawngreen;
            border-collapse: collapse;
            padding:5px;
            margin-right: 50px;
            margin-bottom: 50px;
        }
        table, th, td {
            border: 1px solid lawngreen;
            border-collapse: collapse;
            padding:5px;
        }

    </style>
</head>

<body>
<a href="profile.php">back to profile</a>
<div align="center">

    <h2> Update Your Info</h2>
            <form method="post">
            
            
            
			<p> Type Your Student ID</p>
			<input type="text" class="myselect" placeholder="Required*" name="sid" required="required"/>

			<br>
			
            
            <p>Your New Mobile Number</p>
            <input class="myselect" name="mobile" type="text"    />
               
            <br>
			<p>Your New E-mail</p>
			<input class="myselect" name="email" type="text" required="required" />

			<br>



			<p> New Password</p>
			<input class="myselect" name="password" type="password" required="required" />

			<br>
            
            
            
            <button class="mybutton" type="submit" name="update" style="margin-top: 50px;">UPDATE</button>
            </form>

</div>
<div>
    
    <center>
        
        <?php

    if(isset($_POST['update'])){
        
        $sid = $_POST['sid'];
        $mobile = $_POST['mobile'];
		$email = $_POST['email'];
        $pass = $_POST['password'];
        echo ' update for ID: '.$sid.'<br />';

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
        
       
 
$sql = "UPDATE `registration` SET `Mobile`='$mobile' , `E-mail`='$email' , `Password`='$pass' WHERE `Student_id`='$sid'";
//UPDATE `registration` SET `E-mail`='xyz@gmail.com',`Mobile`='789456',`Password`='333333' WHERE `Student_id` = 202100000000
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

	}
?>
        
    


      
    </center>
    
    
</body>
</html>