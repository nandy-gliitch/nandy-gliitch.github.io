<?php
   include("connection.php");
   //require_once("connection.php");
   //require("connection.php");
?>
<header>

 <img src="popo1.jpg" width="100%" height="500" alt=""/>
</header>
<br>

<head>
	<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style><style>
        .humn{
            margin: 3%;
            position: relative;
        }
  
        .first-txt {
            position: absolute;
            top: 17px;
            left: 20px;
        }
  
        .second-txt {
            position: absolute;
            top: 17px;
            left: 150px;
        }
    </style>
	<style>
	footer {
  text-align: center;
  padding: 100px;
  background-color:black;
  color:black;
	</style>
	<img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:60/https://www.filepicker.io/api/file/EfmCQSLFR0u3JLHkqPM1" alt="SPGuides" srcset="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:60/https://www.filepicker.io/api/file/EfmCQSLFR0u3JLHkqPM1">
<head>
</head>
	<body style="background-color:pink"  text="black">
		
<table style="background-color:blue" width="100%" border="0">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="topnav" text="grey" size="80"> 
<center><h1 style="BOLD";margin-bottom:30px;color:BLACK">HABITANT MIGRATION </h1></CENTER>
<button STYLE="MARGIN-LEFT:500PX " onclick="window.location.href='index.php';">HOME </button>
<button STYLE="MARGIN-LEFT:8PX "onclick="window.location.href='about.php';">ABOUT HM</button>
<button STYLE="MARGIN-LEFT:8PX "onclick="window.location.href='update1.php';"> PUBLICATION</button>
<input type="text" placeholder="Search..">
<button STYLE="MARGIN-LEFT:50PX "onclick="window.location.href='log in.php';">LOG IN</button>
  <button STYLE="MARGIN-LEFT:8PX "onclick="window.location.href='insert.php';">CREATE ACCOUNT</button>
  </div>
  <br>
  <br>
  <table width="100%" height="500" border="0" >
  <tr><br><br><br><br><br><br><br><br><br><br>
<td><img src="8.jpg" width="100%" height="100%"/></td<br>
<th colspan style="background-color:crimson">
<form action="" method="get">

  <input type="text" name ="fname" placeholder="Type your fname"/>
  <br/><br/><br/>
  <input type="text" name ="lname" placeholder="Type your lname"/>
  <br/><br/><br/>
  <input type="password" name ="password" placeholder=" type your password"/>
  <br/><br/><br/>
  <input type="text" name ="country" placeholder="Type your country"/>
  <br/><br/><br/>
  <input type="text" name ="district" placeholder=" type district"/><br>
  <br/><br/>
<input type="text" name ="sector" placeholder="Type your sector"/>
  <br/><br/><br/>
  <input type="text" name ="cell" placeholder="Type your cell"/>
  <br/><br/><br/>
  <input type="text" name ="gender" placeholder="Type your gender"/>
  <br/><br/><br/>
  <input type="number" name ="number" placeholder="number"/>
  <br/>
  <br/><br/>
  <input type="submit" name ="sub" value="Save"/>
  </form>
  <br><br></th>
<th colspan ><img src="in.jpg" width="100%" height="100%"/> </th>
</tr>
</table>
<footer>
      <div class="row">
        <div class="large-16 columns">
          <div class="row">
            <div class="large-14 columns">
              <ul class="social">
  <li class="twitter"><a href="https://twitter.com">Follow us on Twitter</a></li>
  <li class="facebook"><a href="https://www.facebook.com">Like us on Facebook</a></li>
  <li class="google"><a href="https://plus.google.com">Add us to your G+ Circles</a></li>
</ul>
</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

<?php
   if(isset($_GET['sub'])){
	   
	   echo "<br/>";
	   $fname = $_REQUEST["fname"];
	   $lname = $_REQUEST["lname"];
	   $lname = $_REQUEST["password"];
	   $lname = $_REQUEST["country"];
	   $lname = $_REQUEST["district"];
	   $lname = $_REQUEST["sector"];
	   $lname = $_REQUEST["cell"];
	   $lname = $_REQUEST["lname"];
	   $lname = $_REQUEST["lname"];
	   
	   $query = "INSERT INTO register( fname, lname,password,country,DISTRICT,sector,cell,gender,number) 
	   VALUES ('NADEGE','NIYONKURU CYIZERE',0789124087,'RWANDA','RUSIZI','MUGANZA','SHARA','FEMALE',+210464533)";
	   
	   $result = mysqli_query($con, $query);
	   if(!$result){
		   echo "Not processed! ".mysqli_error($con);
	   }else{
		  
	   }
   }
  
	   else{
		    while($row = mysqli_fetch_array(!$result)){
				echo $row["id"]."  ".$row["fname"]." ".$row["lname"]." ".$row["password"]." ".$row["sector"]."  ".$row["cell"]." ".$row["gender"]." ".$row["number"]." <br/>";
			}
	   }
   
   //
?>