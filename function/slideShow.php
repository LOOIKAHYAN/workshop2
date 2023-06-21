<!DOCTYPE html>
<html>

<style>
.mySlides {
	display:none;
	height: 350px;
}

.slideshow{
	margin: auto;
}
/*body{
	background-image: url("image/login11.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
*/
/**/

button{
 		font-size: 18px;
 		color: white;
 		background-color: lightcoral;
 		border-radius: 5%;
/* 		border: double yellow 5px;*/
 		padding: 1%;
}
/*
.overall{
	padding: 3%;
}*/

.title{
	text-align: center;
	padding: 5px 20px;
	color: black;
	font-family: Lucida Handwriting;
	font-size: 30px;

}

.title span{
	color: dimgray;
}

.section{
	text-align: center;
}

.text{
	font-family:serif;
	font-style: italic;
	text-align: center;
	color: black;
	margin: auto;
	margin-bottom: 10px;
	font-size: 30px;
}

.gif1{
	float: left;
	margin-top: 3%;
	margin-left: 3%;
	background-color: rgba(255,255,255,0.8);
	padding: 20px;
	border-radius: 1000px;
	width: 20%;
}

.gif2{
	float: right;
	margin-top: 3%;
	margin-right: 3%;
background-color: rgba(255,255,255,0.8);
	padding: 20px;
	border-radius: 1000px;
	width: 20%;
}


</style>
</head>
<body>
<div class="overall"><br><br>
<h1 class="text">Potential Dengue Breeding Areas
<img class ="gif1" src="../image/mosquito.gif">

<img class ="gif2" src="../image/mosquito.gif"></h1>
	<div class="slideshow" style="max-width:500px">

		   <img class="mySlides" src="https://media.istockphoto.com/id/1304381929/photo/old-abandoned-tyre-collected-still-water-after-rain-condusive-place-for-aedes-mosquito.jpg?s=612x612&w=0&k=20&c=UkxYnkH1MnRFOJn21Pgykm-uWU-vnu88fGOUSOEPhZk=" style="width:100%">

	<img class="mySlides" src="https://media.istockphoto.com/id/1413789352/photo/mosquito-breeding-in-polluted-water.jpg?s=612x612&w=0&k=20&c=zOAJP6NOP_YTC0Au7YwgloqUBbyf7nektOmWfFHeQYk=" style="width:100%">

<img class="mySlides" src="https://media.istockphoto.com/id/1136618588/photo/still-water-collected-on-rubbish-become-breeding-ground-for-mosquito.jpg?s=612x612&w=0&k=20&c=GgX2QV1__dbD8n-c7wf5gtiEWJce_2cb7x85YZQuqb8=" style="width:100%">

<img class="mySlides" src="https://media.istockphoto.com/id/1176267429/photo/close-up-very-many-small-slippery-red-mosquito-larvae-moths-for-sale-at-hang-market-at.jpg?s=612x612&w=0&k=20&c=lUeYiSVrN0oTXdRBtM5l1kHwMvjQwiijh_rjcvAylUo=" style="width:100%">

  <img class="mySlides" src="../image/dengue10.jpg" style="width:100%">
  <img class="mySlides" src="https://www.rentokil.co.id/blog/wp-content/uploads/2020/10/img-unused-junks-blog.png" style="width:100%">
  <img class="mySlides" src="https://www.rentokil.co.id/blog/wp-content/uploads/2020/10/img-fish-pond-blog.png" style="width:100%">
  <img class="mySlides" src="https://963kklz.com/wp-content/uploads/sites/69/2022/08/GettyImages-1155083840.jpg" style="width:100%">
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1500); // Change image every 1.5 seconds
}
</script>

</div>
</div><br><br>
</body>
</html>