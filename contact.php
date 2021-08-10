
<?php include("header/simpleheader.php"); ?>


    <div class="grid-contact">
        <div class="contactus-text">
            <div class="contactus-all">
                <div class="title-contact">
                    ¿Do you have any questions? Do not hesitate to contact us!
                </div>
                <div class="location-text">
                    We are in Colombia, specifically in Ibague-Tolima, the place is specified on the map but our shipments reach all parts of the world! So if you don't live in Colombia, don't worry.
                </div>
                <div class="buttons">
                    <button class="whatsap-button"><i class="fab fa-whatsapp"></i>&nbsp;Go to our personal chat</button>
                </div>
            </div>
            <div class="contactus-all2">
                <div class="title-contact">
                    or send us an email
                </div>
                <div class="form" style="z-index: 10; position: relative">
                    <div class="theform">
                        <div class="width-single-bar">
                            <div class="title-input">Your name complete</div>
                            <input class="inputs-request" type="text" name="" id="">
                        </div>
                        <div class="width-dobule-bar">
                            <div class="one-bar">
                                <div class="title-input">Your e-mail address</div>
                                <input class="inputs-request" type="text" name="" id="">
                            </div>
                            <div class="one-bar">
                                <div class="title-input">Your phone number</div>
                                <input class="inputs-request" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="width-single-bar">
                            <div class="title-input">Describe what do you want</div>
                            <textarea class="inputs-request-big" name="" id="" cols="20" rows="5"></textarea>
                        </div>
                        <div class="width-single-bar">
                            <button class="send">Send</button>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="map" style="">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.7504461807443!2d-75.17295864555845!3d4.44275282178768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c526ca8ce419%3A0x558ef6b4e7a2ca8b!2sConjunto%20residencial%20Yerbabuena!5e0!3m2!1ses!2sco!4v1615905726982!5m2!1ses!2sco"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
        </div>
    </div>

    <div class="before-footer" style="position: absolute; width: 100%">
    <div class="height-head2" style="z-index: 1; position: relative">
        </div>
    <div class="footer">
        <div class="wrap-footer">
            <div class="block-1">
                <a href="products.html" class="block-2">All</a>
                <a href="aboutus.html" class="block-2">About us</a>
                <a href="contact.html" class="block-2">Contact</a>
            </div>
            <div class="block-1">
                <a href="faq.html" class="block-2">FAQ</a>
                <a class="block-2">Return policity</a>
                <a class="block-2">Payments</a>
            </div>
            <div class="block-3 header-grid">
                <div class="contain-block3">
                    <span class="block-23">Join</span>
                    <span class="block-23">and receive all the information, discounts and coupons</span>
                    <input class="input-edit" type="text">
                    <button class="orange-button" style="width: 100%; margin-top: 5%; height: 50px;">Subscribe
                        Now</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
        integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
        crossorigin="anonymous"></script>
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/lazysizes.min.js" async></script>
    <!-- myscripts-->
    <script src="js/custom.js"></script>

    <script type="text/javascript">
    $(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 80) {
            $('#navbarNav').addClass('black-navbar');
        } else {
            $('#navbarNav').removeClass('black-navbar');
        }
        });
    });

    </script>

</body>

</html>