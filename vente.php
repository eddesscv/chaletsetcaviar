<!DOCTYPE html>
<?php 
		global $wp_query;
		$id_property = $_GET['i'];	

		$urlLogo = $_SERVER['HTTP_HOST'] . '/wp-content/plugins/real-estate-agency/theme-realestate/realestate-template-parts/image/Logo-Real-estate-Large-WP.png';

        $url = "https://real-estate-france-db-prod.appspot.com/managedbmysql";

			$data = array('service' => 'getRealestate', 'plateform' => '1', 'login' => $login, 'pwdCripted' => '', 'keyCustomer' => '', 'idc' => ''
				, 'id' => $id_property, 'currentPage' => '1', 'numberSize' => '5');


		$options = array('http' => array(
		    'method'=> 'POST',
		    'header'=>'Content-type: application/x-www-form-urlencoded',
            'content'=> http_build_query($data)
		));

		$context = stream_context_create($options);
		$app_list = file_get_contents($url, false, $context);
		$app = json_decode($app_list, true);	
?>
<html>
<head>
	<title><?php echo 'Vente ' . $app['typeProperty'] . ' '; ?>
	      		<?php if ($app['room'] > 1) : ?>
		      				<?php echo $app["room"]?> pièces 
		      			<?php else : ?>
		      				<?php echo $app["room"]?> pièce 
	      				<?php endif; ?>
  				<?php echo $app["surface"]?> m2 
	      		<?php echo $app["city"]?> <?php echo $app["cp"]?>
	</title>

</head>
<style type="text/css">
	button,
html [type="button"],
[type="reset"],
[type="submit"] {
	-webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
	border-style: none;
	padding: 0;
}

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
	outline: 1px dotted ButtonText;
}
button {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
	font-size: 15px;
	font-size: 0.9375rem;
	font-weight: 400;
	line-height: 1.66;
}
button {
	background-color: #222;
	border: 0;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #fff;
	cursor: pointer;
	display: inline-block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: 800;
	line-height: 1;
	padding: 1em 2em;
	text-shadow: none;
	-webkit-transition: background 0.2s;
	transition: background 0.2s;
}

button {
	padding: 0.75em 2em;
}


button:hover,
button:focus {
	background: #767676;
}
h1 {
	color: #696969;
	font-size: 24px;
	font-size: 1.5rem;
	font-weight: 300;
}

h2 {
	color: #696969;
	font-size: 20px;
	font-size: 1.25rem;
	font-weight: 300;
}

h3 {
	color: #696969;
	font-size: 18px;
	font-size: 1.125rem;
	font-weight: 300;
}

h4 {
	color: #696969;
	font-size: 16px;
	font-size: 1rem;
	font-weight: 800;
}
a {
		color: #222 !important; /* Make sure color schemes don't affect to print */
	}
body
 {
	color: #696969;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
	font-size: 15px;
	font-size: 0.9375rem;
	font-weight: 400;
	line-height: 1.66;
}
a:link 
{ 
text-decoration:none; 
} 
</style>
<body>
	<table align="center">
		<tr>
	      	<td width='1%'></td>
	      	<td valign="top" colspan="4" style="width:600px;">
	      		<a href="<?php echo prepare_url('/vente/' . $app['typeProperty'] . '/' . $app["city"] .'-' . $app["cp"] .'/' . $id_property) ?>">
	      		<h1>
	      		<b><?php echo 'Vente ' . $app['typeProperty'] . ' '; ?></b>
	      		<?php if ($app['room'] > 1) : ?>
		      				<b><?php echo $app["room"]?> pièces </b>
		      			<?php else : ?>
		      				<b><?php echo $app["room"]?> pièce </b>
	      				<?php endif; ?>
  				<b><?php echo $app["surface"]?> m2 </b>
	      		<b><?php echo $app["city"]?> <?php echo $app["cp"]?></b>	      				
	      		</h1>
	      		<p style="width:600px;">
	      		<?php echo substr($app["textDescription"], 0, 200) . ' ...' ?>	      		
	      		</p>

				<?php
      				$imgEmpty = false;
      				if ($app['urlphoto1'] != ''){
      				 	 $imgFirstCol = $app['urlphoto1']; $imgEmpty = true;
  				 	}elseif ($app['urlphoto2'] != ''){
  				 		$imgFirstCol = $app['urlphoto2']; $imgEmpty = true;
				 		}elseif ($app['urlphoto3'] != ''){
				 			$imgFirstCol = $app['urlphoto3']; $imgEmpty = true;
				 		}elseif ($app['urlphoto4'] != ''){
				 			$imgFirstCol = $app['urlphoto4']; $imgEmpty = true;
				 		}elseif ($app['urlphoto5'] != ''){
				 			$imgFirstCol = $app['urlphoto5']; $imgEmpty = true;
				 		}elseif ($app['urlphoto6'] != ''){
				 			$imgFirstCol = $app['urlphoto6']; $imgEmpty = true;
		 			}
			 	?>
			 	
			 	<?php if ($imgEmpty == true) : ?>
	      			<img class="showreal" style="width:600px;height:400px;" alt="<?php echo $app['imgFirstColCaption'] ?>" id="img" src="<?php echo $imgFirstCol?>">
      			<?php else : ?>
      				<img class="showreal" style="width:600px;height:400px;" alt="<?php echo $app['imgFirstColCaptionStd'] ?>" id="img" src="<?php echo $urlLogo ?>">
  				<?php endif; ?>

  				<br><br>
				<br><h3><button>Afficher le téléphone email et prix</button></h3>
				</a>

				<b>
					Agence: <?php echo $app["agency"]?>
	   				<?php if ( !empty($app["addressAgency"]) ) :?>
	   					<?php echo $app["addressAgency"]?>
	   				<?php endif; ?>	
	   				<?php echo ' ' . $app["cityAgency"]?> <?php echo ' ' . $app["cpAgency"]?>
   				</b>
			</td>
			<td width="1%"></td>      				
			<td align="left" valign="top">						
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					 <!--EmailingSkyscraper300x600 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:600px"
					     data-ad-client="ca-pub-7351030609964877"
					     data-ad-slot="3770514742"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>						
 			</td> 
 			<td width='1%'></td>
		</tr>
    </table>

</body>
</html>
<?php function prepare_url($field){
	$field = str_replace(" ","-",strtolower($field));
	return $field;
	} 
?>