
<?php
	
	include 'include/header.php';

?>

	<div class="content">

		<img class="fit100 pic" src="images/pizza.jpg" />

		<div class="box-container">

			<div class="b33 .box-first">
				<div class="box center">
					Dine in, or<br /> 
					order pickup or delivery online!
					<a class="eat24-s" href="http://eat24hrs.com/restaurants/19119" title="Order Online with Eat24"></a>

					<p> some json tests: </p>

					<p>
						<?php
							echo "Restaurant name: " . $json["restaurant"]["name"] . "<br>";
							echo "Restaurant zip code: " . $json["restaurant"]["zip"] . "<br>";
							echo "";
						?>
					</p>
				</div>
			</div>

			<div class="b33">
				<div class="box center">
					<p>
						<?php
							echo $json["rest"]["street"] . "<br>";
							echo $json["rest"]["city"] .", ". $json["rest"]["state"] .", ". $json["rest"]["zip"] ." ". "<br>";
							echo $json["rest"]["phone"] . "<br>";
						?>
					</p>
				</div>
			</div>

			<div class="b33 box-last">
				<div class="box center">
				<p>$2 delivery to anywhere South of Sip Ave, West of John F. Kennedy Blvd W, and North of W 63rd St.</p>
				</div>
			</div>

		</div>

		<div class="clear"></div>

		<div class="box-container">

			<div class="b50 box-first">
				<div class="box center">
					<h1>Filler content</h1>
					<h2>Have some... it's absolutely delicious</h2>
				</div>
			</div>

			<div class="b50 box-last">
				<div class="box center">
					<h2>Now with a &lt;ul&gt; to boot!</h2>
					<ul>
						<li>I am a consumer whore</li>
						<li>and how?</li>
						<li>I am a banana!</li>
					</ul>
				</div>
			</div>

		</div>

		<div class="clear"></div>

		<div class="b100">
			<div class="box center">
				<h1>h1 - looka lika title</h1>
				<h2>h2 - some important stuff</h2>
				<h3>h3 - for the non-conformists</h3>
				<p>and a sexy paragraph element</p>
			</div>
		</div>
	</div>

<?php include 'include/footer.php'; ?>