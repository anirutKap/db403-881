<?php 
    // Create connection
    include 'db_connect.php';
    $query = "select ProductName, UnitsInStock from products where CategoryID=1";
    $result2 = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"></div>
        <table>
            <thead>
                <tr>
                    <th width="50%">Product Name</th>   
                    <th width="50%">Units in stock </tr>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result2->fetch_assoc()): ?>
                    <tr>
                    <td class="ProductName">
                    <?php echo $row['ProductName']; ?>
                    </td>
                    <th><?php echo $row['UnitsInStock']; ?></th>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
</body>
</html>