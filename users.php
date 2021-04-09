<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css">
    .container{
	padding-top: 20px;
      text-align: center;
    }
    .button {
      background-color: #211903;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      border-radius: 2px;
    }
    .button:hover{
      background-color: #ffe096;
      color: #000000;
    }
    .button:active{
      background-color: #1d88c6;
    }
	.row{
		color:#4e0541;
		font-size:25px;
	}
  h2{
font-family: sans-serif;
color: #41050f;
font-weight: bold;
}
th{
    color: #4d1347;
      font-family: roboto;
}
td{
    color: #070949;
    font-family: opensans;


}
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

</style>



</head>
<body style="
    /* For browsers that do not support gradients */
    background-repeat: no-repeat;
    background-attachment: fixed;
    width: 100%;  background-position: center;">
<div class="sidenav">
  <a href="main.html">Home</a>
  <a href="users.php">Customer List</a>
  <a href="transaction.php">History</a>
</div>
<?php
    include 'config.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
?>


    <div class="container divStyle">
        <h2>CUSTOMER LIST</h2>
        <br>

            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table border="4"class="table roundedCorners tabletext table-hover table-sm table-striped table-condensed">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['amount']?></td>
                        <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                 ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>