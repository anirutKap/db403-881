<?php
  include 'db_connect.php';
  $query = "select CategoryID, CategoryName from categories";
  $result1 = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
    <form action="product.php" method="get">
    <select>
      <?php while($row = mysqli_fetch_array($result1)):;?>
      <option><?php echo $row[1];?></option>
      <?php endwhile;?>
    <select>
    <input type="submit" value="Search" name="submit">
  <!-- <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category"> 
          <option value="red">Red</option>
          <option value="1">Beverages</option>
          -->
        <!-- </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header> -->
</body>
</html>