<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Website</title>
	<link rel="stylesheet" type="text/css" href="styledetail.css">
    <script type="text/javascript">
		function test(message) {
			// body...
			alert(message);
		}
	</script>
</head>
<body>
	<div id="Main">
		<div class="container">
			<div class="container-top">
				<div class="top-menu">
					<a href="#">Sign in</a>
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
       
        <nav class="#" style="padding:12px 0;"><h2>Deails Review</h2></nav>
            <div class="detail-block">
                <div class="image"><img src="image/864163.jpg"></div>
                <div class="description">
                    <h2>ធ្នើរ 864163</h2>
                    <p style="color:lightgray;">ធ្នើរ 864163</p>
                    <hr>
                    <form name="mainForm">
                    <table>
                        <tr>
                            <td class="tbl-left">NO: </td>
                            <td class="tbl-right">6510864163</td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Quantity:  </td>
                            <td class="tbl-right">10 Pcs</td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Release date: </td>
                            <td class="tbl-right">2018-May-37</td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Weigth: </td>
                            <td class="tbl-right">1.150Kilogram</td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Market Price: </td>
                            <td class="tbl-right"><del>$14.40</del></td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Shop price: </td>
                            <td class="tbl-right">
                                <span>$11.5</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Sales volume： </td>
                            <td class="tbl-right">Recently sold 0 pieces</td>
                        </tr>
                        <tr>
                            <td class="tbl-left">Review：</td>
                            <td class="tbl-right">0 Customer reviews</td>
                        </tr> 
                    </table>
                </form>
                </div>
                <div class="sporn"></div>
            </div>
            <br>
            <br>
            <br>
            <br>
       
	</div>
    
    
</body>
</html>