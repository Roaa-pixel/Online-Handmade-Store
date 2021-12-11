<?php

    shuffle($product_shuffle);
    $topSaleData=$product->getDataById($data->portraits());
    
    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['portrait_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

?>

<!-- Portraits -->
<section id="new-phones">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Portraits</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($topSaleData as $item) { ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid" style="width: 200px;height: 200px;"></a>
                    <div class="text-center">
                        <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'];?>">
                            
                            <?php
                                $result=$Cart->getCartId($product->getProductOfUser($_SESSION['id'],'cart'));
                                if($result==[]){
                                    $result=[0];
                                }
                                else{
                                    $result=$Cart->getCartId($product->getProductOfUser($_SESSION['id'],'cart'));
                                }
                                if (in_array($item['item_id'], $result)){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }
                                else{
                                    echo '<button type="submit" name="portrait_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>

        <!-- </div> -->
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Portraits -->