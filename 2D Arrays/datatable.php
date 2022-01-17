<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!--Manual JS-->
    <script>
        $(document).ready(function() {
        $('#products').DataTable();
        } );
    </script>
    <!-- Site Info -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table Practice</title>
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand"> DataTable Practice</span>
            <ul class="nav navbar-nav navbar-right">
            <li class="active" style="color:white;">Products</li>
            </ul>
        </div>
    </nav>
    <!-- php for array -->
    <?php
        $products = array(
            "1" => array(
                "ProductName" => "Chai",
                "QuantityUnit" => "10 boxes x 20 bags",
                "Price" => 18,
                "Stock" => 39
            ),
            "2" => array(
                "ProductName" => "Champ",
                "QuantityUnit" => "24-12 oz bottles",
                "Price" => 19,
                "Stock" => 17
            ),
            "3" => array(
                "ProductName" => "Aniseed Syrup",
                "QuantityUnit" => "12 - 550ml bottles",
                "Price" => 10,
                "Stock" => 13
            ),
            "4" => array(
                "ProductName" => "Chef Anton's Cajun Seasoning",
                "QuantityUnit" => "48 - 6 oz jars",
                "Price" => 22,
                "Stock" => 53
            ),
            "5" => array(
                "ProductName" => "Chef Anton's Gumbo Miz",
                "QuantityUnit" => "36 boxes",
                "Price" => 21.35,
                "Stock" => 0
            ),
            "6" => array(
                "ProductName" => "Grandma's Bosyenberry Spread",
                "QuantityUnit" => "12 - 8 oz jars",
                "Price" => 23,
                "Stock" => 120
            ),
            "7" => array(
                "ProductName" => "Mishi Kobe Niku",
                "QuantityUnit" => "18 - 6009 packages",
                "Price" => 97,
                "Stock" => 29
            ),
            "8" => array(
                "ProductName" => "Ikura",
                "QuantityUnit" => "12 - 200 ml jars",
                "Price" => 31,
                "Stock" => 31
            )
        )
    ?>
    <!--datatable-->
    <div style="width:80%; margin-left:auto; margin-right:auto;">
    <table id="products" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Quantity per Unit</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($products as $product => $productData){
                echo("<tr> <td>$product</td><td>$productData[ProductName] </td><td>$productData[QuantityUnit]</td><td>$productData[Price]</td><td>$productData[Stock]</td></tr>");
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>