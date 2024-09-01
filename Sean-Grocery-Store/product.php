<!DOCTYPE html>

<?php
session_start();

$link = mysqli_connect("aa13b4mwvwkeyt4.clh9r9qzmf4s.us-east-1.rds.amazonaws.com", "uts", "internet", "assignment1");

if(!$link) {
    die("Could not connect to server");
}

$id = $_REQUEST['item'];

$query_string = "select * from products where product_id='$id'";

$result = mysqli_query($link, $query_string);

$num_rows = mysqli_num_rows($result);

mysqli_close($link);    
?>

<html>
    <head>
        <title>Product Description</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id='productstyle'>
        <h1 style="text-align:center">Product Description</h1>
        <form action="cart.php" method="get" target="bottomright" onsubmit="return validate()">
            <p>
                
            <?php
            if($num_rows > 0) {
                print "<table class='productdetails'>";
                while($a_row = mysqli_fetch_assoc($result)) {
                    print "<tr>";
                        print "<th>Product Name</th>";
                        print "<td>".$a_row['product_name']."</td>";
                        print "<td rowspan='4'> <img src='images/$id.webp' alt='Image of chosen product'></img> </th>";
                    print "</tr>";
                    print "<tr>";
                        print "<th>Price</th>";
                        print "<td>$".$a_row['unit_price']."</td>";
                    print "</tr>";
                    print "<tr>";
                        print "<th>Quantity</th>";
                        print "<td>".$a_row['unit_quantity']."</td>";
                    print "</tr>";
                    print "<tr>";
                        print "<th>In Stock</th>";
                        print "<td>".$a_row['in_stock']."</td>";
                    print "</tr>";
                    print "<input type='hidden' id='productID' name='productID' value=".$a_row['product_id'].">";
                }
            ?>
            
                    <tr>
                        <td colspan='3'>
                            <input type="text" id="additem" name="additem">
                            <input class='buttons' type="submit" value="ADD TO CART">
                        </td>
                    </tr>
                </table>
                
            <?php 
            } 
            else {
                print "<p>Please select a product</p>"; 
            }
            ?>
            </p>
        </form>
    </body>
</html>

<script type="text/javascript">

    function validate() {
        var test = document.getElementById("additem");
        var number = /^[0-9]*$/;
        
        if(test.value=="") {
            alert("Please enter the quantity with valid numbers only.");
            return false;
        }
        
        if(!test.value.match(number)) {
            alert("Please enter valid numbers only.");
            return false;
        }
        
        if (test.value <= 0) {   
            alert("Quantity number has to be no less than 1");
            return false;
        }
        
        if(test.value > 20) {
            alert("The maximum quantity you can purchase is 20");
            return false;
        }
        return true;
    }
</script>