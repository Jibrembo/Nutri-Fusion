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
<script>
var divobj = document.getElementById('tot_amount');  
divobj.value = "20";
</script>

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

<div class="w3-padding-32"></div>

<div class="w3-containerx " id="contact">
    <div class="w3-content w3-containerx " style="max-width:450px">
	<div class="w3-margin w3-padding " >
		<h3 class="w3-center"><b>Meal Calories</b></h3>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				CHICKEN
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0"  id="input1" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus1"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus1"><b>+</b></button>
				</div>
			</div>
		</div>		
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				FISH
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input2" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus2"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus2"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				RICE
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input3" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus3"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus3"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				SALMON
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input4" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus4"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus4"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				BREAD
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input5" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus5"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus5"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				OAT
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input6" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus6"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus6"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				BROCCOLI
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input7" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus7"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus7"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				TOMATO
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input8" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus8"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus8"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				WATERMELON
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input9" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus9"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus9"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-section" >
			<div class="w3-row">
				<div class="w3-col s5">
				BLUEBERRY
				</div>
				<div class="w3-col s7">
				<input class="w3-border w3-padding w3-round-large" style="width:70px" type="number" min="0" id="input10" value="0" required>
				<button class="w3-button w3-circle w3-green" id="minus10"><b>-</b></button>
				<button class="w3-button w3-circle w3-green" id="plus10"><b>+</b></button>
				</div>
			</div>
		</div>
		
		<div class="w3-padding-16"></div>
		<div class="w3-padding-64"></div>
		
    </div>
	</div>
</div>

<div class="w3-bottom">
	<div class="w3-card w3-white w3-padding">
		<div class="w3-panel w3-border w3-border-red w3-pale-red w3-padding-16 w3-center w3-round-large">
			<a href="kal2.php" class="w3-left w3-small"><i class="fa fa-history"></i></a>
			Total calories
			
			<div class="w3-large">
			<span id="tot_amount">0</span> kcal
			</div>
		</div>
	</div>
</div>

<script>
const minusButton1 = document.getElementById('minus1');
const plusButton1 = document.getElementById('plus1');
const inputField1 = document.getElementById('input1');

minusButton1.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField1.value) || 0;
  if(currentValue > 0) {
  inputField1.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton1.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField1.value) || 0;
  inputField1.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton2 = document.getElementById('minus2');
const plusButton2 = document.getElementById('plus2');
const inputField2 = document.getElementById('input2');

minusButton2.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField2.value) || 0;
  if(currentValue > 0) {
  inputField2.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton2.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField2.value) || 0;
  inputField2.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton3 = document.getElementById('minus3');
const plusButton3 = document.getElementById('plus3');
const inputField3 = document.getElementById('input3');

minusButton3.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField3.value) || 0;
  if(currentValue > 0) {
  inputField3.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton3.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField3.value) || 0;
  inputField3.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton4 = document.getElementById('minus4');
const plusButton4 = document.getElementById('plus4');
const inputField4 = document.getElementById('input4');

minusButton4.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField4.value) || 0;
  if(currentValue > 0) {
  inputField4.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton4.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField4.value) || 0;
  inputField4.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton5 = document.getElementById('minus5');
const plusButton5 = document.getElementById('plus5');
const inputField5 = document.getElementById('input5');

minusButton5.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField5.value) || 0;
  if(currentValue > 0) {
  inputField5.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton5.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField5.value) || 0;
  inputField5.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton6 = document.getElementById('minus6');
const plusButton6 = document.getElementById('plus6');
const inputField6 = document.getElementById('input6');

minusButton6.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField6.value) || 0;
  if(currentValue > 0) {
  inputField6.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton6.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField6.value) || 0;
  inputField6.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton7 = document.getElementById('minus7');
const plusButton7 = document.getElementById('plus7');
const inputField7 = document.getElementById('input7');

minusButton7.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField7.value) || 0;
  if(currentValue > 0) {
  inputField7.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton7.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField7.value) || 0;
  inputField7.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton8 = document.getElementById('minus8');
const plusButton8 = document.getElementById('plus8');
const inputField8 = document.getElementById('input8');

minusButton8.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField8.value) || 0;
  if(currentValue > 0) {
  inputField8.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton8.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField8.value) || 0;
  inputField8.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton9 = document.getElementById('minus9');
const plusButton9 = document.getElementById('plus9');
const inputField9 = document.getElementById('input9');

minusButton9.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField9.value) || 0;
  if(currentValue > 0) {
  inputField9.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton9.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField9.value) || 0;
  inputField9.value = currentValue + 1;
  calculateAmount();  
});

//----------------

const minusButton10 = document.getElementById('minus10');
const plusButton10 = document.getElementById('plus10');
const inputField10 = document.getElementById('input10');

minusButton10.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField10.value) || 0;
  if(currentValue > 0) {
  inputField10.value = currentValue - 1;
  calculateAmount();
  }
});

plusButton10.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField10.value) || 0;
  inputField10.value = currentValue + 1;
  calculateAmount();  
});

//----------------



function calculateAmount() {  
	
	var input1 = document.getElementById('input1');
	var input2 = document.getElementById('input2');
	var input3 = document.getElementById('input3');
	var input4 = document.getElementById('input4');
	var input5 = document.getElementById('input5');
	var input6 = document.getElementById('input6');
	var input7 = document.getElementById('input7');
	var input8 = document.getElementById('input8');
	var input9 = document.getElementById('input9');
	var input10 = document.getElementById('input10');
	
	
	var divobj = document.getElementById('tot_amount');  
/*
	chicken = 114
	fish = 112
	rice = 170
	salmon = 116
	bread = 95
	oat = 160
	broccoli = 34
	tomato = 18
	watermelon = 30
	blueberry = 43
*/	
	var tot_1 =  input1.value * 114;  
	var tot_2 =  input2.value * 112;  
	var tot_3 =  input3.value * 170;
	var tot_4 =  input4.value * 116;
	var tot_5 =  input5.value * 95;
	var tot_6 =  input6.value * 160;
	var tot_7 =  input7.value * 34;
	var tot_8 =  input8.value * 18;
	var tot_9 =  input9.value * 30;
	var tot_10 =  input10.value * 43;
	
	var tot_price =  (tot_1 + tot_2 + tot_3 + tot_4 + tot_5 + tot_6 + tot_7 + tot_8 + tot_9 + tot_10);  
	divobj.innerHTML = tot_price;  
}  
</script>


</body>
</html>
