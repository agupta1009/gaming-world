
<html>
<head>
<title>tic tae toe</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
			<div class="alert alert-primary" role="alert"><CENTER style="font-size: 40px"> TIC TAE TOE</CENTER>

    
  </div>

			<div class="alert alert-warning" role="alert"><CENTER style="font-size: 40px" id="ank">Player 1 Turn</CENTER>


    
  </div>
		<div id="ankush" class=" container"></div>
		<table border=1px  width="200px" height="200px"class= "table table-bordered table-dark ">
			<tr >
				<td id="0" onclick=" sood('0')" onmouseover="ankush('0')" onmouseout="ak('0')"> </td>
					<td id="1"  onclick="sood('1')" onmouseover="ankush('1')" onmouseout="ak('1')"> </td>
						<td id="2"  onclick="sood('2')" onmouseover="ankush('2')" onmouseout="ak('2')"> </td>
			</tr>
				<tr>
				<td id="3"  onclick="sood('3')" onmouseover="ankush('3')" onmouseout="ak('3')"> </td>
					<td id="4"  onclick="sood('4')"onmouseover="ankush('4')" onmouseout="ak('4')"> </td>
						<td id="5"  onclick="sood('5')"onmouseover="ankush('5')" onmouseout="ak('5')"> </td>
			</tr>
				<tr>
				<td id="6"  onclick="sood('6')"onmouseover="ankush('6')" onmouseout="ak('6')"> </td>
					<td id="7"  onclick="sood('7')"onmouseover="ankush('7')" onmouseout="ak('7')"> </td>
						<td id="8"  onclick="sood('8')"onmouseover="ankush('8')" onmouseout="ak('8')"> </td>
			</tr>
		</table>


		<script type="text/javascript">

var checked=['false','false','false','false','false','false','false','false','false'];
			sign="x";
			function sood(num){
				
				if(sign=="x"&&checked[num]=='false'){
document.getElementById("ank").innerHTML="Player 2 Turn";
					var a=document.getElementById(num);
					a.innerHTML="x";
					a.style.backgroundColor="black";
					a.style.textAlign="center";
				sign="0";
				checked[num]='true';
				check();
			}
			 else if(sign=="0"&&checked[num]=='false')
{document.getElementById("ank").innerHTML="Player 1 Turn";
	var a=document.getElementById(num);
	a.innerHTML="0";
	a.style.backgroundColor="darkgrey";
		a.style.textAlign="center";
	sign="x";
	checked[num]='true';
	check();
}
}
function check(){
	if(document.getElementById('0').style.backgroundColor=="black"&&document.getElementById('1').style.backgroundColor=="black"&&document.getElementById('2').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
	else if(document.getElementById('3').style.backgroundColor=="black"&&document.getElementById('4').style.backgroundColor=="black"&&document.getElementById('5').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
		else if(document.getElementById('6').style.backgroundColor=="black"&&document.getElementById('7').style.backgroundColor=="black"&&document.getElementById('8').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
		else if(document.getElementById('0').style.backgroundColor=="black"&&document.getElementById('3').style.backgroundColor=="black"&&document.getElementById('6').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
		else if(document.getElementById('1').style.backgroundColor=="black"&&document.getElementById('4').style.backgroundColor=="black"&&document.getElementById('7').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
		else if(document.getElementById('2').style.backgroundColor=="black"&&document.getElementById('5').style.backgroundColor=="black"&&document.getElementById('8').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
		else if(document.getElementById('0').style.backgroundColor=="black"&&document.getElementById('4').style.backgroundColor=="black"&&document.getElementById('8').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
		else if(document.getElementById('2').style.backgroundColor=="black"&&document.getElementById('4').style.backgroundColor=="black"&&document.getElementById('6').style.backgroundColor=="black"){

alert("player 1 won");
window.location.reload();
	}
	else if(document.getElementById('0').style.backgroundColor=="darkgrey"&&document.getElementById('1').style.backgroundColor=="darkgrey"&&document.getElementById('2').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
	else if(document.getElementById('5').style.backgroundColor=="darkgrey"&&document.getElementById('3').style.backgroundColor=="darkgrey"&&document.getElementById('4').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
		else if(document.getElementById('6').style.backgroundColor=="darkgrey"&&document.getElementById('7').style.backgroundColor=="darkgrey"&&document.getElementById('8').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
		else if(document.getElementById('0').style.backgroundColor=="darkgrey"&&document.getElementById('3').style.backgroundColor=="darkgrey"&&document.getElementById('6').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
		else if(document.getElementById('1').style.backgroundColor=="darkgrey"&&document.getElementById('4').style.backgroundColor=="darkgrey"&&document.getElementById('7').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
		else if(document.getElementById('2').style.backgroundColor=="darkgrey"&&document.getElementById('5').style.backgroundColor=="darkgrey"&&document.getElementById('8').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
		else if(document.getElementById('0').style.backgroundColor=="darkgrey"&&document.getElementById('4').style.backgroundColor=="darkgrey"&&document.getElementById('8').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
		else if(document.getElementById('2').style.backgroundColor=="darkgrey"&&document.getElementById('4').style.backgroundColor=="darkgrey"&&document.getElementById('6').style.backgroundColor=="darkgrey"){

alert("player 2 won");
window.location.reload();
	}
}

function ankush(hello){
	var a=document.getElementById(hello);

	a.style.boxShadow=" 0 0 30px 0 rgba(0,0,0,0.5)";
a.style.transition="0.3s";
	a.style.translateTransform="(0,0,20px,0)";
}
function ak(hi){
	var a=document.getElementById(hi);
	a.style.boxShadow=" 0 0 0px 0 rgba(0,0,0,0)";
	a.style.translateTransform="(0,0,0px,0)";
}

</script>
</body>
</html>