<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script src="myscript.js"></script>
<style>
html {
  background: url(sample.jpg) no-repeat center fixed;
  background-size: cover;
}

body {
  color: white;
}
</style>
</head>
<body >
<table border="1" align="center">
<tr>
 <th>ID</th>
 <th>FULL NAME</th>
 <th>LAST NAME</th>
 <th>CONTACT NO.</th>
 <th>EMAIL ADDRESS</th>
 <th>DATE CREATED</th>
 <th>DATE UPDATED</th>
 <th> &nbsp; </th>
</tr>
 <tr>
 <form name= "frm" method="POST" action="transact.php">
 <td> &nbsp;</td>
 <td><input type="text" name="full_name"/></td>
 <td><input type="text" name="last_name"/></td>
 <td><input type="number" name="contact_number"/></td>
 <td><input type="email" name="email_address"/></td>
 <td><input type="date" name="date_created"/></td>
 <td><input type="date" name="date_updated"/></td>
 <td><input type="submit" id="insert" name="insert" onclick="return IsEmpty();" value="add data"/></td>
 </form>
</tr>

  <?php
  $hostname = "localhost";
    $username = "root";
    $passowrd = "";
    $database = "phonebook";
    $tblname = "contacts";



    //Database connection String
    $con=mysqli_connect($hostname,$username,$passowrd,$database);


    // Check connection
    if (mysqli_connect_errno()) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         echo "<br>";
    }
    else{
        echo "Successfully connected to MySQL...<br>";
    }

      $sql = "SELECT * FROM contacts";
      $result= mysqli_query($con,$sql);

      while ($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['full_name']."</td>";
      echo "<td>".$row['last_name']."</td>";
      echo "<td>".$row['contact_number']."</td>";
      echo "<td>".$row['email_address']."</td>";
      echo "<td>".$row['date_created']."</td>";
      echo "<td>".$row['date_updated']."</td>";
      echo "<td> <button onclick='return DeleteFunction()'><a href='transact.php?id=".$row['id']."'>DELETE</a></td>";
		  echo "<td><button onclick='return UpdateFunction()'><a href='update.php?id=".$row['id']."'>UPDATE</a></td>";
		  echo "</tr>";
     echo "</tr>";
   }
    ?>
</table>
</body>
</html>
