<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './popups/enquiry_pop.php';?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Association of Electrical Industries Indore</title>
  <meta name="language" content="English">
  <link rel="shortcut icon" href="img/title-icon.png"/>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/footer_css.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!-----------------------navbar start---------------------------------->
  <nav>
    <div class="nav-left">
      <img src="img/logo.png" class="logo" />
    </div>
    <div class="nav-mid">
      <div class="search-box">
        <form>
          <input type="text" name="" placeholder="Search a company..." />
          <input type="submit" name="" value="Search" id="Search" />
        </form>
      </div>
    </div>
    <div class="nav-right">
      <div class="nav-user-icon ">
        <a href="./login.php"><i class="fas fa-sign-in-alt"></i></a>
      </div>
      <div class="nav-user-icon"><img src="img/setting.png" /></div>
    </div>
  </nav>
  
  <!-----------------------navbar end---------------------------------->


  <div class="row">
      <div class="w-25 p-3" id="sidebar" >
        <div class="side-menu-container">
				<ul class="nav navbar-nav">
          <li><img src="img/vector-3@2x.svg">  Catagories</li>
					<li><img src="img/vector-10@2x.svg"><a  href="#"> Electrical <img src="img/vector-22@2x.svg"style="padding-left: 10px;">  </a></li>
					<li class="active"><a href="#"><img src="img/vector-5@2x.svg">Electronics <img src="img/vector-22@2x.svg" style="padding-left: 10px;"> </a></li>
					<li><a href="#"><img src="img/vector-14@2x.svg"> Mechanical <img src="img/vector-22@2x.svg" style="padding-left: 10px;"> </a></li>
          <li><a href="#"><img src="img/vector-10@2x.svg"> Others <img src="img/vector-22@2x.svg" style="padding-left: 10px;"> </a></li>

					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							<img src="img/vector-3@2x.svg">Companies
						  <span class="caret"></span>
            </a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav" id="company-list">
									<li><a href="#"><img src="img/image-14@2x.png" >Kan Universal</a></li>
									<li><a href="#"><img src="img/image-14@2x.png" >company</a></li>
									<li><a href="#"><img src="img/image-14@2x.png" >company</a></li>
									<li><a href="#"><img src="img/image-14@2x.png" >company</a></li>
									<li><a href="#"><img src="img/image-14@2x.png" >company</a></li>

									<!-- Dropdown level 2 -->
									<li class="panel panel-default" id="dropdown">
										<a data-toggle="collapse" href="#dropdown-lvl2">
											<i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					
				</ul>
			</div><!-- /.navbar-collapse --></div>
  <!-----------------------left sidebar start---------------------------------->
  
    <!-----------------------main content start---------------------------------->
    <div class="w-75 p-3" id="carousel" style="background-color: rgb(255, 255, 255); ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 80vh;">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/aeii_banner1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/aeii_banner2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/aeii_banner3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Cards start----------------------------------------------------- -->
         <div class="container">
           <div class="card1"> 
             <div class="content">
               <div><h3><strong>Electrical</strong><sapan>Product</sapan></h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, rem?</p>
               <a href="#">Discover now</a>
              </div>
              <div class="image">
                <img src="img/rectangle-11@2x.png" >
              </div>
             </div>
           </div>
           <div class="card2"> 
            <div class="content">
              <div><h3><strong>Electrical</strong><sapan>Product</sapan></h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, rem?</p>
              <a href="#">Discover now</a>
             </div>
             <div class="image">
               <img src="img/rectangle-11@2x.png" >
             </div>
            </div>
          </div>
         </div>
      <!-- Cards end----------------------------------------------------- -->
       <!-- Cards crousal starts----------------------------------------------------- -->
       
      <h2 class="title-heading" ><img src="img/line-7@2x.svg" >Companies</h2>
      <div class="card-crousal slider" >
        <div class="card">
          <div class="card-title">
           <img src="img/image-16@2x.png" ><h4>company name</h4>
          </div>
          <div class="card-content">
            <h4>Products </h4>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis optio voluptates ipsam dolores architecto, labore ad ullam quos doloremque.</P>
            

          </div><div class="card-cta"><a href="#">View more Products</a></div>

        </div>
        <div class="card">
          <div class="card-title">
           <img src="img/image-16@2x.png" ><a href="./company.html"><h4>company name</h4></a>
          </div>
          <div class="card-content">
            <h4>Products </h4>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis optio voluptates ipsam dolores architecto, labore ad ullam quos doloremque.</P>
            

          </div><div class="card-cta"><a href="#">View more Products</a></div>

        </div> <div class="card">
          <div class="card-title">
           <img src="img/image-16@2x.png" ><h4>company name</h4>
          </div>
          <div class="card-content">
            <h4>Products </h4>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis optio voluptates ipsam dolores architecto, labore ad ullam quos doloremque.</P>
           

          </div><div class="card-cta"><a href="#">View more Products</a></div>

        </div> <div class="card">
          <div class="card-title">
           <img src="img/image-16@2x.png" ><h4>company name</h4>
          </div>
          <div class="card-content">
            <h4>Products </h4>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis optio voluptates ipsam dolores architecto, labore ad ullam quos doloremque.</P>
           

          </div><div class="card-cta"><a href="#">View more Products</a></div>

        </div> <div class="card">
          <div class="card-title">
           <img src="img/image-16@2x.png" ><h4>company name</h4>
          </div>
          <div class="card-content">
            <h4>Products </h4>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis optio voluptates ipsam dolores architecto, labore ad ullam quos doloremque.</P>
            

          </div><div class="card-cta"><a href="#">View more Products</a></div>

        </div> <div class="card">
          <div class="card-title">
           <img src="img/image-16@2x.png" ><h4>company name</h4>
          </div>
          <div class="card-content">
            <h4>Products </h4>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facilis optio voluptates ipsam dolores architecto, labore ad ullam quos doloremque.</P>
          </div>
          <div class="card-cta"><a href="#">View more Products</a></div>
        </div>
      </div>
    
 <!-----------------------cards crousal end---------------------------------->
 <!-- events---------------------------------------------------------- -->
 <h2 class="title-heading"><img src="img/line-7@2x.svg" >Events</h2>
   <div class="event-section">
     <div class="event-text">
       <span>Where To</span>
       <h5>Plantation Drive</h5>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium saepe iure eum, necessitatibus delectus, voluptate minima rem consequuntur temporibus sit qui dolores, aspernatur accusamus ut.</p>
       <a href="#">Read more</a>

     </div>
      <div class="event-img">
        <img src="img/rectangle-22@2x.png">
      </div>
   </div>
 <!-- events end------------------------------------------------------ -->
    </div>
  </div>
</div>
<!-----------------------testimonails start---------------------------------->
   <div class="testimonial-section">
    <div class="test-img">
      <img src="img/rectangle-35@2x.png">
    </div>
     <div class="testimonial-text">
      <h2 class="title-heading"><img src="img/line-7@2x.svg" >Testimonials</h2>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium saepe iure eum, necessitatibus delectus, voluptate minima rem consequuntur temporibus sit qui dolores, aspernatur accusamus ut.</p>
       <h5>Shantanu saini</h5>
       <h6>Senior Manager ABC-ELctronics</h6>
       <div class="icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
     </div>    
   </div>

<!-----------------------testimonails end---------------------------------->
<!-----------------------footer start---------------------------------->

<footer>
  <section id="footer_section1">
  <div id="footer_top_div">
      <H1>Members</H1>
      <img src="img/dell-logoF.jpg" alt="" width="150px">
      <img src="img/attachment_64812874.png" alt="" width="150px">
      <img src="img/hp-logo.jpg" alt="" width="150px">
      <img src="img/images.png" alt="" width="150px">
  </div>
  </section>
  
  
  <section id="footer_section2">
  
  <div class="footer_bottom_div" id="footer_bottom_1">
      <img src="./img/AEII _Logo.png" alt=""  width="100px">
      <h2>Address</h2>
      <p>Electronics Complex,Indore,<br> Madhya Pradesh</p>
      <h2>Office hours</h2>
      <p>Monday-Saturday<br> 10:00 - 18:00</p>
  </div>
  
  <div class="footer_bottom_div" id="footer_bottom_2">
      <img src="./img/social_media_temp_icon.png" alt="" width="75%">
      
  </div>
  
  <div class="footer_bottom_div" id="footer_bottom_3">
      <h2>Get in touch</h2>
      <hr style="width:50px;text-align:left;margin-left:0;height: 2px;background-color:rgb(56, 56, 56);">
      <p><b>Customer Service:</b> 811 233 8899</p>
      <p><b>Phone:</b> 22 220 77564</p>
      <p><b>Service Center:</b> 811 233 8899</p>
  </div>
  </section>
  <div  id="footer_bottom_4"></div>
  
  </footer>
  <!-----------------------footer end---------------------------------->
   <!-----------------------scripts---------------------------------->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>$('.slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    Infinity:true,
    loop:true,
    autoplaySpeed: 2000,
  });</script>
</body>

</html>