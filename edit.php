<?php
include "student2.php";
$id=$_GET["id"];

$firstName="";
$lastName="";
$age="";
$gender="";

$res=mysqli_query($link,"select * from students where ID=$id");
while($row=mysqli_fetch_array($res))
{
	$firstName=$row["firstName"];
	$lastName=$row["lastName"];
	$age=$row["age"];
	$gender=$row["gender"];
}
?><head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
      	<div class="container">
 	 	 <h5 align="center">&nbsp;</h5>
      	</div>
      	<table width="1658" height="250" border="0">
      	  <tr>
      	    <td width="599">&nbsp;</td>
      	    <td width="314">&nbsp;</td>
      	    <td width="731">&nbsp;</td>
   	      </tr>
      	  <tr>
      	    <td>&nbsp;</td>
      	    <td bgcolor="#768EAD"><h5 align="center">Add elements</h5>
              <form action="" name="form1" method="post">
                <div class="form-group">
                  <label for="firstName">
                  <h2>
                  <div align="center">First Name
                    <h2>
                    </label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter First name..." name="firstName" value="<?php echo $firstName ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="lastName">
                  <h2 align="center">Last Name</h2>
                  </label>
                  <div align="center">
                    <input type="text" class="form-control" id="lastName" placeholder="Enter Last name..." name="lastName" value="<?php echo $lastName ?>"  >
                  </div>
                </div>
                <div class="form-group">
                  <label for="age">
                  <h2>
                  <div align="center">Age
                    <h2>
                    </label>
                    <input type="text" class="form-control" id="age" placeholder="Enter age..." name="age" value="<?php echo $age ?>" >
                  </div>
                </div>
                <h2 align="center">Gender: </h2>
                <p align="center">Male
                  <input type="radio" name="gender" value="m"  value="<?php echo $gender ?>"  />
                  Female
                  <input type="radio" name="gender"  value="f"  value="<?php echo $gender ?>"  />
                  Other
                  <input type="radio" name="gender"  value="o"  value="<?php echo $gender ?>"  />
                </p>
                <div align="center">
                  <button type="submit" name="update" class="btn btn-default">Update</button>
                </div>
            </form></td>
      	    <td>&nbsp;</td>
   	      </tr>
      	  <tr>
      	    <td>&nbsp;</td>
      	    <td>&nbsp;</td>
      	    <td>&nbsp;</td>
   	      </tr>
</table>
</body>
<?php
if(isset($_POST["update"]))
{	
	
mysqli_query($link, "update students set firstName='$_POST[firstName]',lastName='$_POST[lastName]',age='$_POST[age]',gender='$_POST[gender]' where ID=$id");
header('Location: student.php');
}
?>