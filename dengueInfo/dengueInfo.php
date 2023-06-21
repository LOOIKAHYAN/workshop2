<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dengue Information</title>
	<link rel="stylesheet" type="text/css" href="../css/navigationBarStyle.css">
	<?php
		include "../function/navigationBar.php";
	?>

<style>

.bgarea{
	background-color:rgb(106, 178, 211);
}

.barcolor{
	background-color: lightblue;
}

.parta{
	background-color: rgba(0, 120, 230, 0.2);
}

.partb{
	background-color: rgba(0, 120, 230, 0.4);
}

.textarea{
	padding: 3%;
}

.bar{
	position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  padding: 10px 30px;
  margin-right: 15%;
}

.image{
	width: 10%;
}

h2{
	border-bottom: darkblue solid 3px;
	margin-bottom: 1%;
	font-size: 30px;
	font-style: oblique;
}

h4{
	font-style: italic;
	font-size: 25px;
	border-bottom: solid darkblue;
	margin-right: 80%;
	margin-bottom: 1%;
}

p{
	font-size: 20px;
	padding: 5px;
	margin-bottom: 0.5px;
}

.image2{
	display: block;
	width: 40%;
	margin-top: 1%;
	margin-bottom: 1%;
	border: dotted black 5px;
}

.image5{
	display: block;
	width: 280px;
	height: 190px;
	border: double black 10px;
	transition: .2s;
}

.image5:hover{
	transform: scale(0.8);
}

.column {
  float: left;
  width: 22%;
  padding: 1%;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
</head>
<body>
	
<div class="overall">
	<div class="barcolor">
		<div class="bar">
			<p><a title="Jump to dengue part" href="#c1">Dengue</a></p>
			<p><a title="Jump to dengue symptoms part" href="#c2">Dengue Symptoms</a></p>
			<p><a title="Jump to dengue types part" href="#c3">Dengue Types</a></p>
			<p><a title="Jump to dengue treatment part" href="#c4">Dengue Treatment</a></p>
			<p><a title="Jump to dengue images part" href="#c5">Dengue Images</a></p>
			<p><a title="Jump to dengue prevention part" href="#c6">Dengue Prevention Methods</a></p>
		</div>
	</div>

	<div class="partb">
		<?php 
			include "../function/slideShow.php" 
		?>
	</div>

	<div class="parta" id="c1">
		<div class="textarea">
		<h2>Dengue</h2>
		<p style="text-indent:5%">Dengue is caused by a virus that is mostly transmitted by the bite of female mosquitoes of the species Aedes aegypti. Dengue symptoms range from none to serious flu-like symptoms. A small proportion of people develop severe dengue, which can be fatal.</p>
		<p style="text-indent:5%">There are four closely related dengue viruses, which are called dengue serotypes. Although recovery from infection gives immunity from the same dengue serotype, it also increases the risk of severe dengue if people are later infected by a different serotype.</p>
		<p style="text-indent:5%">Dengue is the most widely distributed mosquito-borne viral disease in the world. It continues to spread rapidly because of climate change, rapid urbanization, and population growth. Outbreaks are usually seasonal, peaking during and after rainy seasons. The World Health Organization classifies dengue as one of the top ten threats to public health.</p></div>
	</div>

	<div class="partb" id="c2">
		<div class="textarea">
		<h2>Dengue Symptoms</h2>
		<p>Mild symptoms of dengue can be confused with other illnesses that cause fever, aches and pains, or a rash.</p>
		<img class="image2" src="../image/dengueSymptom.jpg">
		<p>The most common symptom of dengue is fever with any of the following:</p>
		<p>✅ Nausea, vomiting</p>
		<p>✅ Rash</p>
		<p>✅ Aches and pains (eye pain, typically behind the eyes, muscle, joint, or bone pain)</p>
		</div>
	</div>

	<div class="parta" id="c3">
		<div class="textarea">
		<h2>Dengue Types</h2>
		<h4>Dengue</h4>
		<p>Dengue can have no symptoms or cause only mild illness, but it can also cause flu-like symptoms such as: </p>
		<p>✅ high fever (40°C/104°F)</p>
		<p>✅ severe headache</p>
		<p>✅ pain behind the eyes</p>
		<p>✅ nausea</p>
		<p>✅ vomiting</p>
		<p>✅ swollen glands</p>
		<p>✅ rash</p>
		<p>✅ muscle, joint, or bone pains so severe that dengue is sometimes referred to as ‘breakbone fever’</p><br>
		<h4>Severe dengue</h4>
		<p>Severe dengue happens when blood vessels become damaged and leaky, and the number of platelets (cells which form clots) drops. As a result, severe dengue can cause shock, internal bleeding, bleeding gums or nose, organ failure, and death. The symptoms of severe dengue include: </p>
		<p>✅ severe abdominal pain </p>
		<p>✅ persistent vomiting</p>
		<p>✅ rapid breathing</p>
		<p>✅ bleeding gums or nose</p>
		<p>✅ fatigue</p>
		<p>✅ restlessness</p>
		<p>✅ liver enlargement</p>
		<p>✅ blood in vomit or stool</p>
		<p>✅ potentially fatal </p>
		</div>
	</div>

	<div class="partb" id="c4">
		<div class="textarea">
		<h2>Dengue Treatment</h2>
		<p>There is no specific medicine to treat dengue. Treat the symptoms of dengue and see your healthcare provider.</p>
		<p>✅ See a healthcare provider if you develop a fever or have symptoms of dengue. Tell him or her about your travel.</p>
		<p>✅ Rest as much as possible.</p>
		<p>✅ Take acetaminophen (also known as paracetamol outside of the United States) to control fever and relieve pain.</p>
		<p>✅ Drink plenty of fluids to stay hydrated. Drink water or drinks with added electrolytes.</p>
		</div>
	</div>

	<div class="parta" id="c5">
		<div class="textarea">
		<br><h2>Dengue Images</h2>
		<div class="row">
			<div class="column">
			<img class="image5" src="..\image\dengue2.jpg"><br></div>
			<div class="column">
			<img class="image5" src="..\image\dengue3.jpg"><br></div>
			<div class="column">
			<img class="image5" src="..\image\dengue4.jpg"><br></div>
			<div class="column">
			<img class="image5" src="..\image\dengue5.jpg"><br>
			</div>
		</div>

	<div class="row">
		<div class="column">
		<img class="image5" src="..\image\dengue6.jpg"><br></div>
		<div class="column">
		<img class="image5" src="..\image\dengue7.jpg"><br></div>
		<div class="column">
		<img class="image5" src="..\image\dengue8.jpg"><br></div>
		<div class="column">
		<img class="image5" src="..\image\dengue9.jpg"><br></div>
	</div>
</div>
	</div>

	<div class="partb" id="c6">
		<div class="textarea">
		<br><h2>Dengue Prevention Methods</h2>
		<p>✅ Keep your house clean and tidy.</p>
		<p>✅ Do not leave stagnant water lying anywhere in or around the house. It’s very dangerous as these misquotes lie on this stagnant water only, it doesn’t matter if it is dirty or clean.</p>
		<p>✅ Spray the house with anti-mosquito sprays, like Kala Hit every day in the corners of your home to kill the hidden mosquitoes.</p>
		<p>✅  Keep your wet garbage separate and throw in a wet bin (which is kept covered)</p>
		<p>✅ Wear a mosquito repellent cream and carry it with you at all times for dengue prevention and control.</p>
		<p>✅  Keep the doors and windows of the house closed, mostly early in the morning and during the evening.</p>
		<p>✅ Keep your wet and soggy clothes and shoes away from the dry garments. Also, try to dry the wet ones as soon as possible.</p>
		</div>
	</div>

</div>
		
</body>
</html>
