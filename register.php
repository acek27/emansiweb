<?php
session_start();
include_once 'model/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="styles/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
 
<body>
	<div class="main">
		<form method="post" action="model/register_input.php">
    		<h1><lable> Sign Up </lable> </h1>
  			<div class="inset">
	  			<p>
	    		 <label">USERNAME</label>
   	 			<input type="text" placeholder="Username" required name="username"/>
				</p>
  				<p>
				    <label>PASSWORD</label>
				    <input type="password" placeholder="Password" required name="password"/>
  				</p>
				<p>
	    			<label>NAMA</label>
   	 				<input type="text" placeholder="Nama Lengkap" required name="nama"/>
				</p>
				<p>
	    			<label>NIM</label>
   	 				<input type="text" placeholder="NIM" required name="nim"/>
				</p>
				<p>
	    			<label for="user">Email</label>
   	 				<input type="email" placeholder="Email" required name="email"/>
				</p>
 			 </div>

 			 </div>
 	 
			  <p class="signup-container">
			    <input type="submit" value="Sign Up" name="signup">
			  </p>
		</form>
	</div>  
   					<div class="copy-right">
						<p>Program Studi Sistem Informasi</p> 
						<p class="univ">UNIVERSITAS JEMBER</p> 
					</div>
</body>
</html>