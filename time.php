<head>

<script type="text/javascript">
//Get Clock for test of setInterval func
function showClock2() {
	var nowTime = new Date();
	var nowHour = nowTime.getHours();
	var nowMin  = nowTime.getMinutes();
	var nowSec  = nowTime.getSeconds();
	var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
	// .innerHTML indicate id will be msg
	document.getElementById("RealtimeClockArea2").innerHTML = msg;
}
setInterval(showClock2,950);
</script>

<script type="text/javascript" src="/Public/js/jquery-3.3.1.min.js"></script>
</head>

<body>


<h1>いま何時？</h1>

<p id="RealtimeClockArea2"> </p>

<div id='videoframe'> </div>
<script>

$.ajax(
{
	type: "getName",
	url: "getImgName.php",
	cache: false,
	success: 
		function(img){
			console.log("ajax");
			console.log(img);
		}
}
);


</script>
<img src="./img/raspi-cam.jpg" />

</body>
