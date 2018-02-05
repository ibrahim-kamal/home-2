<?php
	$I 		=["PRINT DESIGN","WEB DESIGN","APP DESIGN","LOGO DESIGN"];
	$II 	=[
			"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
			"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
			"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
			"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			];
	$III 	=["fa fa-fax fa-3x","fa fa-desktop fa-3x","fa fa-mobile fa-3x","fa fa-home fa-3x"];
	$IV     =["testimonials", "work_01","work_02","work_03","work_04","work_05", "work_06","header_stock","city"];
	$v 		=["kevin","harv","kevin","harv"];
	$vi     =["KEVIN WARD","HARVEY RUBE","KEVIN WARD","HARVEY RUBE"];
	$vii    =["client","harv","kevin","harv"];
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div>
			<section>
				<nav>
					<ul>
						<li class="left">
							<a href="<?php echo $_SERVER['PHP_SELF']?>">
								Tanatos<span class="color">Studio</span>
							</a>
						</li>
						<li class="right">
							Menu <i class="fa fa-bars fa-lg"></i>
						</li>
					</ul>
				</nav>
				<div class="div">
					<div>	
						<ul>
							<li>WE DESIGN <span class="color">THINGS</span></li>
							<li>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</li>
							<li><button class="butI">Hire Us</button></li>
							<li><button class="butII">Our Works</button></li>
						</ul>
					</div>
				</div>
				<div class="m">
					<div class="x">
						<div class="icon" id="icon">
							<i class="fa fa-chevron-down fa-lg"></i>
						</div>
					</div>
				</div>
			</section>
		<div>
	</header>
	<div class="sec">
		<?php 
		for ($i=0;$i<count($I);$i+=1) {
			echo"<aside>
				<div><i class=\"" .$III[$i] ."\"></i></div>
				<div>". $I[$i] ."</div>
				<div>" . $II[$i] . "</div>
			</aside>";
		}
		?>	
	</div>
	<div class="contaner">
		<div class="divContaner">
			<form>
				<input name="name" type="email" placeholder="Enter Your email adress for newsletter">
				<input type="submit" value="SUBSCRIBE">
			</form>
		</div>
	</div>
	<div class="conImage">
		<div class="word">
			<h3>OUR <span>WORK</span></h3>
			<p>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>	
				laboris nisi ut aliquip ex ea commodo consequat
			</p>
		</div>
		<div class="images">
		<?php 
			for ($i=0;$i<count($IV);$i+=1) {
				echo "<div class=\"cover\">
						<img src=\"images/" .$IV[$i]. ".png\">
					 </div>";
			}
		?>
		</div>
		<div class = "show-hide">
			<button class="wshow" id="show">SHOW MORE</button>
		</div>
	</div>
	<div class="divSlider">
		<div class="slider">
			<div class="i"><i class="fa fa-chevron-left fa-2x right" id="bef"></i></div>
			<?php
			for ($i=0;$i<4;$i+=1) {
				echo "<div class=\"slid\">
						<img src=\"images/".$vii[$i].".png\" width=\"120\" height=\"120\">
						<p>
							These guys are incredible! I get my project in 10 days and it was awesome! <br> 
							Very good service! Highly recommended!
						</p>
						<span>John Smith</span>
					</div>";
				}
			?>
			<div class="i"><i class="fa fa-chevron-right fa-2x left" id="aft"></i></div>
		</div>
	</div>
	<div class="person">
		<div class="perDiv">
			<h3>OUR <span>TEAM</span></h3>
			<p>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>
				laboris nisi ut aliquip ex ea commodo consequat		
			</p>
			<div class="four">
				<?php
				for ($i=0;$i<4;$i+=1) {
					echo "<div class=\"perPhoto\">
						<div class=\"coverPhoto\"></div>
						<img  src=\"images/".$v[$i].".png\">
						<span class=\"disBlock\">".$vi[$i]."</span>
						<div class=\"icons\">
							<div class=\"fac\"><i class=\"fa fa-facebook fa-lg\"></i></div>
							<div class=\"tw\"><i class=\"fa fa-twitter fa-lg\"></i></div>
							<div class=\"goo\"><i class=\"fa fa-google-plus fa-lg\"></i></div>
						</div>
						<p>
							Velit esse cillum dolore eu fugiat nulla<br>pariatur. Excepteur sint occaecat<br>cupidatat non proident
						</p>
					</div>";
					}
				?>
			</div>	
		</div>
	</div>
	<div class="footer">
		<div class="send">
			<div class="write">
				<h3>SAY <span>HELLO</span></h3>
				<p>
					Ut enim ad minim veniam, quis nostrud exercitation ullamco<br>
					laboris nisi ut aliquip ex ea commodo consequat	
				</p>
				<div class="form">
					<form>
						<input name="subject"  type="text" placeholder="sbject" class="left">
						<input name="your email" type="email" placeholder="your Email" class="right">
						<textarea name="massage" placeholder="massage"></textarea>
						<input type="submit" value="Hire Us" class="left">
					</form>
				</div>
				<div class="right">
					<div><i class="fa fa-facebook fa-lg"></i></div>
					<div><i class="fa fa-twitter fa-lg"></i></div>
					<div><i class="fa fa-google-plus fa-lg"></i></div>
				</div>
			</div>	
		</div>
	</div>
	<footer>
		<div>
		<span class="left">&copy; 2015 COPYRIGHT DESIGN STUDIO</span>
		<span class="right">DESIGNED BY Symu.co</span>
		</div>
	</footer>
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/function.js"></script>
</body>
</html>