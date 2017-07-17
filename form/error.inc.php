<style type="text/css">

	* {
	margin: 0;
	padding: 0;
	border: 0;
	}

	/* HTML5 compatibility */
	article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
		display:block;
	}

	@font-face {
		font-family: 'segoe';
		src: url('fonts/segoeui.ttf') format('truetype');
	}

	@font-face {
		font-family: 'champagne';
		src: url('fonts/champagnelimousines.ttf') format('truetype');
	}

	body {
		background-color: #ffffff;
	}

	#container {
		margin: 0px 0px 0px 400px;
		width: 1000px;
	}

	.signup {
		width: 900px;
		height: 400px;
		padding: 20px;
		margin: auto;
		margin-top: 100px;
	}

	section {
		padding: 10px 20px;
    margin: auto;
    clear: both;
    width: 525px;
    font-family: 'segoe', sans-serif;
	}

	h3 {
		padding: 10px;
		font-family: 'champagne', cursive;
		font-style: normal;
		font-size: 25px;
		text-align: center;
		color: #003333;
	}

	p {
		padding: 10px 50px;
		margin-top: 10px;
		text-align: center;
		font-family: 'segoe', sans-serif;
		font-size: 18px;
    color: #003333;
    display:block;
    float: left;
	}

	a img {
		width: 100%;
		margin: auto;
		text-align: center;
	}
</style>

<div class="signup">

		<section>
			<h3>Missing fields</h3>
		</section>

		<p>We're sorry, but it seems that you have not filled in all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

		<ul id="display_none">
		<?php
			for($i=0; $i<count($this->missing_required_fields); $i++){
				echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
		?>
		</ul>

		<p id="back"><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>
