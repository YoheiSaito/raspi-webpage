<head>

<script type="text/javascript">

//Get Clock for test of setInterval func
function showClock2() {
	var nowTime = new Date();
	var nowHour = nowTime.getHours();
	var nowMin  = nowTime.getMinutes();
	var nowSec  = nowTime.getSeconds();
	var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
	document.getElementById("RealtimeClockArea2").innerHTML = msg;
}
setInterval('showClock2()',1000);
</script>
</head>

<body>


<h1>いま何時？</h1>

<p>いま<p>
<p id="RealtimeClockArea2"> </p>
<p>です</p>


</body>
