<?php get_header(); ?>

<section class="main-banner">
                <div class="head">
                    <h1>Cosmetics For You</h1>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing , lectus magna fringilla urna, porttitor
                        rhoncus dolor purus non</span>
                    <a href="#">New Arrivals</a>
                </div>

            </section>

            <section class="products">
            <div class="bgc">
                <p class="header-text">Categories</p>
                <div class="categories">
                    <a class="cat-card" href="#">
                        <img src="http://127.0.0.1/brushurcheekwoocomerce/wp-content/uploads/2021/03/eyes.png" alt="eyes">
                        <h2>eyes</h2>
                    </a>
                    <a class="cat-card" href="#">
                        <img src="http://127.0.0.1/brushurcheekwoocomerce/wp-content/uploads/2021/03/lips.png" alt="lips">
                        <h2>lips</h2>
                    </a>
                    <a class="cat-card" href="#">
                        <img src="http://127.0.0.1/brushurcheekwoocomerce/wp-content/uploads/2021/03/face.png" alt="face">
                        <h2>face</h2>
                    </a>
                </div>
            </div>
            <div class="container">
                <p class="header-text">Sales</p>
                <div class="promo-products">

<?php echo do_shortcode('[best_selling_products limit="3"]'); ?>

                    <!-- <div class="product">
                        <img src="../images/product1.png" alt="">
                        <p>The Buffer™ Airbrush Bamboo</p>
                        <div class="price">
                            <span class="cross">$69.00</span>
                            <span>$49.00</span>
                        </div>
                        <div class="button">Add To Basket</div>
                    </div>
                    <div class="product">
                        <img src="../images/product2.png" alt="">
                        <p>Eyebrow Stylus </p>
                        <div class="price">
                            <span class="cross">$34.99</span>
                            <span>$24.99</span>
                        </div>
                        <div class="button">Add To Basket</div>
                    </div>
                    <div class="product">
                        <img src="../images/product3.png" alt="">
                        <p>Double Down Brow Putty Palette </p>
                        <div class="price">
                            <span class="cross">$99.00</span>
                            <span>$79.00</span>
                        </div>
                        <div class="button">Add To Basket</div>
                    </div> -->


                </div>
                <div class="more-sales">
                    More sales...
                </div>
            </div>
        </section>
        </div>

        <section class="newsletter">
            <div class="container">
                <h1 class="newsletter-header">
                    Sign Up to BrushUrCheek newsletter and get updates about our latest arrivals and extra sales
                </h1>

                <form class="form" action="" method="post" id="mc-embedded-subscribe-form"
                    name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                    <input class="form__email" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                        placeholder="email address" required="">
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                            name="b_c12aafb941c4276911b0d5cd3_839b42c955" tabindex="-1" value=""></div>
                    <input class="form__submit button" type="submit" value="Subscribe" name="subscribe"
                        id="mc-embedded-subscribe">
                </form>
            </div>
        </section>



<?php get_footer(); ?>