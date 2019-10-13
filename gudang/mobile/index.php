
<!DOCTYPE html> 
<html><head> 
	<title>Inventaris Gudang</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="description" content="Woody is a clean theme for mobile devices.">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" href="css/default.min.css" />
    <link rel="stylesheet" href="css/woody.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/photoswipe.css" type="text/css" rel="stylesheet" />    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700' rel='stylesheet' type='text/css'>
	<!--<link rel="stylesheet"  href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" /> -->
	
	<!-- JavaScripts -->
 	<script type="text/javascript" src="js/klass.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.js"></script>
	<script src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.4.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/misc.js"></script>

</head>

<body> 
<div data-role="page" id="logindulu" data-title="Login - Inventaris">

    <!-- Header -->
    <div data-role="header" class="header">
       <h4>Login - Inventaris</h4>
    </div><!-- END OF: Header -->

	<!-- Logo -->	
	<div class="logo">
        <img src="images/inventaris.png"  alt="Woody">
    </div><!--END OF: Logo -->
	
    <!-- Wrapper -->
    <div class="wrapper">
		          
        <!-- Content -->
        <div data-role="content" class="content">
			  <div class="form-group">
				<label for="user">Username:</label>
				<input type="text" class="form-control" id="user">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" >
			  </div>
		  	  <div class="checkbox">
				<label for="cb-ingat">Remember me</label>
				<input name="cb-ingat" id="cb-ingat"type="checkbox">
			  </div>
			  <button onclick="location.href='#homepage'" type="button" class="btn btn-default">Login</button>
			 
		</div><!-- END OF: Content -->
        
               
    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: LOGIN first -->


<!-- HOMEPAGE -->
<div data-role="page" id="homepage" data-title="Homepage">

<!-- Wrapper -->
<div class="wrapper">
    <!-- Logo -->	
	<div class="logo">
        <img src="images/inventaris.png"  alt="Woody">
    </div><!--END OF: Logo -->
    
    <!-- Slider Container-->
    <div class="slider_container">
		
        <!-- Prev/Next Buttons-->
        <div id="nav">
            <a id="prev" href="#"><img src="images/arrow_up.png" alt="Previous"></a> 
            <a id="next" href="#"><img src="images/arrow_down.png" alt="Next"></a>
        </div><!--END OF: Prev/Next Buttons -->
        
        <!-- Slider-->
        <div class="slider">
            <img src="images/slide_item1.jpg" />
            <img src="images/slide_item2.jpg" />
            <img src="images/slide_item3.jpg" />
            <img src="images/slide_item4.jpg" />
        </div><!--END OF: Slider -->
        
	</div><!--END OF: Slider Container -->
	
	
    <!-- Menu-->
	<div data-role="collapsible-set">
    <ul data-role="listview" data-inset="true" class="menu" data-shadow="false">
        <li data-role="collapsible" data-inset="true">
		  <h2>Master Data</h2>
			<ul data-role="listview" data-theme="b">
			  <li><a href="flihat-data-barang.php" data-transition="flip">Data Barang</a></li>
			  <li><a href="finput-data-barang.php" data-transition="flip">Input Barang</a></li>
			  <li><a href="finput-data-user.php" data-transition="flip">Input User</a></li>
			</ul>
		</li>  
		<li data-role="collapsible" data-iconpos="right" data-inset="false">
		  <h2>Transaksi</h2>
			<ul data-role="listview" data-theme="b">
			  <li><a href="flihat-barang-masuk.php" data-transition="flip">Barang Masuk</a></li>
			  <li><a href="flihat-barang-keluar.php" data-transition="flip">Barang Keluar</a></li>
			</ul>
		</li>  
		<li data-role="collapsible" data-iconpos="right" data-inset="false">
		  <h2>Laporan</h2>
			<ul data-role="listview" data-theme="b">
			  <li><a href="flap-barang-masuk.php" data-transition="flip">Lap Masuk Barang</a></li>
			  <li><a href="flap-barang-keluar.php" data-transition="flip">Lap Keluar Barang</a></li>
			</ul>
		</li>
		<li data-role="collapsible" data-iconpos="right" data-inset="false">		  
		  <h2>Profil</h2></a>			
			<ul data-role="listview" data-theme="b">
			  <li><a href="finput-data-user.php" data-transition="flip">Ubah Profil</a></li>
			  <li><a href="#logindulu" data-transition="fade">Logout</a><li>
		    </ul>
		</li><!-- <img src="images/about.png" class="ui-li-icon">
		<li><a href="#" data-transition="flip"><img src="images/contact.png" alt="Contact" class="ui-li-icon">COBA</a></li>
		<li><a href="#" data-transition="flip"><img src="images/contact.png" alt="Contact" class="ui-li-icon">Contact</a></li>
		<li><a href="#contact" data-transition="flip"><img src="images/contact.png" alt="Contact" class="ui-li-icon">Contact</a></li>-->
    </ul>
	</div><!--END OF: Menu -->
    
    <!-- Search-->
    <div data-role="fieldcontain" class="search-form">
        <input type="search"  class="search-form" name="search" placeholder="Search the site" value="" />
	</div><!--END OF: Search -->
    
    <!-- Social Media-->
    <div class="social-media">
        <a class="twitter" href="#"><img src="images/twitter.png" /></a>
        <a class="facebook" href="#"><img src="images/facebook.png" /></a>
        <a class="rss" href="#"><img src="images/rss.png" /></a>
    </div><!--END OF: Social Media -->

    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: Homepage -->

<!-- ABOUT -->
<div data-role="page" id="about" data-title="About">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> 
       <h4>About us</h4>
    </div><!-- END OF: Header -->


    <!-- Wrapper -->
    <div class="wrapper">
    
        <!-- Slider-->
        <div class="slider" style="margin-bottom: 25px;">
            <img src="images/about.jpg" />
        </div><!--END OF: Slider -->
    
        <!-- Content -->
        <div data-role="content" class="content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div><!-- END OF: Content -->
        
    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: About -->


<!-- BLOG -->
<div data-role="page" id="blog" data-title="Blog">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> 
       <h4>Blog</h4>
    </div><!-- END OF: Header -->


    <!-- Wrapper -->
    <div class="wrapper">
    
        <!--Posts -->
        <ul data-role="listview" data-inset="true">
            <!-- Post -->
            <li>
                <a href="#post">
                    <img src="images/thumb/001.jpg" />
                    <h3>First Post</h3>
                    <p>Sample short description</p>
                </a>
            </li><!-- END OF: Post -->
        
            <!-- Post -->
            <li>
                <a href="#post">
                    <img src="images/thumb/002.jpg" />
                    <h3>Second Post</h3>
                    <p>Here is a description</p>
                </a>
            </li><!-- END OF: Post -->
        
            <!-- Post -->
            <li>
                <a href="#post">
                    <img src="images/thumb/003.jpg" />
                    <h3>Third Post</h3>
                    <p>Made of wood textures</p>
                </a>
            </li><!-- END OF: Post -->
        
            <!-- Post -->
            <li>
                <a href="#post">
                    <img src="images/thumb/004.jpg" />
                    <h3>Fourth Post</h3>
                    <p>Woody mobile template</p>
                </a>
            </li><!-- END OF: Post -->
            <!-- Post -->
            <li>
                <a href="#post">
                    <img src="images/thumb/005.jpg" />
                    <h3>Last Post</h3>
                    <p>Here goes some description</p>
                </a>
            </li><!-- END OF: Post -->
        </ul><!-- END OF: Posts -->
    
        <fieldset class="ui-grid-a">
            <div class="ui-block-a"><a href="#" data-role="button">&laquo; Newer</a></div>
            <div class="ui-block-b"><a href="#" data-role="button">Older &raquo; </a></div>	   
        </fieldset>
    
    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: Blog -->


<!-- Post -->
<div data-role="page" id="post" data-title="Blog Post">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> <h4>Blog Post</h4>
    </div><!-- END OF: Header -->
    
    <div class="wrapper">
        <!-- Content -->
        <div data-role="content" class="content">
        <h2>Welcome to Woody blog!</h2>

				<p><em>Posted 24th January 2012 by Art</em></p>	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br /><br />
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
				nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
				reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
				pariatur. </p>
        </div><!-- END OF: Header -->
				
				<div data-role="collapsible" data-content-theme="a" data-theme="a" id="comment-form-collapsible">
					<h3>Leave Comment</h3>
					<div id="comment-form-wrapper">

						<form action="#" method="post" id="comment-form">
							<div data-role="fieldcontain" class="ui-hide-label no-field-separator">
								<label for="name">Name (required)</label>
							    <input type="text" id="name" name="name" placeholder="Name (required)" class="required" />
							</div>
							<div data-role="fieldcontain" class="ui-hide-label no-field-separator">	
								<label for="email">Email (optional)</label>
							    <input type="email" id="email" name="email" placeholder="Email (optional)" class="email"/>

							</div>
							<div data-role="fieldcontain" class="ui-hide-label no-field-separator">	
								<label for="comment">Comment (required)</label>
								<textarea name="textarea" id="comment" placeholder="Leave your comment here" class="required"></textarea>
							</div>
								<button type="submit" id="submit">Submit Comment</button>
						</form>
					</div>

					<div id="comment-form-success"></div>
				</div>	
				<div data-role="collapsible" data-content-theme="a" data-theme="a">
				   <h3>View Comments</h3>
				   		<ul style="list-style: none;">
					   	 	<li>
									<h3>Art Ramadani</h3>

						   	 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
						   	 		<span class="blog-comment-date">15.35pm 24th Jan 2012</span>
						  	  		<a href="#">Reply &rarr;</a>
					   	 	</li>
							
							<hr/>
							
					   	 	<li>
									<h3>Arlind Nushi</h3>
						   	 		<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
						   	 		<span class="blog-comment-date">15.35pm 24th Jan 2012</span>
						  	  		<a href="#">Reply &rarr;</a>
					   	 	</li>
														
						</ul>
				</div>
    </div>
    
</div><!-- END OF: Post -->

<!-- Portfolio -->
<div data-role="page" id="portfolio" data-title="Portfolio">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> <h4>Portfolio</h4>
    </div><!-- END OF: Header -->

	<!-- Portfolio -->
	<ul id="gallery" class="gallery">
		<li><a rel="external" href="images/full/001.jpg"><img src="images/thumb/001.jpg" alt="Image 001" /></a></li>
		<li><a rel="external" href="images/full/002.jpg"><img src="images/thumb/002.jpg" alt="Image 002" /></a></li>
		<li><a rel="external" href="images/full/003.jpg"><img src="images/thumb/003.jpg" alt="Image 003" /></a></li>
		<li><a rel="external" href="images/full/004.jpg"><img src="images/thumb/004.jpg" alt="Image 004" /></a></li>
		<li><a rel="external" href="images/full/005.jpg"><img src="images/thumb/005.jpg" alt="Image 005" /></a></li>
		<li><a rel="external" href="images/full/006.jpg"><img src="images/thumb/006.jpg" alt="Image 006" /></a></li>
		<li><a rel="external" href="images/full/007.jpg"><img src="images/thumb/007.jpg" alt="Image 007" /></a></li>
		<li><a rel="external" href="images/full/008.jpg"><img src="images/thumb/008.jpg" alt="Image 008" /></a></li>
		<li><a rel="external" href="images/full/009.jpg"><img src="images/thumb/009.jpg" alt="Image 009" /></a></li>
		<li><a rel="external" href="images/full/010.jpg"><img src="images/thumb/010.jpg" alt="Image 010" /></a></li>
		<li><a rel="external" href="images/full/011.jpg"><img src="images/thumb/011.jpg" alt="Image 011" /></a></li>
		<li><a rel="external" href="images/full/012.jpg"><img src="images/thumb/012.jpg" alt="Image 012" /></a></li>
		<li><a rel="external" href="images/full/013.jpg"><img src="images/thumb/013.jpg" alt="Image 013" /></a></li>
		<li><a rel="external" href="images/full/014.jpg"><img src="images/thumb/014.jpg" alt="Image 014" /></a></li>
		<li><a rel="external" href="images/full/015.jpg"><img src="images/thumb/015.jpg" alt="Image 015" /></a></li>
		<li><a rel="external" href="images/full/016.jpg"><img src="images/thumb/016.jpg" alt="Image 016" /></a></li>
		<li><a rel="external" href="images/full/017.jpg"><img src="images/thumb/017.jpg" alt="Image 017" /></a></li>
		<li><a rel="external" href="images/full/018.jpg"><img src="images/thumb/018.jpg" alt="Image 018" /></a></li>
	</ul><!-- END OF: Portfolio -->



    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: Portfolio -->

<!-- Contact -->
<div data-role="page" id="contact" data-title="Contact">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> <h4>Contact</h4>
    </div><!-- END OF: Header -->

	<!--Wrapper -->
	<div class="wrapper">
  
        <!-- Map -->
        <div class="map_container" style="margin-bottom: 25px;">
            <div id="the_map"></div>
        </div><!--END OF: Map -->
  
  		<!-- Address and Phone -->
        <ul data-role="listview" data-theme="a" data-inset="true">
            <li><img src="images/pin.png" alt="Location" class="ui-li-icon">Galaxy avenue, New York, U.S</li>
            <li><img src="images/phone.png" alt="Phone" class="ui-li-icon">+1 23 4567-256</li>
        </ul>  <!-- END OF: Address and Phone -->
        
        <div data-role="content" class="content" data-theme="a" style="margin-top:25px">
			<form>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value=""  />
                
                <br />
                
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value=""  />
                
                <br />
                
                <label for="textarea">Email:</label>
                <textarea name="textarea" id="textarea"></textarea>
                
                <br />
                
               <label for="state" class="select">From:</label>
               <select name="state" id="state">
                  <option value="africa">Africa</option>
                  <option value="americas">Americas</option>
                  <option value="asia">Asia</option>
                  <option value="australia">Australia</option>
                  <option value="europe">Europe</option>
               </select>
                
                <br />
                
                <a href="#thankyou" data-rel="dialog" data-transition="pop" data-role="button" data-inline="true" data-theme="b">Send</a>           
                <a href="#" data-role="button" data-inline="true">Reset</a>
                
			</form>  
        </div> 		
  
    </div><!-- END OF: Wrapper -->

    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: Contact -->

<!-- Thank You Message -->
<div data-role="page" id="thankyou" data-title="Thank You">

    <!-- Header -->
    <div data-role="header" class="header">
       <h4>Thank You</h4>
    </div><!-- END OF: Header -->
    
    <!-- Content -->
    <div data-role="content" class="dialog">
       Thank you for contacting us, we will reply as soon as possible.
    </div><!-- END OF: Content -->
   

</div><!-- END OF: Thank You Message -->

</body>
</html>