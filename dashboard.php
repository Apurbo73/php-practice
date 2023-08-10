    <?php
    $user = "l_username";
    session_start();
    if(isset($_SESSION['l_username'])){
        //echo "<h1>Welcome ". $_SESSION['l_username'] . " to dashboard </h1>";
    }
    else{
        echo "<script>alert('dont access from URL!! Login First') </script>";
        echo "<script>location.href = 'login.php' </script>";
    }
    ?>
    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Dashboard</title>
    </head>
    <body>
    <nav>
            <label class="logo">Inventory Master</label>
            <ul>
                <li><a class="active" href="user-product.php">Products</a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i> <b><?php echo $_SESSION['l_username']?></b></a></li>
                <li><a href="logout.php" style="color:yellow;"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>
    </nav> -->





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />

        <title> Car Service</title>
    </head>

    <body>
        <p class="text-center p-style p-2">
            The most promising car service near you !!
        </p>
        <!-- navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-light nav-bg">
            <div class="container-fluid">
                <a style="font-weight: 800; font-size: 25px; color: #ca9236" class="navbar-brand" href="#"><span
                        style="color: #ca9236"></span> Car Service
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-product.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-product.php"> <b><?php echo $_SESSION['l_username']?></b></a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <!-- <li class="nav-item"><a class="active" href="user-product.php">Products</a></li>

                <li><a href="#"><i class="fa-solid fa-user"></i> <b><?php echo $_SESSION['l_username']?></b></a></li>
                <li><a href="logout.php" style="color:yellow;"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li> -->
                    </ul>
                    <form class="d-flex">
                        <input style="color: gray; font-weight: 600" class="form-control me-2" type="search"
                            placeholder="which do you need?" aria-label="Search" />
                        <button style="
                background-color: #ca9236;
                font-weight: 600;
                color: #f5f3eb;
              " class="btn" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- navbar ends -->

        <div style="background-color: #f5f3eb" class="d-flex p-3 secondNav">
            <div>
                <button class="btn">Home</button>
            </div>
            <div>
                <button class="btn">Shop</button>
            </div>
            <div>
                <button class="btn">Vendor</button>
            </div>
            <div>
                <button class="btn">Artists</button>
            </div>
            <div>
                <button class="btn">Blog</button>
            </div>
            <div>
                <button class="btn">Pages</button>
            </div>
        </div>

        <!-- introduction part -->
        <div class="introduction">
            <p style="font-size: 40px; font-weight: 700" class="text-center mt-5 text-light">

            </p>

            <div class="wrapper text-center p-3">
                <span> <span class="multiText text-warning "></span></span>
            </div>
            <br />
            <br /><br /><br />


            <form class="d-flex col-12 mx-auto mt-1 col-lg-4 col-md-4">
                <input class="form-control me-2" type="search" placeholder="Search for services" aria-label="Search" />
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
            <p style="font-size: 16px; color: rgb(245, 213, 149)" class="text-center mt-5">
                The most promising car service in Sylhet !!
            </p>
        </div>


        <!-- Shop By Collection -->

        <div class="mt-3 p-2">
            <p style="font-weight: 700; font-size: 22px; color: #4e423d">
                Shop By Collection
            </p>

            <div class="d-flex flex-wrap shop">
                <div class="col-lg-2 col-md-2 col-6 card p-2 cardDesign">
                    <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1024,h_800/w_63,x_11,y_11,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/by1e7ylfkih7m7eji4yf/HuaHinPrivateCarCharterfromPattayabyThaiRhythm.webp"
                        alt="" />
                    <p class="text-center">Private Car</p>
                    <button class="btn btn-dark">Buy service</button>

                </div>
                <div class="col-lg-2 col-md-2 col-6 card p-2 cardDesign">
                    <img src="https://nts-tokushima.com/en/assets/img/hired_car/photo_crown_royal_saloon.jpg" alt="" />
                    <p class="text-center">Weeding Car</p>
                    <button class="btn btn-dark">Buy service</button>

                </div>
                <div class="col-lg-2 col-md-2 col-6 card p-2 cardDesign">
                    <img src="https://wheelforcecentre.com/wp-content/uploads/2022/10/Where-I-can-find-best-luxury-car-repair-services.jpg"
                        alt="" />
                    <p class="text-center">Repairing</p>
                    <button class="btn btn-dark">Buy service</button>

                </div>
                <div class="col-lg-2 col-md-2 col-6 card p-2 cardDesign">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEDNpt7_Nms1QhiKYq3Xcb4_-kjvgYbmu0ir9eVNtCZaSKfB5N6Qmfky2rmsXg80pC_yw&usqp=CAU"
                        alt="" />
                    <p class="text-center">Rent Drive</p>
                    <button class="btn btn-dark">Buy service</button>

                </div>
                <div class="col-lg-2 col-md-2 col-6 card p-2 cardDesign">
                    <img src="https://edriver.com.bd/public/frontEnd/img/shape/Driving-School.png" alt="" />
                    <p class="text-center">Driving</p>
                    <button class="btn btn-dark">Buy service</button>

                </div>
                <div class="col-lg-2 col-md-2 col-6 card p-2 cardDesign">
                    <img src="https://image.made-in-china.com/202f0j00AHLYroTJbgbe/Rhd-Mobile-Ambulance-Car-Price.webp"
                        alt="" />
                    <p class="text-center">Ambulance Car</p>
                    <button class="btn btn-dark">Buy service</button>

                </div>

            </div>
        </div>

        <!-- shop by category -->
        <div class="p-2 mt-5">
            <p style="font-weight: 700; font-size: 22px; color: #4e423d">
                Shop By Collection
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4  ">

                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.bankrate.com/2018/11/29130006/How-to-buy-a-car-10-tips-and-tricks-to-get-the-best-deal.jpg"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Buy Cars</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.hertz.com/content/dam/hertz/global/blog-articles/resources/car-rental-vs-car-sharing/car-keys.jpg"
                            class=" img-design" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.summitmedia-digital.com/esquiremagph/images/2019/10/09/Driving-Tips-for-Beginners-MAINIMAGE.jpg"
                            class="card-img-top img-design" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <!-- discount banner -->
        <div class="d-none d-md-block p-2">
            <div class="d-flex banner p-3">
                <!-- <div class="col-md-2 col-lg-2 col-12 mt-5 ">
      <p>Clearance Sale</p>
      <p>In-store & Online</p>
    </div> -->
                <div class="col-md-8 col-lg-8 col-12 mt-5 m-4">
                    <div class="d-flex">
                        <img class="m-1"
                            src="https://images.ctfassets.net/2sam6k0rncvg/11IRWQwVANemnScnlaVAPy/75742251583767d13c15e0a81b9eb75c/how-to-drive-a-car.png"
                            alt="" />
                        <img class="m-1"
                            src="data:image/jpeg;base64,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"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-12 mt-5">
                    <p>30% Discount</p>
                    <p>In-store & Online</p>
                    <button style="
              background-color: aliceblue;
              border-radius: 10px;
              font-weight: 700;
            " class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <!-- exclusive -->
        <div class="p-2">
            <p class="mt-3" style="font-weight: 700; font-size: 22px; color: #4e423d">
                Exclusive Sell
            </p>
            <div class="d-flex flex-wrap exclusive">
                <div class="col-12 col-lg-3 col-md-3 image">
                    <img src="https://cdni.autocarindia.com/utils/imageresizer.ashx?n=https://cms.haymarketindia.net/model/uploads/modelimages/BMW-2-Series-Gran-Coupe-271220221147.jpg"
                        alt="" />
                    <div class="content p-4">
                        <h4 class="text-warning">BMW</h4>
                        <p>
                            Contact us for customized designs you want to make. Prices starts
                            from $10 per design
                        </p>
                        <button class="btn btn-warning">Contact us</button>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3 image">
                    <img src="https://www.supercars.net/blog/wp-content/uploads/2022/02/Ferrari-SF90-Stradale-1.jpg"
                        alt="" />
                    <div class="content p-4">
                        <h4 class="text-warning">FERRARI</h4>
                        <p>
                            Contact us for customized designs you want to make. Prices starts
                            from $10 per design
                        </p>
                        <button class="btn btn-warning">Contact us</button>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3 image">
                    <img src="data:image/jpeg;base64,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"
                        alt="" />
                    <div class="content p-4">
                        <h4 class="text-warning">LAMBORGHINI</h4>
                        <p>
                            Contact us for customized designs you want to make. Prices starts
                            from $10 per design
                        </p>
                        <button class="btn btn-warning">Contact us</button>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-3 image">
                    <img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/Tata/Nexon/9977/1683047876204/front-left-side-47.jpg"
                        alt="" />
                    <div class="content p-4">
                        <h4 class="text-warning">TATA</h4>
                        <p>
                            Contact us for customized designs you want to draw on your wall.
                            Prices starts from $50 per design
                        </p>
                        <button class="btn btn-warning">Contact us</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="mt-5 mb-5">
            <p style="font-weight: 700; font-size: 22px; color: #4e423d" class="text-center mt-5">
                Get the latest news, events & more delivered to your inbox
            </p>
            <form class="d-flex mx-auto w-25">
                <input style="color: gray; font-weight: 600" class="form-control me-2" type="search"
                    placeholder="Add Your E-Mail" aria-label="Search" />
                <button style="
        background-color: #ca9236;
        font-weight: 600;
        color: #f5f3eb;
      " class="btn" type="submit">
                    Add
                </button>
            </form>
        </div>
        <!-- footer -->
        <footer>
            <div class="mt-5 footerDesign">
                <div class="">
                    <p class="pt-2 text-center p-2">&copy; 2023 Car Service Sylhet</p>
                </div>

                <div class="p-5">
                    <div class="d-flex flex-wrap pb-3">
                        <div class="col-12 col-lg-2 col-md-2">
                            <h6 class="mb-4">Learn About Us</h6>
                            <p>Careerss</p>
                            <p>Blog</p>
                            <p>Investment</p>
                            <p>Plans</p>
                        </div>
                        <div class="col-12 col-lg-2 col-md-2">
                            <h6 class="mb-4">Make Money with Us</h6>
                            <p>Sell products</p>
                            <p>Become an Affiliate</p>
                            <p>Self-Publish with Us</p>
                            <p>See More</p>
                        </div>
                        <div class="col-12 col-lg-2 col-md-2">
                            <h6 class="mb-4">Payment Gateways</h6>
                            <p>Master Card</p>
                            <p>Bkash Payment</p>
                            <p>Rocket Payment</p>
                            <p>Nogod Payment</p>
                            <p>Payoneer Transfer</p>
                        </div>
                        <div class="col-12 col-lg-2 col-md-2">
                            <h6 class="mb-4">Let Us Help You</h6>
                            <p>Your Account</p>
                            <p>Your Orders</p>
                            <p>Replacements</p>
                            <p>Manage Content</p>
                            <p>Help</p>
                        </div>
                        <div class="col-12 col-lg-2 col-md-2">
                            <h6 class="mb-4">Support</h6>
                            <p>FAQ</p>
                            <p>How It Works</p>
                            <p>Replacements</p>

                            <p>Mobile : 01774573076</p>
                        </div>
                        <div class="col-12 col-lg-2 col-md-2">
                            <h6 class="mb-4">Policies</h6>
                            <p>Refund Policy</p>
                            <p>Payment Gateway</p>
                            <p>Terms & Conditions</p>
                            <p>Purchase & withdraw</p>
                            <p>Order Place</p>
                        </div>
                    </div>
                    <hr />
                    <p class="text-center">Developed By : Boby Rani Das</p>
                </div>
            </div>
        </footer>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
        var typingEffect = new Typed(".multiText", {
            strings: [
                "Car Repairing",
                "Car Washing",
                "Rental Service",
                "Driving Training",
                "Ambulance Service"
            ],
            loop: true,
            typeSpeed: 100,
            startDelay: 1000,
            backDelay: 1500,
            backSpeed: 80
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

    </html>
















    <!--     
    <div>
    <img src="image/afterNav.png" class="responsive">
    </div>
    <div>
      <div class="card-containers">
        <div class="card">
          <img class="img-style" src="image/inventory.png" alt="">
          <div class="card-body">
            <div class="card-title">
              Well Managed Stock
            </div>
            <div class="card-info">
              <p>Unlock the potential of well-managed inventory for your business.Experience streamlined operations, optimized stock levels, and improved customer satisfaction.
                Our comprehensive inventory management solutions enable you to minimize costs, maximize efficiency, and stay ahead of demand.
                Take control of your inventory and drive growth with confidence.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="img-style" src="image/safelyStored.png" alt="">
          <div class="card-body">
            <div class="card-title">
              Safely Stored 
            </div>
            <div class="card-info">
              <p>Ensured safety and security of inventory with our top-notch storage solutions.Our state-of-the-art facilities offer controlled environments,and strict inventory management protocols. 
                With us, your valuable assets are safeguarded against damage,theft,and deterioration,allowing you to focus on business growth with peace of mind.
                </p>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="img-style" src="image/centralRecord.png" alt="">
          <div class="card-body">
            <div class="card-title">
              Central Record
            </div>
            <div class="card-info">
              <p>Streamline your inventory management with our centralized record system.Gain real-time visibility into stock levels, locations, and movement across multiple locations.
                Our user-friendly interface allows you to efficiently track, analyze, and optimize inventory, reducing waste, and maximizing profitability.
                Experience the power of centralized control for your inventory today.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  <footer class="neon-background">
    <p>Connect on Social Media</p>

  <a href="https://www.facebook.com/ayon.shirsho"><i class="fa-brands fa-facebook fa-2xl" style="color: #201f51;"></i></a>
  <a href="https://www.linkedin.com/in/ayon-biswas-965974198/"><i class="fa-brands fa-linkedin fa-2xl" style="color: #201f51;"></i></a>
  <a href="https://twitter.com/AyonShirsho"><i class="fa-brands fa-twitter fa-2xl" style="color: #201f51;"></i></a>
  </footer>
    </body>
    </html> -->