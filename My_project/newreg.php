<html>
<head>
    <style>
	
	body{
	margin: 5;
	padding: 10;
	background: black;
	color: #fff;	 
	 
}
	
	
        .myselect {
            width: 300px;
            height: 40px;
            border: 3px solid #ee963c;
            padding: 10px 40px;
            background: #fff;
            border-radius: 5px;
        }
        .mybutton {
            width: 300px;
            height: 35px;
            padding: 10px 40px;
            border: 3px solid #ee963c;
            background: #ee8f1a;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
        }
        table  {
            border: 1px solid lawngreen;
            border-collapse: collapse;
            padding:5px;
            margin-right: 40px;
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
<div align="center">

    <h2>User Registration Form</h2>
<form method="post">


<p>STUDENT ID</p>
<input type="text" class="myselect" placeholder="Student ID" name="sid" required=""/>

<br>

<p>NAME</p>
<input type="text" class="myselect" placeholder="Name" name="name" required=""/>

<br>
<p>DEPARTMENT</p>
<input type="text" class="myselect" placeholder="Department" name="department" required=""/>
<br>
<p>E-mail</p>
<input type="text" class="myselect" placeholder="E-mail" name="email" required=""/>
<br>
<p>Mobile Number</p>
<input type="text" class="myselect" placeholder="Contact Number" name="mobile" required=""/>

<br>
<p>PASSWORD</p>
<input type="password" class="myselect" placeholder="Password" name="password" required=""/>
<br>


<button class="mybutton" type="submit" name="register" style="margin-top: 40px;">REGISTER</button>
<p>
			Already a member? <a href="First.php">Sign in</a>
		</p>
</form>

</body>
</html>

<?php

    if(isset($_POST['register'])){


        $sid = $_POST['sid'];
        $name = $_POST['name'];
        $dep = $_POST['department'];
        $email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$pass = $_POST['password'];
         


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



        // adding data to database


        
		$sql = "INSERT INTO `registration` (`Student_id`, `Name`, `Department`, `E-mail`, `Mobile`, `Password`) VALUES ('$sid', '$name', '$dep', '$email', '$mobile', '$pass')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();


    }


?>
