<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Game Timer</title>
</head>
<body>
	<div class="alert alert-danger text-center" role="alert" style="font-size: 30px">
Typing Test
</div><br>
	<div class="alert alert-info text-center" role="alert" style="font-size: 30px" id="ankush">

</div>
<div class="contianer-fluid">

 <div class="col-sm-10">
      <input type="text" class="form-control" id="hello"><br>
  </div>
  
      <button type="button" class="btn btn-primary" onclick ="sood()" >submit</button>
 
    </div>
<br><br>
<div class="contianer-fluid">
	<div class="row">
		<div class="col-sm-6 bg-primary text-white text-center" id="anku" style="height: 100px;font-size: 50px">
Time Left
		</div>
			<div class="col-sm-6 bg-secondary text-white text-center" id="ank"style="height: 100px;font-size: 50px">

		</div>
	</div>
	</div>


<script type="text/javascript">
var score=0;
var t=9;

	var no=["hello","world","i","live","in","morinda","When", "you", ",are","learning ","to ","type", "there", "are","some","distinct", "stages", "that", "you", "will", "experience", "and", "can", "be", "recognized", "by", "how", "fast", "you", "type"];
		
			var p=Math.floor((Math.random() * 28) + 1);
			document.getElementById("ankush").innerHTML=no[p];
			setInterval(function(){
document.getElementById("anku").innerHTML="Time left"+" "+ " "+" "+" "+t;
document.getElementById("ank").innerHTML= "Score"+" "+ " "+" "+" "+score;

t--;
		if(t==0){
			p=Math.floor((Math.random() * 28) + 1);
			document.getElementById("ankush").innerHTML=no[p];
				document.getElementById("hello").value="";
			t=9;
			score--;
		}
	
		},1000);
function sood(){
var x=document.getElementById("hello").value;
if(x==no[p])
{
	score++;
	console.log(score);
	document.getElementById("ank").innerHTML= "Score"+" "+ " "+" "+" "+score;
	document.getElementById("hello").value="";
	 p=Math.floor((Math.random() * 28) + 1);
			document.getElementById("ankush").innerHTML=no[p];
		t=9;
	
}

else{
	alert("game over Your Score is"+" "+score);
window.location.reload();
}
}



</script>
</body>
</html>