<?php get_header(); ?>
    <div id="why" class="content">
        <div class="container">
            <h2 class="content-title">Why Chose Unite</h2>
        </div>
    </div>

    <div id="what" class="content">
        <div class="container">
           <h2 class="content-title">What We Do</h2>
        </div>
    </div>

    <div id="join" class="content">
        <div class="container">
           <h2 class="content-title">Join Unite</h2>
            <ul class="pricing-table col-4">
                    <li data-animation="true" data-animation-type="fadeInUp" class="fadeInUp contentAnimated finishAnimated">
                        <div class="pricing-container">
                            <h3>Starter</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">FREE</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>1GB Storage</li>
                                <li>2 Clients</li>
                                <li>5 Active Projects</li>
                                <li>5 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp" class="fadeInUp contentAnimated finishAnimated">
                        <div class="pricing-container">
                            <h3>Basic</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$9.99</span>
                                    <span class="price-tenure">per month</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>2GB Storage</li>
                                <li>5 Clients</li>
                                <li>10 Active Projects</li>
                                <li>10 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li class="highlight fadeInUp contentAnimated finishAnimated" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Premium</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$19.99</span>
                                    <span class="price-tenure">per month</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>5GB Storage</li>
                                <li>10 Clients</li>
                                <li>20 Active Projects</li>
                                <li>20 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-theme btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp" class="fadeInUp contentAnimated finishAnimated">
                        <div class="pricing-container">
                            <h3>Lifetime</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$999</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Unlimited Storage</li>
                                <li>Unlimited Clients</li>
                                <li>Unlimited Projects</li>
                                <li>Unlimited Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
    </div>

    <div id="contact" class="content bg-silver-lighter">
        <div class="container">
            <h2 class="content-title">Contact Us</h2>
            <p class="content-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,
sed bibendum turpis luctus eget</p>

            <div class="row">
                <div class="col-md-6 fadeInLeft">
                    <p><i class="fa fa-phone-square fa-fw"></i> Call:</p>
                    <p><i class="fa fa-envelope fa-fw"></i> Email:</p>
                    <p><i class="fa fa-map-marker fa-fw"></i> Address:</p>
                    <p><i class="fa fa-twitter fa-fw"></i> Twitter: <a href="https://twitter.com/unite_invest">@unite_invest</a></p>
                    <p><i class="fa fa-clock-o fa-fw"></i> Opening Hours: Monday - Friday 9am - 5pm</p>
                </div>

                <div class="col-md-6 form-col fadeInRight">
                    <?php gravity_form( 1, false, false, false, '', false ); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
