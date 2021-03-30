<?php include 'header.php';?>
    <div class="home">
        <div id="home-ancre"></div><!-- Cette div est utilisée pour l'ancre dans le menu-->
     <div class="header">
            <h2 class="header stf" id="main-title">pizza</h2>
            <div class="navbar stf">
                <input type="checkbox" class="menupizza" id="menupizza-btn">
                <label for="menupizza-btn"><img src="img/pizz.png" alt="menu pizza" id="pizza-btn"></label>
                <div class="navbutton">
                    <a href="#home-ancre">home</a>
                    <a href="#menu-ancre">menu</a>
                    <a href="#about-ancre">about</a>
                    <!--Ces liens sont des ancres qui mènent à différents endroits de la page. -->
                    <a href:=".checkout"><img src="img/caddie.png" alt="checkout"></a>
                </div> <!-- fermeture navbutton -->
            </div> <!-- fermeture navbar -->
        </div> <!--fermeture header-->
        <div class="welcome">
            <div class="glass stf">
                <h1>Italian<br>Cuisine</h1></div>
                <h2 class="stf">our specialities</h2>
            </div> <!-- fermeture glass-->
        </div> <!-- fermeture welcome-->
        <div class="mainpizza stf">
            <img src="img/pizza.png" alt="pizza0" class="main-pizza-img">
            <h1>Italian<br>Pizza</h1>
        </div> <!-- fermeture mainpizza -->
    </div> <!-- fermture home -->
    <div class="menu-container">
        <h2 class="menu-title stf" id="menu-ancre">menu</h2> <!--Cette div est utilisée pour l'ancre dans le menu-->
        <div class="cards-container">
            <div class="cards"></div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/pizza-01.png" class="card-img-top flip" alt="pizza1">
                    <h5 class="card-title pub">Basil Margherita</h5>
                    <p class="price pub"><span class="dollar">$</span>14.50</p>
                    <div class="taille">
                    <span class="size">Size</span>
                    <div>
                    <select class="select pub" id="size" name="size">
                        <option value="small ">Small</option>
                        <option value="medium">Medium</option>
                    </select>
                    </div> <!-- fermeture select-->
                    </div> <!-- fermeture taille-->
                    <p class="card-text pub">Margherita pizza starts fresh basil, mozzarella, and the bas tomatoes you can find.  It's still a delicious, simple showcase of good quality produce, but the addition of crisp, chewy pizza crust, melty cheese, and warm sauce makes it a cozier, heartier meal.</p>
                    <a href="#" class="btn">Add to basket</a>
                </div> <!-- fermeture card-body -->
            </div> <!-- fermeture card -->
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/pizza-02.png" class="card-img-top flip" alt="pizza2">
                    <h5 class="card-title pub">Jalapeño Popper</h5>
                    <p class="price pub"><span class="dollar">$</span>11.80</p>
                    <div class="taille">
                    <span class="size">Size</span>
                    <div>
                    <select class="select pub" id="size" name="size">
                        <option value="small ">Small</option>
                        <option value="medium">Medium</option>
                    </select>
                    </div> <!-- fermeture select-->
                    </div> <!-- fermeture taille-->
                    <p class="card-text pub">All the flavors of a cheesy jalapeño popper is so much better in pizza form, with added bacon of course ! Imagine a jalapeño popper in the form of a pizza. Yes, it's as epic as it sounds. And better than a traidtional jalapeño popper in my opinion.</p>
                    <a href="#" class="btn">Add to basket</a>
                </div> <!-- fermeture card-body -->
            </div> <!-- fermeture card -->
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/pizza-01.png" class="card-img-top flip" alt="pizza1">
                    <h5 class="card-title pub">Basil Margherita</h5>
                    <p class="price pub"><span class="dollar">$</span>14.50</p>
                    <div class="taille">
                    <span class="size">Size</span>
                    <div>
                    <select class="select pub" id="size" name="size">
                        <option value="small ">Small</option>
                        <option value="medium">Medium</option>
                    </select>
                    </div> <!-- fermeture select-->
                    </div> <!-- fermeture taille-->
                    <p class="card-text pub">Margherita pizza starts fresh basil, mozzarella, and the bas tomatoes you can find.  It's still a delicious, simple showcase of good quality produce, but the addition of crisp, chewy pizza crust, melty cheese, and warm sauce makes it a cozier, heartier meal.</p>
                    <a href="#" class="btn">Add to basket</a>
                </div> <!-- fermeture card-body -->
            </div> <!-- fermeture card -->
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/pizza-02.png" class="card-img-top flip" alt="pizza2">
                    <h5 class="card-title pub">Jalapeño Popper</h5>
                    <p class="price pub"><span class="dollar">$</span>11.80</p>
                    <div class="taille">
                    <span class="size">Size</span>
                    <div>
                    <select class="select pub" id="size" name="size">
                        <option value="small ">Small</option>
                        <option value="medium">Medium</option>
                    </select>
                    </div> <!-- fermeture select-->
                    </div> <!-- fermeture taille-->
                    <p class="card-text pub">All the flavors of a cheesy jalapeño popper is so much better in pizza form, with added bacon of course ! Imagine a jalapeño popper in the form of a pizza. Yes, it's as epic as it sounds. And better than a traidtional jalapeño popper in my opinion.</p>
                    <a href="#" class="btn">Add to basket</a>
                </div> <!-- fermeture card-body -->
            </div> <!-- fermeture card -->
            </div> <!-- fermeture cards -->
        <h2 class="intro-title stf">who are we ?</h2>
        </div> <!-- fermeture cards-container -->
    </div> <!-- fermeture menu-container -->
    <div id="about-ancre"></div><!-- Cette div est utilisée pour l'ancre dans le menu-->
        <div class="about">
            <div class="introduction">
                <p class="pub">As in 1897, our goal is still to preserve the local Italian flavor and pass it to future generations !  For this, we constantly work and do research to obtain the most delicious and natural ingredients. With more than two hundred branches around the world, we are with you wherever you go !<br><br>You can reach us 24/7 from our website or mobile application, and you can enjoy this excellent taste at any time !</p>
            </div> <!-- fermeture introduction -->
            <div class="two_icons">
                <div class="two_icons-container">
                    <div class="icon1-container">
                        <img id="icon1" src="img/ingredients.png" alt="ingredients">
                        <p class="icon1text">ingredients</p>
                    </div><!-- fermeture icon1-container -->
                    <div class="icon2-container">
                        <img id="icon2" src="img/branches.png" alt="branches">
                        <p class="icon2text">branches</p>
                    </div> <!-- fermeture icon2-container -->
                </div> <!-- fermeture two_icons-container -->
            </div>  <!-- fermeture two-icons -->
        <div class="contact">
            <h2>contact us</h2>
            <div class="links">
                <a href="mailto:info@pizza.pizza.com">info@pizza.com</a><br>
                <a href="tel:+005555555">+00 555 55 55</a>
            </div> <!-- fermeture links-->
            <div class="social">
                <a href="https://www.instagram.com" target="_blank"><img src="img/insta.png" alt="instagram"></a>
                <a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png" alt="facebook"></a>
                <a href="https://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="twitter"></a>
            </div> <!-- fermeture social -->   
        </div> <!-- fermeture contact -->
        <a href="#home-ancre" class="back stf">back to top</a> <!-- cette div est utilisée come une ancre pour revenir en haut de la page -->
        </div> <!-- fermeture about -->
<?php include 'footer.php';?>