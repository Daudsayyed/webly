<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">



</head>
	<body>

		<div class="row" style="margin:50px;">
				  <div class="col-md-6">
				  <h1>Word Frequency Counter</h1>
				  	<form name="calculator" role="form">
				  	   	<div class="col-sm-10">
				  		<label for="exampleInputEmail1">Text Box1</label>
      					<input class="form-control" type="text" id="txt1" placeholder=" " required>
    				</div>
    				<div class="col-sm-10">
				  		<label for="exampleInputEmail1">Text Box2</label>
      					<input class="form-control" type="text" id="txt2" placeholder=" " required>
    				</div>
    				<div class="col-sm-10">
				  		<label for="exampleInputEmail1">Text Box3</label>
      					<input class="form-control" type="text" id="txt3" placeholder=" " required>
    				</div>
    				<div class="col-sm-10">
				  		<label for="exampleInputEmail1">Text Box4</label>
      					<input class="form-control" type="text" id="txt4" placeholder=" " required>
    				</div>
    				<div class="col-sm-10">
				  		<label for="exampleInputEmail1">Text Box5</label>
      					<input class="form-control" type="text" id="txt5" placeholder=" " required>
    				</div>

    				<div class="col-sm-10" style="margin-top:10px;">
    					<button type="submit" class="btn btn-success" onclick="calculate()">Calculate</button>
    				</div>
					</form>			
	  </div>



				  <div class="col-md-6">
				  		<h1>Calculated Values :</h1>
				  		<h4 id="total"></h4>
				  		<h4 id="word"></h4>
				  </div>
					</div>
 		

	</body>
	<script  type="text/javascript">
	function calculate(){
		var text="";
		for(var i=1;i<=5;i++){
			text1=" "+document.getElementById("txt"+i).value;
			text=text.replace(/\./g,' ');
		 text =text.concat(text1);
		 text=text.toLowerCase();

		 
		 
		}
		 
		var counter=[];
		var res = text.split(" ");
		var result = calculate1(res);
		result1=result[0].length;
		document.getElementById("total").innerHTML = "Total Number of Unique Words ."+result1;
				document.getElementById("word").innerHTML = result[0]+" "+result[1];
		alert("ok");
		//document.write('[' + result[0] + ']<br>[' + result[1] + ']') 
}
		


		function calculate1(text)

		{
		var a=[], b=[], prev;

			text.sort();
			for(var i=1;i<=text.length;i++)
			{
				if(text[i] !==prev)
				{
					a.push(text[i]);
					b.push(1);
				}else
				{
	 				b[b.length-1]++;
				}
				prev=text[i];
			}

			return [a,b];

		}

	

</script>

</html>