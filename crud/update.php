<!doctype html>
<html>
<head>
</head>
<body>
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
   <?php
  	include 'config.php';

  	$id= $_GET['id'];
  	$sql = "SELECT * FROM contacts WHERE id='{$id}'";
  	$result= mysqli_query($con,$sql);
  	$row = mysqli_fetch_array($result);

  ?>
  <form method="POST" action="transact.php">
  <td><?php echo $row['id']; ?><input type='hidden' value="<?php echo $row['id'];?>" name="id"></td>
  <td><input type="text" name="full_name" value="<?php echo $row['full_name']; ?>"/></td>
  <td><input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"/></td>
  <td><input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>"/></td>
  <td><input type="text" name="email_address" value="<?php echo $row['email_address']; ?>"/></td>
  <td><input type="text" name="date_created" value="<?php echo $row['date_created']; ?>"/></td>
  <td><input type="text" name="date_updated" value="<?php echo $row['date_updated']; ?>"/></td>
  <td><input type="submit" name="update" value="UPDATE"/></td>
  </form>
  </form>
  </form>
</tr>
</table>
</body>
</html>
