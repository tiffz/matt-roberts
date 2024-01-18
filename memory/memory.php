<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
<title>Memory</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
<meta http-equiv="Content-Style-Type" content="text/css" /> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<style type="text/css">
*{
	padding:0px;
	margin:0px;
	border:0px;
}

html{
	min-height:100%;
	height: 100%;
	width:100%; 
	padding:0px;
	margin:0px;
	border:0px;
}

body{
	min-height:100%;
	min-width:100%;
	height: 100%;
	padding:0px;
	margin:0px;
	border:0px;
	background: #24a024;
	color: #111;
	font-family:calibri;
	font-size:14px;
	text-align:center;
}

#container{
	width: 1000px; 
	margin: auto;
}

#game{
	width: 100%;
	float: left;
}

#options{
	margin-top: 20px;
	width: 100%;
	float: left;
}

#timer{
	width: 100%; 
	font-size: 2em;
	margin-bottom: 10px;
}

#new-game{
	font-size: 2em;
}

.card{
	margin: 2px;
}

.matched{
	opacity: 0.6;
	filter: alpha(opacity=60);
}
</style>
 
<script type="text/javascript" src="cards.js"></script>
<script type="text/javascript" src="memory.js"></script>

</head> 

<body> 
	<div id="container">
	<a href="../index.html">Back to the main site</a>
		<div id="game"></div>

		<div id="options">
			<div id="timer"></div>

			<table style="width: 300px; margin: auto; text-align: left;">
				<tr>
					<td style="text-align: center;">
						<a href="javascript:;" id="new-game"> New Game</a>
					</td>
					<td>
						<input type="radio" name="num-cards" id="cards-16" value="16" checked /> <label for="cards-16">16 cards</label>
						<br /><input type="radio" name="num-cards" id="cards-24" value="24" /> <label for="cards-24">24 cards</label>
						<br /><input type="radio" name="num-cards" id="cards-48" value="48" /> <label for="cards-48">48 cards</label>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>