
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>

	</head>
	<body>




	<?php
	ob_start();
	include ('db.php');

	$pid = $_GET['pid'];



	$sql ="select * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
	  $age = $row['age'];
		$city = $row['city'];
		$season = $row['season'];
		$troom = $row['troom'];
		$bed = $row['tbed'];
		$nroom = $row['nroom'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		$meal = $row['meal'];
		$ttot = $row['ttot'];
		$mepr = $row['mepr'];
		$btot = $row['btot'];
		$fintot = $row['fintot'];
		$days = $row['noofdays'];




	}
	$type_of_room = 0;
	if($city=="London"){
	if($troom=="Double Room")
	{
		$type_of_room = 139;

	}
	else if($troom=="Campsite Huse")
	{
		$type_of_room = 89;
	}
	else if($troom=="Deluxe Room")
	{
		$type_of_room = 189;
	}

	else if($troom=="Single Room")
	{
		$type_of_room = 89;
	}
}
else if($city=="Geneve"){
if($troom=="Double Room")
{
	$type_of_room = 130;

}
else if($troom=="Deluxe Room")
{
	$type_of_room = 180;
}
else if($troom=="Campsite Huse")
{
	$type_of_room = 80;
}
else if($troom=="Single Room")
{
	$type_of_room = 80;
}
}
else if($city=="Paris"){
if($troom=="Double Room")
{
$type_of_room = 170;

}
else if($troom=="Deluxe Room")
{
$type_of_room = 200;
}
else if($troom=="Campsite Huse")
{
$type_of_room = 70;
}
else if($troom=="Single Room")
{
$type_of_room = 70;
}
}
else if($city=="Rome"){
if($troom=="Double Room")
{
$type_of_room = 110;

}
else if($troom=="Deluxe Room")
{
$type_of_room = 150;
}
else if($troom=="Campsite Huse")
{
$type_of_room = 50;
}
else if($troom=="Single Room")
{
$type_of_room = 50;
}
}
else if($city=="Madrid"){
if($troom=="Double Room")
{
$type_of_room = 130;

}
else if($troom=="Deluxe Room")
{
$type_of_room = 180;
}
else if($troom=="Campsite Huse")
{
$type_of_room = 50;
}
else if($troom=="Single Room")
{
$type_of_room = 50;
}
}
else if($city=="Sydney"){
if($troom=="Double Room")
{
$type_of_room = 170;

}
else if($troom=="Deluxe Room")
{
$type_of_room = 175.48;
}
else if($troom=="Campsite Huse")
{
$type_of_room = 120;
}
else if($troom=="Single Room")
{
$type_of_room = 120;
}
}
else if ($city=="Amsterdam"){
if($troom=="Double Room")
{
$type_of_room = 140;

}
else if($troom=="Deluxe Room")
{
$type_of_room = 192;
}
else if($troom=="Campsite Huse")
{
$type_of_room = 60;
}
else if($troom=="Single Room")
{
$type_of_room = 60;
}
}
//______________________
$type_of_season = 0;
if($season==2){
	if($city=="London"){
		 $type_of_season = $type_of_room +((25/$type_of_room)*100);
	                  }

else if($city=="Geneve"){
		 $type_of_season = $type_of_room +((20/$type_of_room)*100);
	}
else if($city=="Paris"){
				 $type_of_season = $type_of_room +((22/$type_of_room)*100);
			}
else if($city=="Rome"){
			 $type_of_season = $type_of_room +((20/$type_of_room)*100);
							}
else if($city=="Madrid"){
			 $type_of_season = $type_of_room +((18/$type_of_room)*100);
															}
else if($city=="Sydney"){
			$type_of_season = $type_of_room -($type_of_room*(18/100));
														}
else if($city=="Amsterdam"){
		 $type_of_season = $type_of_room +((20/$type_of_room)*100);
														}

}
else if ($season==3){

if($city=="Sydney"){
 $type_of_season = $type_of_room +((10/$type_of_room)*100);
}
else if($city=="London"){
	 $type_of_season = $type_of_room;
									}

else if($city=="Geneve"){
	 $type_of_season = $type_of_room ;
}
else if($city=="Paris"){
			 $type_of_season = $type_of_room ;
		}
else if($city=="Rome"){
		 $type_of_season = $type_of_room;
						}
else if($city=="Madrid"){
		 $type_of_season = $type_of_room;
														}
else if($city=="Amsterdam"){
	 $type_of_season = $type_of_room;
													}

}

else if ($season==1){
if($city=="London"){
	 $type_of_season = $type_of_room;
}

else if($city=="Geneve"){
	 $type_of_season = $type_of_room;
}
else if($city=="Paris"){
			 $type_of_season = $type_of_room;
		}
else if($city=="Rome"){
		 $type_of_season = $type_of_room;
						}
else if($city=="Madrid"){
		 $type_of_season = $type_of_room;
														}
else if($city=="Sydney"){
		$type_of_season = $type_of_room;
													}
else if($city=="Amsterdam"){
	 $type_of_season = $type_of_room;
													}

}


//__________________________
if($bed=="Single")
{
		$type_of_bed = $type_of_room * 1/100;
	}
	else if($bed=="Double")
	{
			$type_of_bed = $type_of_room * 2/100;
		}
		else if($bed=="Triple")
		{
				$type_of_bed = $type_of_room * 3/100;
			}
			else if($bed=="Quad")
			{
					$type_of_bed = $type_of_room * 4/100;
				}
				else if($bed=="None")
				{
						$type_of_bed = $type_of_room * 0/100;
					}

if($meal=="Room only")
{
		$type_of_meal=$type_of_bed * 0;
	}
	else if($meal=="Breakfast")
	{
			$type_of_meal=$type_of_bed * 2;
		}else if($meal=="Half Board")
		{
				$type_of_meal=$type_of_bed * 3;

}else if($meal=="Full Board")
{

									$type_of_meal=$type_of_bed * 4;
								}
//_________________________________________________
								$type_of_des = 0;
if($season==2){
	if($city=="London"){
		 $type_of_des = "+25";
	                  }

else if($city=="Geneve"){
		 $type_of_des = "+20";
	}
else if($city=="Paris"){
				 $type_of_des = "+22";
			}
else if($city=="Rome"){
			 $type_of_des = "+20";
							}
else if($city=="Madrid"){
			 $type_of_des = "+18";
															}
else if($city=="Sydney"){
			$type_of_des = "-18";
														}
else if($city=="Amsterdam"){
		 $type_of_des = "+20";
														}

}
else if ($season==3){
if($city=="Sydney"){
$type_of_des = "+10";
}
}

else if ($season==1){
if($city=="London"){
	 $type_of_des ="0";
}

else if($city=="Geneve"){
	 $type_of_des ="0";
}
else if($city=="Paris"){
			 $type_of_des ="0";
		}
else if($city=="Rome"){
		 $type_of_des ="0";
						}
else if($city=="Madrid"){
		 $type_of_des ="0";
														}
else if($city=="Sydney"){
		$type_of_des ="0";
													}
else if($city=="Amsterdam"){
	 $type_of_des ="0";
													}

}

	?>
		<header>
			<h1>Receipt</h1>
			<address >
				<p>FlyFlow HOTEL</p>
					<p>GTO</p>
				<p>Oman,<br>Muscat,<br>Bowsher.</p>
				<p>(+968) 94909223</p>
			</address>
			<span><img  src="https://5zznly.com/p/2020/11/nO75f_logo.png" alt="Avatar" style="width:200px"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p><?php echo $title.$fname." ".$lname ?> <br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Age #</span></th>
					<td><span ><?php echo $age; ?></span></td>
				</tr>
				<tr>
					<th><span >Room #</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $cout; ?> </span></td>
				</tr>
				<tr>
					<th><span >City</span></th>
					<td><span ><?php echo $city; ?> </span></td>
				</tr>
				<tr>
					<th><span >Season</span></th>
					<td><span ><?php echo $season; ?> </span></td>
				</tr>

			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >No of Days</span></th>
						<th><span >Increase/Discount season</span></th>
						<th><span >Price in one day</span></th>
						<th><span >Number of days</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $troom; ?></span></td>
						<td><span ><?php echo $days; ?> </span></td>
						<td><span ><?php echo $type_of_des; ?> </span><span data-prefix>%</span></td>
						<td><span data-prefix>€</span><span ><?php  echo $type_of_season;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>€</span><span><?php echo $ttot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $bed; ?>  Bed </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span ><?php echo 0; ?> </span><span data-prefix>%</span></td>
						<td><span data-prefix>€</span><span ><?php  echo $type_of_bed;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>€</span><span><?php echo $btot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $meal; ?>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span ><?php echo 0; ?> </span><span data-prefix>%</span></td>
						<td><span data-prefix>€</span><span ><?php  echo $type_of_meal?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>€</span><span><?php echo $mepr; ?></span></td>
					</tr>
				</tbody>
			</table>

			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>€</span><span><?php echo $fintot; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>€</span><span >0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>€</span><span><?php echo $fintot; ?></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
						<p align="center">Email :- flyflow130@gmail.com || Phone :- +968 94909223 </p>
			</div>
		</aside>
	</body>
</html>
<?php
$free="Free";
$nul = null;
$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";
if(mysqli_query($con,$rpsql))
{
	$delsql= "DELETE FROM `roombook` WHERE id='$id' ";

	if(mysqli_query($con,$delsql))
	{

	}
}
?>
<?php

ob_end_flush();

?>
