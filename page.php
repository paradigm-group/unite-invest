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
