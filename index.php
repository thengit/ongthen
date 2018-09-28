<html>
    <head>
        <title>My website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Affordable and professional web design">
        <meta name="keywords" content="web design, affordable web design, professional web design">
        <meta name="author" content="Brad Traversy">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/customstyle.css">
        <script src="js/bootstrap.min.js"></script>
		    <script src="js/jquery.min.js"></script>
        
    </head>
    <body>
        <div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

            <div class="row">
                <div class="col-md-2 bg-success"><h1>Dynamic</h1></div>
                <div class="col-md-10" style="heigt:auto; background-color: #006699;">
                    <div class="top">
                        <div class="link-top">
                            <img src="image/login_to_your_account.png">
                            <a href="login.php">Login</a>
                            <a href="#">Register</a>
                            <a href="#">How to used</a>
                            <a href="#">Language</a>
                        </div>
                        <div class="ddd">
                            <input class="form-control" style="width:210px;" type="text" name="" placeholder="What are you looking for...">
                            <input class="form-control" type="text" name="" placeholder="type of Categories">
                            <input class="form-control" type="text" name="" placeholder="Place you looking for...">
                            <button class="btn btn-danger">POST FREE AD</button>
                        </div>
                    </div>
                </div>
            </div>

        
        <hr>
            <script>
                var i = 0;
                var images = [];
                var time = 3000;


                // Images list

                images[0] = 'image/slide1.jpg';
                images[1] = 'image/slide2.jpg';
                images[2] = 'image/slide3.jpg';
                images[3] = 'image/slide4.jpg';
                images[4] = 'image/slide5.jpg';
                //Change Image
                function ChangeImg() {
                    document.slider.src = images[i];
                    if (i < images.length - 1) {
                        i++;
                    }
                    else {
                        i = 0;
                    }
                    setTimeout("ChangeImg()", time);
                }
                window.onload = ChangeImg;
            </script>
            <div class="slider">
                <img name="slider" width="100%" />
            </div>

        <hr>
     <!-- List buttom -->
		<div class="row" style="position: sticky; top: 0; z-index:1; height:40px; line-height:40px; background-color: #006699;">
			<a class="drowp" href="#">Home</a>
			<a class="drowp" href="#">Content</a>
			<a class="drowp" href="#">Products</a>
			<a class="drowp" href="#">Contact Us</a>
			<a class="drowp" href="#">About Me</a>
		</div>

		<!-- List Buttom End-->
   
  <h2>Image Gallery</h2>
  <div class="row box-shadow">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class=" box-shadow">
        <a href="image/lights.jpg" target="_blank">
          <img src="image/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/nature.jpg" target="_blank">
          <img src="image/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/fjords.jpg" target="_blank">
          <img src="image/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/fjords.jpg" target="_blank">
          <img src="image/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <hr>          
  
  <div class="row box-shadow">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/lights.jpg" target="_blank">
          <img src="image/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/nature.jpg" target="_blank">
          <img src="image/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/fjords.jpg" target="_blank">
          <img src="image/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="box-shadow">
        <a href="image/fjords.jpg" target="_blank">
          <img src="image/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p class="caption">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
<hr>
		<div class="row table-responsive">
        <table class="table table-striped table-hover">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>1</td>
                <td>D001</td>
                <td>Ong Then</td>
                <td><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">ongthen68@gmail.com</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>D002</td>
                <td>Chhouen Chanthon</td>
                <td><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">chanthon68@gmail.com</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>D003</td>
                <td>Chan Chinoch</td>
                <td><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">chanchinoch68@gamil.com</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>D004</td>
                <td>Hang Theany</td>
                <td><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">hangtheany68@gmail.com</a></td>
            </tr>
        </table>
		</div>

        <div class="row"> 
            <img class="col-sm-12" src="image/footer.png">
        </div> 
	</div>
		<!-- start-->

	<div class="row" style="background-color:#006699;color:white; margin-top:-30px;">
        <div class="col-md-3" style="text-align:center;">
            <img style="width:50%;" src="image/Logo_school_NIB.png">
            <p style="padding-left:10px;">វិទ្យាស្ថានជាតិពាណិជ្ជសាស្ត្រ<br>National Intistute Of Business</p>
        </div>
        <div class="col-md-4" style="margin-top:50px;">
            <p class="caption">ទំនាក់ទំនងលេខទូរស័ព្វ: 069 690 428 | 097 35 97 350<br>
                E-mail: ongthen68@gmail.com<br>
                រៀបចំដោយនិស្សិតពត៌មានវិទ្យា Assignment.
            </p>
        </div>
        <div class="col-md-5" style="margin-top:50px;">
            <form style="border-radius: 8px;">
                <input class="btn btn-md" type="text" name="Search" placeholder="Search">
                <input class="btn btn-md btn-primary" type="submit" name="submit" value="Search">
            </form>
        </div>
    </div>

<!-- The end -->   
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-alt-up" style="color"></i></button>
    </body>
</html>