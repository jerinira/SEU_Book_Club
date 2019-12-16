<!DOCTYPE HTML>
<HTML>
<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
#mySidenav a {
     position: absolute; /* Position them relative to the browser window */
	margin:150px 50px 100px;

    left: -80px; /* Position them outside of the screen */
    transition: 0.3s; /* Add transition on hover */
    padding: 15px; /* 15px padding */
    width: 100px; /* Set a specific width */
    text-decoration: none; /* Remove underline */
    font-size: 20px; /* Increase font size */
    color: white; /* White text color */
    border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
    left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#about{
    top: 20px;
    background-color: #4CAF50;
}

#blog {
    top: 80px;
    background-color: #2196F3; /* Blue */
}

#projects {
    top: 140px;
    background-color: #f44336; /* Red */
}

#contact {
    top: 200px;
    background-color: #555 /* Light Black */
}


body{
	margin: 0;
	padding: 0;
	background: black;
	background-image: url("b11.jpg");
	 background-position: center;
	 background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: 1100px 600px;	 
	color: #fff;
	font-family: "Times New Roman", Times, serif;
	font-size: 15px;
}
header{
	
     
    color: white;
    padding: 5em;
    clear: left;
    text-align: center;
	font-size: 18px;
	 
}


</style>
<body>

<div id="mySidenav" class="sidenav">
  <a href="book_info.php" id="about">Sell Book </a>
  <a href="search.php" id="blog">Search book</a>
  <a href="Update.php" id="projects">Update info</a>
  <a href="First.php" id="contact">Logout</a>
 
</div>
<header>
		<h1> <span>User Profile</span></h1>
</header>
</body>
</html>