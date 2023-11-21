<?PHP
$act 	= (isset($_POST['act'])) ? trim($_POST['act']) : '';
$gender = (isset($_POST['gender'])) ? trim($_POST['gender']) : '';
$weight = (isset($_POST['weight'])) ? trim($_POST['weight']) : '0';
$height = (isset($_POST['height'])) ? trim($_POST['height']) : '0';
$age 	= (isset($_POST['age'])) ? trim($_POST['age']) : '0';

$tot_cal = "";

if($act == "calculate") 
{
	if($gender == "Female") {
		//women: BMR = 655 + (9.6 × body weight in kg) + (1.8 × body height in cm) - (4.7 × age in years); 
		$tot_cal = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age); 
	} else {
		//men: BMR = 66 + (13.7 × weight in kg) + (5 × height in cm) - (6.8 × age in years).
		$tot_cal = 66 + (13.7 * $weight) + (5 *	 $height) - (6.8 * $age);
	}
}
?>
<!DOCTYPE html>
<html>
<title>Nutri Fusion</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a:link {
  text-decoration: none;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Readex Pro", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

.w3-bar .w3-button {
  padding: 16px;
}

input.cpwd {
  -webkit-text-security: circle;  
  /* circle , square , disk */
}

.w3-merah,.w3-hover-merah:hover{color:#fff!important;background-color:#fe0000!important}

img[alt="www.000webhost.com"]{display:none}
</style>

<body class="">


<div class="w3-top w3-card w3-white" style="max-width:450px">
	<div class="w3-row w3-padding" >
		<div class="w3-col s2 w3-padding-16">
		<a href="menu.php" class=""><i class="fa fa-chevron-circle-left fa-2x w3-text-green"></i></a>
		</div>
		<div class="w3-col s6">
		<img src="images/logo.jpg" class="w3-image" style="height:50px">
		</div>
    </div>
</div>

	
<div class="w3-padding-24"></div>

<div class="w3-containerx " id="contact">
    <div class="w3-content w3-containerx " style="max-width:450px">
	<div class="w3-margin w3-padding " >		
		<h3 class="w3-center"><b>Calories You Need</b></h3>
		<form action="" method="post">
		<div class="w3-section " >
			Gender
			<select class="w3-input w3-padding-16 w3-border w3-padding w3-round-large" name="gender" required>
				<option value="Male" <?PHP if($gender=="Male") echo "selected";?>>Male</option>
				<option value="Female" <?PHP if($gender=="Female") echo "selected";?>>Female</option>
			</select>
		</div>
			
		<div class="w3-section" >
			Weight (kg)
			<input class="w3-input w3-border w3-padding w3-round-large" type="number" name="weight" value="<?PHP echo $weight;?>" placeholder="" required>
		</div>
		
		<div class="w3-section" >
			Height (cm)
			<input class="w3-input w3-border w3-padding w3-round-large" type="number" name="height" value="<?PHP echo $height;?>" placeholder="" required>
		</div>
		
		<div class="w3-section" >
			Age (Year)
			<input class="w3-input w3-border w3-padding w3-round-large" type="number" name="age" value="<?PHP echo $age;?>" placeholder="" required>
		</div>
		
		<div class="w3-center">
			<input name="act" type="hidden" value="calculate">
			<button type="submit" class="w3-padding-large w3-block w3-button w3-margin-bottom w3-round-xxlarge w3-green"><b>Calculate</b></button>
		</div>
		</form>
		
		<hr>
		
		<div class="w3-panel w3-border w3-border-red w3-pale-red w3-padding-16 w3-center w3-round-large">
		Your calory requirements
		<div class="w3-large"><?PHP echo $tot_cal; ?> kcal</div>
		</div>	

    </div>
	</div>
</div>


</body>
</html>
