<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&family=Prompt:wght@600&display=swap" rel="stylesheet">
    
</head>
<body>
<header id="Shoe_World">
        <a href="#landing_page" class="shoe_logo">
            <img src="Shoe_Logo.png" alt="Shoe_World">
        </a>
        <i class='bx bx-menu' id="hamburg_icon"></i>

        <ul class="navbar">
            <li><a href="#landing_page">Home</a></li>
            <li><a href="#products">Articles</a></li>
            <li><a href="#about-page">Our Company</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>

        <div class="header_icon">
            <a href="mycart.php">My Cart<i class='bx bxs-cart'></i></a>
        </div>
    </header>

    <section class="home" id="landing_page">
        <div class="home_page_text">
            <h1>The journey begins with perfect pair</h1>
            <p>Shoe World is an online shop that offers a wide range of footwear for men,women.From casual sneakers to 
                formal shoes,sports footwear,Shoe World caters to various and occasions.
            </p>
            <a href="#products" class="button">More Articles</a>
        </div>

        <div class="home_image">
            <img src="shoe.png" alt="">
        </div>
    </section>

    <section class="products" id="products">
        <div class="heading">
            <h2>Our Articles</h2>
        </div>

        <div class="products-container">
            <div class="box">
                <form action="manage_cart.php" method="POST">
                    <img src="shoe-1.jpg" alt="">
                    <center><h3>Shoes-1</h3></center>
                    <center><div class="content">
                        <span>Rs-3500</span>
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="item_name" value="Shoes-1">
                        <input type="hidden" name="price" value="3500">
                    </div></center>
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="POST">
                    <img src="shoe-2.jpg" alt="">
                    <center><h3>Shoes-2</h3></center>
                    <center><div class="content">
                        <span>Rs-1500</span>
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="item_name" value="Shoes-2">
                        <input type="hidden" name="price" value="1500">
                    </div><center>
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="POST">
                    <img src="shoe-3.jpg" alt="">
                    <center><h3>Shoes-3</h3></center>
                    <center><div class="content">
                        <span>Rs-2500</span>
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="item_name" value="Shoes-3">
                        <input type="hidden" name="price" value="2500">
                </div></center>
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="POST">
                    <img src="shoe-4.jpg" alt="">
                    <center><h3>Shoes-4</h3><center>
                    <center><div class="content">
                        <span>Rs-2000</span>
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="item_name" value="Shoes-4">
                        <input type="hidden" name="price" value="2000">
                    </div></center>
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="POST">
                    <img src="shoe-5.jpg" alt="">
                    <center><h3>Shoes-5</h3></center>
                    <center><div class="content">
                        <span>Rs-1699</span>
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="item_name" value="Shoes-5">
                        <input type="hidden" name="price" value="1699">
                    </div></center>
                </form>    
            </div>
            <div class="box">
                <form action="manage_cart.php" method="POST">
                    <img src="shoe-6.jpg" alt="">
                    <center><h3>Shoes-6</h3></center>
                    <center><div class="content">
                        <span>Rs-2000</span>
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="item_name" value="Shoes-6">
                        <input type="hidden" name="price" value="2000">
                    </div></center>
                </form> 
            </div>
            
        </div>
    </section>

    <section class="about-page" id="about-page">
        <div class="about-img">
            <img src="about-img.jpg" alt="">
        </div>

        <div class="about-text">
            <h2>Shoe World!</h2>
            <p class="paragraph">
            Shoe World is an online shop dedicated to providing high-quality footwear for men, women, and children. We offer a wide range of stylish and comfortable shoes, including sneakers, boots, sandals, formal shoes, and more. Our collection is curated to cater to different styles, occasions, and preferences, ensuring that our customers can find the perfect pair for every need.
            At Shoe World, we prioritize customer satisfaction and aim to provide an excellent shopping experience. Our website is user-friendly, with easy navigation and secure payment options, making it convenient for customers to browse and purchase their favorite shoes.
            We also believe in sustainability and ethical practices. We source our materials responsibly and work with manufacturers who prioritize eco-friendly production methods. This allows us to offer not only fashionable footwear but also products that align with our commitment to environmental responsibility.
            Whether you're looking for trendy sneakers, elegant heels, durable boots, or comfortable everyday shoes, Shoe World has something for everyone. Experience the joy of shopping for quality footwear with us today!
            </p>
            <a href="" class="button">Learn More</a>
        </div>
    </section>

    <section class="footer">
        <div class="footer-box">
            <h2>SHOE WORLD</h2>
            <p>Shoe World is an online shop that offers a wide range of footwear for men,women.From casual sneakers to 
                formal shoes,sports footwear,Shoe World caters to various and occasions.</p>
            <div class="social">
                <i class='bx bxl-facebook'></i>
                <i class='bx bxl-twitter' ></i>
                <i class='bx bxl-instagram' ></i>
                <i class='bx bxl-youtube' ></i>
            </div>
        </div>
        <div class="footer-box">
            <h2>Support</h2>
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Return Of Policy</a></li>
        </div>
        <div class="footer-box">
            <h2>Our Company</h2>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Warranty Policy</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>

        <div class="footer-box">
            <h2>Contact-Us</h2>
            <div class="contact">
                <span><i class='bx bxs-map'></i>Pune,Maharashtra</span>
                <span><i class='bx bxs-phone'></i>707070707070</span>
                <span><i class='bx bxl-gmail' ></i>shoeworld10@gmail.com</span>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; ShoeWorld All Right Reserved </p>
    </div>

    <script type="text/Javascript">
    let navbar =document.querySelector('.navbar');
    document.querySelector('#hamburg_icon').onclick=()=>{
        navbar.classList.toggle('active');
    }
    window.onscroll=()=>{
        navbar.classlist.remove('active');
    }
    </script>
</body>
</html>