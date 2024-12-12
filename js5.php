<!DOCTYPE html>
<html>
<head>
<script>
function myFunction(e) {
  x = e.clientX;
  y = e.clientY;
  coor = "Coordinates: (" + x + "," + y + ")";
  document.getElementById("demo").innerHTML = coor;
}

function clearCoor() {
  document.getElementById("demo").innerHTML = "";
}
</script>
</head>
<body style="margin:0px;">
<h1>JavaScript Function #5</h1>
<h2>Move your mouse over the image</h2>

<div id="coordiv" style="width:199px;height:99px;border:1px solid" onmousemove="myFunction(event)" onmouseout="clearCoor()">
  <img src="https://mixdownmag.com.au/wp-content/uploads/2021/02/mixdown-magazine-sydney-record-shops.jpg" style="width:100%;height:auto;">
</div>

<p style = "margin-top:60px;">See the coordinates of your mouse on the image!</p>

<p id="demo"></p>

</body>
</html>
