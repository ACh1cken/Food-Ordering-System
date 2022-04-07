<?php
    include_once 'header.php';
    include_once './include/db_handler.php';

    if (isset($_SESSION["accountID"]))
    {
        $accountID = $_SESSION["accountID"];
    }

    // build the query to display all data from table food_order
    $query = "SELECT * FROM food";

    // execute the query
    if(!($result = mysqli_query($conn, $query)))
    {
        echo "<p>Could not execute query</p>";
        die(mysqli_error($conn) . "</body></html>");
    }
?>

<style>
        <?php include 'styles/menu.css' ?>
</style>


<div class="container-lg position-relative">
    <div class="row g-2" id="spacer-2">

    <?php
        $count = 0; 
        while ($row = mysqli_fetch_assoc($result)) 
        {
    ?>
        <div class="col-lg-4 col-md-5 mx-4"> 
            <div class="card menu-card">
                <div class="card-img-top">
                    <img class="food-img" src="images/<?php echo $row["image"]?>"  alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["name"]?></h5>
                    <h6><b><span>Price: RM</span><span class="price-font"><?php echo $row["price"]?></span></b></h6>
                    <div class="food-desc">
                        <p class="card-text"><?php echo $row["description"]?></p>
                    </div>
                    
                    <span class="col-6">
                        <div class="btn-group position-static bottom-0 start-50 translate-x">
                            <button type="button" class="btn bi-dash-circle" data-type="minus"></button>
                            <input type="text" class="form-control input-number" value="2">
                            <button type="button" class="btn bi-plus-circle" data-type="plus"></button>
                        </div>
                        <!-- End of .btn-group  -->
                    </span>
                    <!-- End of .col-6  -->
                    <span class="addtoorder-btn">
                        <button type="button" class="btn btn-primary">Add to Order</button>
                    </span>
                    <!-- End of .col-6  -->
                </div>
                <!-- End of .card-body  -->
            </div>
            <!-- End of .card  -->
        </div>
        
    <?php
            $count = $count + 1;
            if ($count%2 == 0) {
                echo "<div class=\"w-100\"></div>";
            }
        }
    ?>

        <!-- echo end from here -->

             <!-- Force next columns to break to new line -->

      

    <div class="position-absolute float-end top-0 end-0" id ="menu-rightbar-container">
        <div class="col-12 col-lg-12 ">
            <div id="menu-nav">
                <div class="list-group">
                     <button class="list-group-item list-group-item-action active" aria-current="true">Culinary</button>
                    <button class="list-group-item list-group-item-action">Beverages</button>
                    <button class="list-group-item list-group-item-action">Snacks</button>
                </div>
                <!-- End of .list-group  -->
            </div>
            <!-- End of #menu-nav -->

            <?php
                if (isset($_SESSION["accountID"])) {
            ?>

            <div class="card" id="order-list">
                <div class="checkout-body">
                    <h5 class="card-title">Your Order</h5>
                    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the card's content.</p>
                    <!-- <br> -->
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <!-- End of thead  -->
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Chicken testing testing testing</td>
                                <td>10</td>
                                <td>7.50</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Chicken rice 2</td>
                                <td>1</td>
                                <td>7.50</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Pizza</td>
                                <td>1</td>
                                <td>7.50</td>
                            </tr>
                        </tbody>
                        <!-- End of tbody  -->
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3">Total (RM) :</th>
                                <th>0.00</th>
                            </tr>
                            <tr>
                                <th colspan="2"><button type="button" class="btn btn-primary order-btn1">Order Now</button>
                                </th>
                                <th colspan="2"><button type="button" class="btn btn-danger order-btn1">Clear List</button>
                                </th>
                            </tr>
                        </tfoot>
                        <!-- End of tfoot  -->
                    </table>
                    <!-- End of .table .table-borderless -->
                </div>
                <!-- End of .card-body -->
            </div>
            <!-- End of #order-list .card  -->
            <?php
                } else {
            ?>

            <!-- Ask user to login -->

            <?php
                }
            ?>


        </div>
        <!-- End of .col-12 .col-lg-12  -->
    </div>
    <!-- End of .position-absolute .float-end .top-0 .end-0 -->
</div>
<!-- End of .container-lg .position-relative -->

<?php
include_once 'footer.php';
?>