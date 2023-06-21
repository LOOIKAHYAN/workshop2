<!DOCTYPE html>
<html>
<head>
	<meta charset =utf-8">
	<title>Digital Clock</title>
<style>

.datetime1{
    color:#fff;
    background: #10101E;
    font-family:"Sogoe UI",sans-serif;
    width: 340px;
    padding: 15px 10px;
    border: 3px solid #2E94E3;
    border-radius: 5px;
    -webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255,255,255,0.1));
    transition: 0.5s;
    transition-property: background,box-shadow;
}

.datetime1:hover{
	background: #2E94E3;
	box-shadow: 0 0 30px #2E94E3;

}

.date{
	font-size:20px;
	font-weight: 600;
	text-align: center;
	letter-spacing: 3px;

}

.time{
	font-size: 60px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.time span:not(:last-child){
	position: relative;
	margin: 0 6px;
	font-weight: 600;
	text-align: center;
	letter-spacing: 3px;
}

.time span:last-child{
	background: #2E94E3;
	font-size: 30px;
	font-weight: 600;
	text-transform: uppercase;
	margin-top: 10px;
	padding: 0 5px;
	border-radius: 3px;


}

.overall{
	padding:3%;
}

</style>
</head>
<body onload="initClock()">
<div class="overall">

<div class="datetime1">
	<div class="date">
		<span id="dayname">Day</span>,
		<span id="month">Month</span>
		<span id="daynum">00</span>,
		<span id="year">Year</span>
	</div>
	<div class="time">
		<span id="hour">00</span>:
		<span id="minutes">00</span>:
		<span id="seconds">00</span>
		<span id="period">AM</span>
	</div>
</div>

<!-- digital clock end -->

<script type="text/javascript">
function updateClock(){
	var now = new Date();
	var dname = now.getDay(),
	mo = now.getMonth(),
	dnum = now.getDate(),
	yr = now.getFullYear(),
	hou = now.getHours(),
	min=now.getMinutes(),
	sec=now.getSeconds(),
	pe="AM";

	if(hou == 0){
		hou = 12;

	}

	if(hou > 12){
		hou = hou - 12;
		pe = "PM";
	}

	Number.prototype.pad = function(digits){
		for(var n = this.toString();n.length < digits; n = 0 + n);
			return n;
	}

	var months=["January","February","March","April","May","June","July","August","September","October","November","December"];

	var week = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

	var ids = ["dayname","month","daynum","year","hour","minutes","seconds","period"];

	var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2),pe];

	for(var i = 0; i<ids.length; i++){
		document.getElementById(ids[i]).firstChild.nodeValue = values[i];
	}
}

function initClock(){
	updateClock();
	window.setInterval("updateClock()",1);
}
</script>

</div>
</body>
</html>
