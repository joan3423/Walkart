<?php include("../header/header-products.php"); ?>
<!-- content and bar search -->
<!-- <div class="text-search">
    <img class="backimg" src="img/products/backimg.jpg" alt="">
</div>-->

<div class="shop"> 
    <div class="product-list">
            <div class="prev-next">
                <a href="" class="prev-next-design">prev</a><span class="prev-next-design">/</span><a href="" class="prev-next-design">next</a>
            </div>
    <div class="grid-product">
       <div class="img-product">
            <img class="adjust-product" src="../img/contact-us/img1.png" alt="">
       </div>
       <div class="information-andshop">
            <div class="center-this">
                <span class="title-product">Deadpool shoes</span>
            </div>
                <form action="">
                    <div class="price">
                        <span class="price-text">$99.9</span>
                    </div>
                    <div class="select-text">
                        <span class="">Size</span>
                    </div>
                    <div class="select-size">
                        <select class="form-product" aria-label="Default select example">
                            <option selected>Select your size</option>
                            <option value="1">36</option>
                            <option value="2">37</option>
                            <option value="3">38</option>
                            <option value="3">39</option>
                            <option value="3">40</option>
                            <option value="3">41</option>
                            <option value="3">42</option>
                        </select>
                    </div>
                    <div class="select-text">
                        <span class="">color</span>
                    </div>
                    <div class="form-check">
                        <div class="checks">
                            <input class="form-check-color" type="checkbox" value="" id="flexCheckDefault1" checked>
                        </div>
                        <div class="checks">
                            <input class="form-check-color" type="checkbox" value="" id="flexCheckDefault2">
                        </div>
                        <div class="checks">
                            <input class="form-check-color" type="checkbox" value="" id="flexCheckDefault3">
                        </div>
                        <div class="checks">
                            <input class="form-check-color" type="checkbox" value="" id="flexCheckDefault4">
                        </div>
                    </div>

                    <div class="select-text">
                        <span class="quantity">Quantity</span>
                    </div>
                    <div class="input-quantity">
                        <input class="form-quantity" type="number" value="1" name="" id="">
                    </div>
                    <div class="send-button">
                        <button class="button-add">add to cart</button>
                    </div>
                    <div class="send-button">
                        <button class="paypal-button-add"><img class="paypal-img" src="../img/products/paypal.png" alt=""></button>
                    </div>
                </form>
       </div>
       </div>
    </div>
</div>


<div class="img-artback"></div>

<div class="before-footer">
    <div class="height-head2">
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
</body>
<!-- ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- materialize -->
<script src="../js/carrouselmaterialize.js"></script>
<script type="text/javascript">
       $('#flexCheckDefault1').click(function(){
            $("#flexCheckDefault1").prop("checked", true);
            $("#flexCheckDefault2").prop("checked", false);
            $("#flexCheckDefault3").prop("checked", false);
            $("#flexCheckDefault4").prop("checked", false);
       });
       $('#flexCheckDefault2').click(function(){
            $("#flexCheckDefault2").prop("checked", true);
            $("#flexCheckDefault1").prop("checked", false);
            $("#flexCheckDefault3").prop("checked", false);
            $("#flexCheckDefault4").prop("checked", false);
       });
       $('#flexCheckDefault3').click(function(){
            $("#flexCheckDefault3").prop("checked", true);
            $("#flexCheckDefault1").prop("checked", false);
            $("#flexCheckDefault2").prop("checked", false);
            $("#flexCheckDefault4").prop("checked", false);
       }); 
       $('#flexCheckDefault4').click(function(){
            $("#flexCheckDefault4").prop("checked", true);
            $("#flexCheckDefault1").prop("checked", false);
            $("#flexCheckDefault2").prop("checked", false);
            $("#flexCheckDefault3").prop("checked", false);
       });  

    </script>
<script>
    $(document).ready(function () {
        $('.carouselBIG').carouselBIG();
    });
</script>
<script type="text/javascript">
    
    window.addEventListener('scroll', function(e) {
    document.getElementById("navbarNav").style['background-color'] = "black";
    });
    </script>
    </script>
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
    
<!-- bootstrap js -->
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../js/lazysizes.min.js" async></script>
<!-- myscripts-->
<script src="../js/custom.js"></script>
<script src="../js/responsives.js"></script>

<!-- font awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
    integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
    crossorigin="anonymous"></script>
<!-- carrousel -->
<script src="../js/flickity.js"></script>




</html>