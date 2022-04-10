<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Of Cars Showroom Website</title>
    <style>
    body{
    	font-family:"Comic Sans MS" , sans-serif;
    	margin:0px;
		background-color: white;
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

<!-- contents -->

  <section id = "section1">
		<div class="title" align="center"> CAR List </div><br><br>
    <body>
    <nav class="navbar navbar-inverse">
     <div class="container-fluid">
      <h3 style="color: #4d0000;" align='center'>Find your dream here</h3>
      </div>
     </nav>
     <div class="container">
      <h3 style="text-align: center;font-weight: bold;"></h3>
      <div class="row">
      <from class="from-horizontal" action="index=php" method="POST">
      <div class="form-group">
    		<h3> Search according to your Expectation</h3>
      <lebel class="col-lg-2 control-label">Name</label>
      <div class="col-lg-4">
      <input type="text" class="from-control" name="name" placeholder="Name">
      </div>
      </div>

    	<div class="from-group">
      <label class="col-lg-2 control-label">Brand</label>
      <div class="col-lg-4">
      <select class="course">
     <option>Select</option>
     <option>BMW</option>
     <option>Chiron Super Sport</option>
     <option>Ferrari</option>
    </select>
    </div>
    </div>

    <div class="from-group">
    <label class="col-lg-2 control-label">Price</label>
    <div class="col-lg-4">
    <select class="course">
    <option>Select</option>
    <option><2000000</option>
    <option><5000000</option>
    <option><10000000</option>
    </select>
    </div>
    </div>

<table width="100%">
	<a><th>Car List</th></a>

</table>
<br>


 <div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background: #19e600">
<br>


   <table width="100%">

            <tr>

                <th >Model</th>
				<th>Price</th>

            </tr>






			<?php
			require_once("DBconnect.php");
			$sql = "SELECT * FROM cars";
			$result = $conn-> query($sql);
			if($result-> num_rows > 0){


				while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["Model"]."</td><td>".$row["Price"]."</td></tr>";

				}
				echo "</table>";
			}
else{
	echo "nothing";
}
	$conn-> close();
			?>





		</table>







<!-- main footer -->
</section>
<footer>
<h2 style="color:blue;">Copyright &copy;2021 , House Of Cars Showroom</h2>
<p style="color:red;">All rights are reserved.</p>
<small style="color:blue;">Developed & maintained by Fahim, Mohon, Raidah, Mim, Mouly</small>
</footer>


</body>
</html>
