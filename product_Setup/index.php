<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Setup</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <style>
      .button {
        background-color: #155DE9;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        font-family: 'Arial';
      }
    </style>
    <script type="text/javascript">
      window.onload = () => {
        CKEDITOR.replace("editor1");
      };

      function sendText() {
        window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
      }
    </script>
  
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/animation/css/animation.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/noui/nouislider.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
  <!--===============================================================================================-->
</head>
<body>
<form >
<section id="MainSection">
      <section id="Inner-Left">
<!----Image Gallery START---->           
            <div class="wrapper">
               
                <div class="image-gallery">
                 
                  <aside class="thumbnails">
                    <a href="#" class="selected thumbnail" data-big="./assets/image.webp">
                      <div class="thumbnail-image" style="background-image: url(./assets/image.webp)"></div>
                    </a>
                    <a href="#" class="thumbnail" data-big="./assets/image2.webp">
                      <div class="thumbnail-image" style="background-image: url(./assets/image2.webp)"></div>
                    </a>
                    <a href="#" class="thumbnail" data-big="./assets/image3.webp">
                      <div class="thumbnail-image" style="background-image: url(./assets/image3.webp)"></div>
                    </a>
                    <a href="#" class="thumbnail" data-big="./assets/image4.png">
                      <div class="thumbnail-image" style="background-image: url(./assets/image4.png)"></div>
                    </a>
                  </aside>
               
                  <main class="primary" style="background-image: url(./assets/image4.png);"></main>
                </div>

              </div>
<!----Image Gallery END---->
<div id="inner-left-bottom" class="inner-left-bottomc"> 
	<div id="upl-vid">
		
		<img src="./assets/yt.png" alt="" style="width:25px;">
		<h3>Add Video</h3>
	</div>
	
	<div id="upl-pdf">
		<img src="./assets/pdf.png" alt="" style="width:25px;" >
		<h3>Add Datasheet</h3>
	</div>
  
</div>
</section>

<section id="Inner-Right">
     
	<div class="container-contact">
		<div class="wrap-contact">

	<div class="form validate-form">
				<div class="wrap-input bg1" >
					<span class="label-input">Product Name *</span>
					<input class="input" type="text" name="name" >
				</div>

				<div class="wrap-input bg1 rs1-wrap-input">
					<span class="label-input">Price *</span>
					<input class="input" type="text" name="Price" >
				</div>

				<div class="wrap-input bg1 rs1-wrap-input">
					<span class="label-input">Additional Offer</span>
					<input class="input" type="text" name="phone" >
					<input class="input" type="text" name="phone" >
				</div>

				<div class="wrap-input input-select bg1">
					<span class="label-input">Type of Product *</span>
					<div>
						<select class="js-select2" name="service" onchange="yesnoCheck(this);">
							<option>Please choose</option>
							<option value="Electronics">Electronics</option>
							<option value="Electrical">Electrical</option>
							<option value="Mechanical">Mechanical</option>
							<option value="Others">Others</option>
							
						</select>
						<div class="dropDownSelect2"></div>
						<div id="service-others" style="display: none;">
							<label for="service">Please enter service names</label> <input type="text" id="other-service" name="service" /><br />
						</div>
					</div>
				</div>

					<div class="wrap-form-radio">
						<span class="label-input">What type of products do you sell?</span>

						<div class="form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Phycical Products
							</label>
						</div>

						<div class="form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								Digital Products
							</label>
						</div>

						<div class="form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								Consulting Services 
							</label>
						</div>
					</div>

					<div class="wrap-form-range">
						<span class="label-input">Minimum and Maximum Order Value *</span>

						<div class="form-range-value">
							<span id="value-lower">25</span> - <span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div>      
        </div>
	</div>
</div>
	
        
</section>

</section>
<div class="ProductDescription">
	<label class="label-input" for="radio2" default = "Default Custom Field Value!">
	 Product Desciption
	</label>
	
	<textarea name="editor1" ></textarea>
</div>

<div id="submit-button">
      <button type="submit">SAVE & CONTINUE </button>  
</div>
</form>
</body>

<!--===============================================================================================-->
	<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/animation/js/animation.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/bootstrap/js/popper.js"></script>
	<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="./vendor/daterangepicker/moment.min.js"></script>
	<script src="./vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 10, 500 ],
	        connect: true,
	        range: {
	            'min': 10,
	            'max': 2500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
    $(".thumbnail").on("click", function () {
      var clicked = $(this);
      var newSelection = clicked.data("big");
      var $img = $(".primary").css("background-image", "url(" + newSelection + ")");
      clicked.parent().find(".thumbnail").removeClass("selected");
      clicked.addClass("selected");
      $(".primary").empty().append($img.hide().fadeIn("slow"));
    });
    </script>
	<script>
	function yesnoCheck(that) {
		if (that.value == "Others") {

			document.getElementById("service-others").style.display = "block";
		} else {
			document.getElementById("service-others").style.display = "none";
		}
	}
</script>
</html>