<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body {
  background-color: coral;
}
</style>
	
	<title>Timer Clock</title>
</head>
<body>
	<center>
		<div style="width: 450px;height:85px;border-radius:80px;background-color: #92a8d1;color:Maroon ;font-size: 80px">TIMER</div></center><br><br><br>
		<button style="width: 60px;height: 60px;background-color: black;float: left;color:white;font-size: 30px;margin-left: 200px" onclick="plus()">+</button>
<div style="width:200px;height: 150px;background-color:#DAF7A6 ;font-size: 80px;float: left;margin-left: 400px" id="ankush">
	
</div>
<button style="width: 60px;height: 60px;background-color: black;float: left;font-size: 30px;margin-left:200px;color:white" onclick="minus()">-</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<button style="width: 300px;height: 100px;border-radius: 50px;border: 0px;background-color: #283D64;color:white;font-size: 30px" onclick="sood()">Submit</button>

<button style="width: 300px;height: 100px;border-radius: 50px;border: 0px;background-color: #283D64;color:white;font-size: 30px" onclick="stop()">Stop</button></center>

<script type="text/javascript">
	var l=25;
	var t=document.getElementById("ankush").innerHTML=l+":"+0+0;
function sood(){
	var x=l-1;
	var y=5;
	var z=9;
	var h=setInterval(function(){
 var p=document.getElementById("ankush").innerHTML=x+":"+y+z;
	z--;
	if(y==0&&z<0){
z=9;
	y=5;	
x--;}
		 else if(z<0){
			z=0;
			 y--;
			z=9;
			
		}
		else if(y==0&&z==9){
			z=9;
			y=0;
		}
	
		else if(x==0&&y==0&&z==0){
			x=0;
			y=0;
			z=0;
			alert("Time Over");
		}
	

},1000);
	
}
function stop(){

console.log("heloo");
 clearInterval(h);
	
 console.log(h);

}
function plus(){
l++;
var t=document.getElementById("ankush").innerHTML=l+":"+0+0;
}
function minus(){
	if(l>0){
l--;
var t=document.getElementById("ankush").innerHTML=l+":"+0+0;
}
}

</script>
</body>
</html>