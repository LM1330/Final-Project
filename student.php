<?php
include "student2.php";
?>

<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

<table width="1920" height="929" border="0">
  <tr>
    <td height="60" colspan="4" bgcolor="#ACB4D7">
    <h1 align="center">Cyber Security Students ARU</h1>
    </td>
  </tr>
  <tr>
    <td width="51" rowspan="2">&nbsp;</td>
    <td height="762" colspan="2"><table width="1813" height="659" border="0">
      <tr>
        <td width="231"><td width="292"></th>
        <td width="689"><td width="56"></th>
        <td width="32"><td width="1"></th>
        <td width="71"><td width="1"></th>
      <td width="286"><td width="32"><td width="76"></tr>
      <tr>
        <td height="494" bgcolor="#5769A8">
        
       	<div class="container">
 	 	 <h5 align="center">Add elements</h5>
  	 	 <form action="" name="form1" method="post">
  	  		<div class="form-group">
   	   		 <label for="firstName"><h2>
   	   		 <div align="center">First Name
   	   		   <h2></label>
   	   		   <input type="text" class="form-control" id="firstName" placeholder="Enter First name..." name="firstName"  >
 	   		   </div>
  	  		</div>
   	 		<div class="form-group">
   	   		 <label for="lastName"><h2 align="center">Last Name</h2></label>
   	   		 <div align="center">
   	   		   <input type="text" class="form-control" id="lastName" placeholder="Enter Last name..." name="lastName"  >
 	   		   </div>
   	 		</div>
            <div class="form-group">
   	   		 <label for="age"><h2>
   	   		 <div align="center">Age
   	   		   <h2></label>
   	   		   <input type="text" class="form-control" id="age" placeholder="Enter age..." name="age"  >
 	   		   </div>
            </div>
   	 		<h2 align="center">Gender:
          	</h2>
   
             <p align="center">Male
               <input type="radio" name="gender" value="m"  />
               Female
               <input type="radio" name="gender" value="f"  />
               Other
               <input type="radio" name="gender" value="o"  />
             </p>
             <div align="center">
               <button type="submit" name="insert" class="btn btn-default">Insert</button>


             </div>
  	 	 </form>
		</div>
      
        
        </td>
        <td rowspan="2">&nbsp;</td>
        <td rowspan="2">
        
        
        <table width="689" height="111" border="1" class="table table-bordered">
        <thead>
          <tr>
            <th width="187" bgcolor="#999999" scope="col"><h2>ID</h2></th>
            <th width="196" height="43" bgcolor="#999999" scope="col"><h2>First Name</h2></th>
            <th width="187" bgcolor="#999999" scope="col"><h2>Last Name</h2></th>
            <th width="150" bgcolor="#999999" scope="col"><h2>Age</h2></th>
            <th width="128" bgcolor="#999999" scope="col"><h2>Gender</h2></th>
            <th width="128" bgcolor="#999999" scope="col"><h2>Edit</h2></th>
            <th width="128" bgcolor="#999999" scope="col"><h2>Delete</h2></th>
          </tr>
        </thead>
        <tbody>
        <?php
		$res=mysqli_query($link,"select * from students");
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td bgcolor='#999999'>"; echo $row["ID"]; echo"</td>";
			echo "<td bgcolor='#999999'>"; echo $row["firstName"]; echo"</td>";
			echo "<td bgcolor='#999999'>"; echo $row["lastName"]; echo"</td>";
			echo "<td bgcolor='#999999'>"; echo $row["age"]; echo"</td>";
			echo "<td bgcolor='#999999'>"; echo $row["gender"]; echo"</td>";
			echo "<td bgcolor='#999999'>"; ?> <a href="edit.php?id=<?php echo $row["ID"]; ?>"><button type="button">Edit</button></a>  <?php echo"</td>";
			echo "<td bgcolor='#999999'>"; ?> <a href="delete.php?id=<?php echo $row["ID"]; ?>"><button type="button" >Delete</button></a>  <?php echo"</td>";
			echo "</tr>";
		}
		
		
		?>
        </tbody>
        </table>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="90">
          <div class="col-lg-12">
            </div>
          
          
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
    
    
    
    </td>
    <td width="56" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="861" height="90" bgcolor="#666666"><table width="724" border="0">
        <tr>
          <td width="273">&nbsp;</td>
          <td width="441"><a href="homepage.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Homepage','','Images/Homepage2.png',1)"><img src="Images/Homepage1.png" alt="Homepage" width="304" height="114" id="Homepage" /></a></td>
        </tr>
    </table></td>
    <td width="924" bgcolor="#666666"><table width="884" height="82" border="0">
        <tr>
          <td colspan="2"><h2 align="center">Contact Details</h2></td>
        </tr>
        <tr>
          <td width="439" height="45"><div align="center">Phone number: 01752 200663</div></td>
          <td width="435"><div align="center">Email: <a href="mailto:CyberSecurity@university.ac.uk">CyberSecurity@university.ac.uk</a></div></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>

</html>
<?php
		if(isset($_POST["insert"]))
		{
			mysqli_query($link,"insert into students values ( 'NULL','$_POST[firstName]','$_POST[lastName]','$_POST[age]','$_POST[gender]')");	
			$page = $_SERVER['PHP_SELF'];
			$sec = "0";
			?>
            <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
            <?php
		}

?>