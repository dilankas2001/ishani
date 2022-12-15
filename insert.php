<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => Order
        $conn = mysqli_connect("localhost", "root", "", "order");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $cname =  $_REQUEST['cname'];
        $address = $_REQUEST['address'];
        $contactno =  $_REQUEST['contactno'];
        $product = $_REQUEST['product'];
        $quantity = $_REQUEST['quantity'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO details  VALUES ('$cname',
            '$address','$contactno','$product','$quantity')";
         
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        ?>
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>