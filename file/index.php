
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
	<div class="container">
		<div class="container-topbar">
			<div class="container-top">
				<div class="top-menu">
					<a href="Loginthon.php">Sign in</a>
					<span style="padding: 0 5px; color: gray;">|</span>
					<a href="register.php">Register</a>
					<a href="#">Favorite</a>
				</div>
			</div>
		</div>

		<!-- Menu List Option and search button-->
		
		<nav class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Event</a></li>
				<li><a href="#">Feedback</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Cantact</a></li>
			</ul>
			<form class="search-form">
				<input type="text" name="" placeholder="Search">
				<button>Search</button>
			</form>
		</nav>

	<!-- Slide option-->
		<script>
        var i = 0;
        var images = [];
        var time = 3000;


        // Images list

        images[0] = 'image/2.png';
        images[1] = 'image/1.jpg';
        images[2] = 'image/4.png';
        images[3] = 'image/3.jpg';
        images[4] = 'image/6.png';
        images[5] = 'image/5.jpg';
        images[6] = 'image/8.png';
        images[7] = 'image/7.jpg';
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
    <div class="Slide" style="margin-top: 5px;">
        <img name="slider" width="1300px" height="200px" />
    </div>
<!--
        <form>
        <input type="color" name="color">
            <input type="submit">
        
        </form>
-->

        <div class="categories">
            
            <div class="cat-1">
                <div class="pic"><a href="Details.php" target="_blank"><img src="image/864163.jpg" ></a></div>
                <div class="pro-name"><a href="Details.php">ធ្នើរ 864163</a></div>
                <p>$11.50 <del>14.50</del></p>
                <a class="btnbuy" href="#">Buy Now</a>
            </div> 
            <div class="cat-1">
                <div class="pic"><a href="Details.php" target="_blank"><img src="image/864163.jpg" ></a></div>
                <div class="pro-name"><a href="Details.php">ធ្នើរ 864163</a></div>
                <p>$11.50 <del>14.50</del></p>
                <a class="btnbuy" href="#">Buy Now</a>
            </div> 
            <div class="cat-1">
                <div class="pic"><a href="Details.php" target="_blank"><img src="image/864163.jpg" ></a></div>
                <div class="pro-name"><a href="Details.php">ធ្នើរ 864163</a></div>
                <p>$11.50 <del>14.50</del></p>
                <a class="btnbuy" href="#">Buy Now</a>
            </div> 
            <div class="cat-1">
                <div class="pic"><a href="Details.php" target="_blank"><img src="image/864163.jpg" ></a></div>
                <div class="pro-name"><a href="Details.php">ធ្នើរ 864163</a></div>
                <p>$11.50 <del>14.50</del></p>
                <a class="btnbuy" href="#">Buy Now</a>
            </div> 
            
        </div>
        <br>
        
        <?php
             $number='1240';
             echo base_convert ( $number , 10 , 8 );
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

	</div>
</body>
</html>