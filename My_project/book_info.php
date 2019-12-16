<html>
<head>
<style>

body{
	margin: 5;
	padding: 10;
	background: black;
	color: #fff;	 
	 
}



.example1 {
     
    background:url(back1.jpg);
    background: black;
    background-repeat: no-repeat;
    padding:15px;
	
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
            background: #ee8f1a;
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

<body class="example1">
<div align="center">

    <h2>Enter Your Book Details </h2>
<form method="post">



<p>Book Name</p>
<input class="myselect" name="bname" type="text" required="required" />
   
<br>

<p>Author</p>
<input class="myselect" name="author" type="text" required="required" />
   
<br>


<p>Edition</p>
<input class="myselect" name="edition" type="text" required="required" />
   
<br>



<p>Price</p>
<input class="myselect" name="price" type="text" required="required" />
   
<br>

<p>Your Contact Number</p>
<input class="myselect" name="contact" type="text" required="required" />
   
<br>











<button class="mybutton" type="submit" name="Save" style="margin-top: 50px;">Save</button>
</form>

</div>
<div>
</body>
</html>





<?php

    if(isset($_POST['Save'])){
        
        
        $bname = $_POST['bname'];
        $author = $_POST['author'];
        $edition = $_POST['edition'];
        $price = $_POST['price'];
        $contact = $_POST['contact'];
        
        
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
        
        
         
        $sql="INSERT INTO `book_info` (`Book Name`, `Author`, `Edition`, `Price`, `contact_no`) VALUES ('$bname', '$author', '$edition', '$price', '$contact' )";
        if ($conn->query($sql) === TRUE) {
            echo "added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
        
    }


?>