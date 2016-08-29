<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="_assets/_css/style.css">
    <script src="_assets/_js/jquery-3.1.js"></script>
    <!--    Menu DropDown-->
    <script>
        $(document).ready(function(e){
           $('.sub').click(function(){
              $(this).toggleClass('tap');
           });
        });
    </script>
    <!--    Menu DropDown-->
    <title>E-commerce</title>
</head>

<body>
    <main>

        <header class="container">
            <div class="header-top">
                <div class="row">
                    <div class="col col-3">
                        <h1 class="logo">Portland</h1>
                    </div>
                    <div class="col col-3">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="#0">Home</a></li>
                                <li><a href="#1">Devices</a></li>
                                <li><a href="#2">Delivery & Payment</a></li>
                                <li><a href="#3">Guarantee</a></li>
                                <li><a href="#4">About Us</a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col col-3">
                        <div class="nav-assets">
                            <span>Cart</span>
                            <a href="#0">Sign in</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--row-->
            </div>
        </header>
        <!--       Fim do cabeçalho-->
        <section class="interface">
            <div class="banner">
                <img src="_assets/_img/Banner.png" alt="[Banner]" title="Banner">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="filter-bar">
                            <h1>Sort By:</h1>
                            <form action="">
                                <label for="keywords">KeyWords</label>
                                <input type="search" id="keywords" placeholder="Tablet, Phones ...">
                                <label for="price">Price</label>
                                <input type="number" id="price" min="0" step="100.0" placeholder="R$">
                                <input type="submit" value="Search !">
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--coluna filter-bar-->
                </div>
                <!--linha filter-bar-->
            </div>
            <!--container filter-bar-->

            <div class="container">
                <div class="row">
                    <div class="col col-sidebar">
                        <aside class="aside-bar">
                            <div class="aside-dropdown">
                                <ul class="dropdown">
                                    <li><a href="#1">Top Sales</a></li>
                                    <li><a href="#2">Brand Focus</a></li>
                                    <li class="sub"><a href="#3">Hi-Tech <span class="sub-arrow"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="1#">Cell Phones</a></li>
                                            <li><a href="2#">Cameras</a></li>
                                            <li><a href="3#">Computers</a></li>
                                            <li><a href="4#">Tv Audio</a></li>
                                            <li><a href="5#">Video Games</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#4">Home</a></li>
                                    <li><a href="#5">Sale</a></li>
                                </ul>
                            </div>

                            <div class="available-filter">
                              <form action="">
                              <fieldset class="available">

                                    <legend>Available</legend>
                                    <input type="radio" name="available" id="storage"><label for="" id="storage">In Storage</label>
                                    <br>
                                    <input type="radio" name="available" id="storage"> <label for="storage">In Online-Shop</label>

                                </fieldset>
                                <fieldset class="brands">

                                    <legend>Brands</legend>
                                    <input type="checkbox" id="brands">
                                    <label for="brands">Apple</label>
                                    <br>
                                    <input type="checkbox" id="brands">
                                    <label for="brands">Jbl</label>
                                    <br>
                                    <input type="checkbox" id="brands">
                                    <label for="brands">Bose</label>
                                    <br>
                                    <input type="checkbox" id="brands">
                                    <label for="brands" >Nest</label>
                                    <br>
                                    <a href="#0">Show All</a>

                                </fieldset>
                                </form>
                            </div>
                        </aside>
                    </div>
                    <!-- sidebar -->
                    <div class="col col-content">
                        <section class="assets-products">

                            <div class="col col-3">
                                <article class="product">
                                    <img src="_assets/_img/_products/Photo.png" alt="[Apple Tv ]" title="Apple Tv ">
                                    <h1>Apple TV 32GB</h1>
                                    <p>Black</p>
                                    <p>$49,99</p>
                                </article>
                                <article class="product">
                                    <img src="_assets/_img/_products/peeble-time.png" alt="[Peeble Time !]" title="Peeble Time">
                                    <h1>Pebble Time</h1>
                                    <p>Red</p>
                                    <p>$29,99</p>
                                </article>
                                <article class="product">
                                    <img src="_assets/_img/_products/zendure.png" alt="[Zendure]" title="Zendure">
                                    <h1>Zendure 4-Port USB</h1>
                                    <p>White</p>
                                    <p>$49,99</p>
                                </article>
                            </div>

                            <div class="col col-3">
                                <article class="product">
                                    <img src="_assets/_img/_products/zendure.png" alt="[Zendure]" title="Zendure">
                                    <h1>Zendure 4-Port USB</h1>
                                    <p>White</p>
                                    <p>$49,99</p>
                                </article>
                                <article class="product">
                                    <img src="_assets/_img/_products/Photo.png" alt="[Apple Tv ]" title="Apple Tv ">
                                    <h1>Apple TV 32GB</h1>
                                    <p>Black</p>
                                    <p>$49,99</p>
                                </article>
                                <article class="product">
                                    <img src="_assets/_img/_products/olo-clip.png" alt="[Ollo Clip]" title="Ollo Clip">
                                    <h1>Ollo Clip New</h1>
                                    <p>Silver</p>
                                    <p>$19,99</p>
                                </article>
                            </div>

                            <div class="col col-3">
                                <article class="product">
                                    <img src="_assets/_img/_products/fitbit-charge.png" alt="[FitBit]" title="FitBit">
                                    <h1>Fitbit Charge HR</h1>
                                    <p>Black</p>
                                    <p>$49,99</p>
                                </article>
                                <article class="product">
                                    <img src="_assets/_img/_products/apple-watch.png" alt="[Apple Watch]" title="Apple Watch">
                                    <h1>Apple TV 32GB</h1>
                                    <p>Black</p>
                                    <p>$49,99</p>
                                </article>
                                <article class="product">
                                    <img src="_assets/_img/_products/bose-soundlink.png" alt="[Bose Sound Link]" title="Sound Link">
                                    <h1>Bose SoundLink On-Ear HeadPhones</h1>
                                    <p>White</p>
                                    <p>$119,99</p>
                                </article>
                            </div>
                        </section>
                    </div>
                    <!-- content -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->

            <section class="best-sellers">
                <h1>Best Sellers</h1>
                <article class="product-bs">
                    <img src="_assets/_img/_products/beanie.png" alt="[Beanie]" title="Beanie">
                    <h1>Beanie</h1>
                    <p>Green</p>
                    <p>De: $39,99 <span>Por: $29.99</span></p>
                </article>
                <article class="product-bs">
                    <img src="_assets/_img/_products/t-shirt.png" alt="[T-Shirt]" title="T-Shirt">
                    <h1>T-shirt With a Print</h1>
                    <p>Dark Blue</p>
                    <p>De: $29,99 <span>Por: $19.99</span></p>
                </article>
                <article class="product-bs">
                    <img src="_assets/_img/_products/hooded-jacket.png" alt="[Hooded Jacket]" title="Hooded Jacket">
                    <h1>Pile-Lined Hooded Jacket</h1>
                    <p>Dark Blue</p>
                    <p>De: $49,99 <span>Por: $39.99</span></p>
                </article>
                <article class="product-bs">
                    <img src="_assets/_img/_products/both.png" alt="[Boot]" title="Boot">
                    <h1>Trainers</h1>
                    <p>Space Grey</p>
                    <p>De: $39,99 <span>Por: $29.99</span></p>
                </article>
            </section>

            <section class="scrollbar">
                <span>left</span>
                <ul>
                    <li><a href="#1">1</a></li>
                    <li><a href="#2">2</a></li>
                    <li><a href="#3">3</a></li>
                    <li><a href="#4">4</a></li>
                    <li><a href="#5">5</a></li>
                    <li><a href="#6">6</a></li>
                    <li><a href="#7">7</a></li>
                    <li><a href="#8">8</a></li>
                </ul>
                <span>Right</span>
            </section>
        </section>
        <!--       Fim do conteudo Principal-->
        <footer class="footer-main">
            <header class="header-footer">
                <h1>What Our Customers Have to Stay</h1>
                <p>Couple of Words About This Stories Section</p>
            </header>
            <section class="comments">
                <article>
                    <h1>Cella Fields</h1>
                    <p>UX Expert</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quia repudiandae libero reprehenderit voluptate perferendis asperiores. Soluta quas similique et, dignissimos dolorum modi expedita, eum repellat dicta maiores molestiae nobis!</p>
                </article>
                <article>
                    <h1>Alexander Lee</h1>
                    <p>Fouder</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quia repudiandae libero reprehenderit voluptate perferendis asperiores. Soluta quas similique et, dignissimos dolorum modi expedita, eum repellat dicta maiores molestiae nobis!</p>
                </article>
                <article>
                    <h1>Lenora Sandoval</h1>
                    <p>Product Manager</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quia repudiandae libero reprehenderit voluptate perferendis asperiores. Soluta quas similique et, dignissimos dolorum modi expedita, eum repellat dicta maiores molestiae nobis!</p>
                </article>
            </section>
            <footer class="bottom-footer"></footer>
            <h1 class="logo">Portland</h1>
            <nav class="nav-footer-menu">
                <ul>
                    <li><a href="#1">Home</a></li>
                    <li><a href="#2">Shop</a></li>
                    <li><a href="#3">About Us</a></li>
                    <li><a href="#4">Contacts</a></li>
                </ul>
            </nav>

        </footer>
        <!--       Fim do Rodapé-->

    </main>


</body>

</html>
