<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Of Cars Showroom Website</title>
    <style>
    body{
    	font-family:"Comic Sans MS" , sans-serif;
	background-color: white;
    	margin:0px;

    }
    header{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://drive.google.com/uc?export=view&id=1_1gbdLNt5RIqPhEAwgbTAgAZgXhQG25b");
        	color: yellow;
        	padding:50px;
        	font-size: 20px;

        }
        footer{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://drive.google.com/uc?export=view&id=1EX5lbvUu4YrKmP1BMtIc0gfCMxsE_bzv");
        	color:white;
			margin-top:10%;
        	padding:30px;
        	font-size: 20px;


        }
 nav{
background-color: lightgrey;
overflow: hidden;

}
  nav ul{
  	list-style: none;
  	padding: 0px;
  	margin: 0px;

  }
  nav ul li{
  	float: left;

  }
  nav ul li a{
  	text-decoration: none;
  	color:black;
  	padding: 10px 25px;
  	display: inline-block;
  	font-size: 18px;

  }
  nav ul li a:hover{
  	background-color: yellow;
  }
  nav ul li a.active{
  	background-color: grey;
  }

  aside{
  	background-color: lightyellow;
  	float: left;
  	width: 200px;
  	text-align: center;
  	height:200px;
  	overflow-y: scroll;
}

aside ul{
	list-style-type: none;
	padding: 0px;
	margin: 0px;

}
aside ul li a{
	text-decoration: none;
	color:black;
	padding:10px 20px;
	display: block;

}
aside ul li a:hover{
	background-color:yellow;
	color:black;
}
section{
	margin-left: 200px;
	border-left: 2px solid grey;
	padding: 10px;

}
details{
background-color: lightgrey;
margin: 5px;
padding: 10px;
border-radius: 50px;


}
.title{
	background-image: url("https://drive.google.com/uc?export=view&id=1gTPxe82wXyg1QuIFEAlZAS7KhnlVFH85");
  width: 100%;
  padding: 12px 20px;
  margin-top: 40px;
  text-align:center;
  text-transform: Uppercase;
  font-weight: 800;
  font-size: 30px;
}

.form_design{

    margin-top: 50px;
	margin-bottom: 50px;
	margin-left: 25%;
	width: 50%;
}
input[type=text], input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 15px;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: grey;
  border: none;
  border-radius: 10px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 40%;
}



    </style>


</head>
<body>
<!-- main header -->
<header>
	<h1>House Of Cars Showroom</h1>
	<p style="color:red;">A site which can make your dream car real</p>
</header>
<!-- main nav -->
<nav>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="R_servicerequest.php">Service Request</a></li>
	<li><a href="S.M_mechaniclogin.php">Mechanics</a></li>
	<li><a href="S.M_userlogin.php">View Cars</a></li>
	<li><a href="S.M_adminlogin.php">Admin Panel</a></li>



</ul>
</nav>
<!-- side bar -->
<aside>
	<ul>
	<li><a href="S.M_adminlogin.php">Admin Login</a></li>
	<li><a href="S.M_usersignup.php">User Sign Up</a></li>
	<li><a href="S.M_mechanicsignup.php">Mechanic Sign Up</a></li>
	<li><a href="S.M_userlogin.php">User Login</a></li>
	<li><a href="S.M_mechaniclogin.php">Mechanic Login</a></li>

	</ul>
</aside>
<!-- contents -->

  <section id = "section1">

		<div class="title">Mechanic Sign Up </div>

		<form action="S.M_registermechanic.php" class="form_design" method="post">
			Username: <input type="text" name="mname"> <br/>
			Email: <input type="text" name="mmail"> <br/>
			Adress: <input type="text" name="madress"> <br/>
			Phone Number: <input type="text" name="mphone"> <br/>
			Skills: <input type="text" name="skill"> <br/>
			Password: <input type="password" name="mpass"> <br/> <br/>
			<input type="submit" value="Register">
		</form>
</section>

<!-- main footer -->
<footer>
<h2 style="color:blue;">Copyright &copy;2021 , House Of Cars Showroom</h2>
<p style="color:red;">All rights are reserved.</p>
<small style="color:blue;">Developed & maintained by Fahim, Mohon, Raidah, Mim, Mouly</small>
</footer>



</body>
</html>
