<!doctype html>
<html onContextMenu="return false" onSelectStart="return false">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Index</title>
	<style type="text/css">
		* {
			outline:none;
			transition-duration: 0.25s;
			-webkit-tap-highlight-color: rgba(255,0,0,0.5);
			-webkit-font-smoothing: antialiased;
		}
		body {
			-webkit-touch-callout: none;
			text-align: center;
			font-family: "Helvetica", "Arial", "黑体";
			overflow-x: hidden;
			cursor: default;
		}
		a:link,
		a:visited {
			color: #FFF;
			text-decoration: none;
			font-size: 2em;
			border: none;
		}	
		.barrage {
			position: fixed;
			animation: barrage 10s infinite linear;
			top: 8em;
			color: #FFF;
			text-shadow: 0 0 0.5em #000;
			font-size: 2em;
			cursor: default;
			opacity: 0;
			z-index: 999;
			white-space: nowrap;
			text-overflow: ellipsis;
			font-family: "Consolas", "Helvetica", "Arial", "黑体";
			font-weight: bold;
		}	
		.barrage:hover {
			transform: scale(1.5);
		}
		.pad {
			margin:auto;
			width:16em;
			text-align: center;
		}
		embed {
			float:left;
			margin:auto;
		}
		.panel {
			width: auto;
			height:1em;
			opacity:1;
			padding: 0.5em;
			float: left;
			margin: auto;
		}
		@keyframes barrage {
			from {
				left: 110%;
				opacity: 1;
			}
			to {
				left: -50%;
				opacity: 1;
			}
		}
	</style>
	<style>
		red {
			color:#F00;
			text-shadow: 0 0 0.2em #000;
		}
		green {
			color:#0F0;
			text-shadow: 0 0 0.2em #000;
		}
		blue {
			color:#0EF;
			text-shadow: 0 0 0.2em #000;
		}
		yellow {
			color:#FF0;
			text-shadow: 0 0 0.2em #000;
		}
		orange {
			color:#F60;
			text-shadow: 0 0 0.2em #000;
		}
		pink {
			color:#F0F;
			text-shadow: 0 0 0.2em #000;
		}
		f_big {
			transform: scale(1.2);
			display: inline-block;
		}
		f_small {
			transform: scale(0.5);
			display: inline-block;
		}
		f_ghost {
			text-shadow: 0 0 0.2em #FFF;
			color: #FFF;
		}
		f_reverse {
			display: inline-block;
			transform: rotateY(180deg);
		}
	</style>
	<style>
		.txtfield {
			font-size: 1.2em;
			text-align: center;
			border-style: solid;
			margin-top: 1em;
			border-color: gray;
			width: 30%;
			height: 2em;
		}
		.txtfield:focus {
			border-color: #09F;
			box-shadow: 0 0 1em #09F;
		}
		.button {
			height: 2em;
			background: linear-gradient(#09F, #05A);
			width: 4;
			color: white;
			border-radius: 0.2em;
			box-shadow: 0 0 0.5em #000, 0 0 0em #09F inset;
			border-style: hidden;
			font-size: 1.5em;
			text-shadow: 0 0 0.5em #000;
		}
		.button:hover {
			box-shadow: 0 0 2em #000, 0 0 1em #09F inset;
			transform: scale(1.1);
		}
		.button:active {
			box-shadow: 0 0 1em #000, 0 0 2em #09F inset;
		}
		.button:disabled {
			background: linear-gradient(#EEE, #888);
		}
		.button:disabled:hover {
			background: linear-gradient(#EEE, #888);
			box-shadow: 0 0 0.5em #000, 0 0 0em #09F inset;
			transform: none;
		}
	</style>
	<script>
		
		function ref() {
			document.getElementById("tmp").value="<";
			if(document.getElementById("c_black").checked==true) {
				document.getElementById("tmp").value+="black";
			}
			if(document.getElementById("c_red").checked==true) {
				document.getElementById("tmp").value+="red";
			}
			if(document.getElementById("c_green").checked==true) {
				document.getElementById("tmp").value+="green";
			}
			if(document.getElementById("c_blue").checked==true) {
				document.getElementById("tmp").value+="blue";
			}
			if(document.getElementById("c_yellow").checked==true) {
				document.getElementById("tmp").value+="yellow";
			}
			if(document.getElementById("c_orange").checked==true) {
				document.getElementById("tmp").value+="orange";
			}
			if(document.getElementById("c_pink").checked==true) {
				document.getElementById("tmp").value+="pink";
			}
			document.getElementById("tmp").value+="><";
			document.getElementById("tmp").value+=document.getElementById("fx").value;
			document.getElementById("tmp").value+=">";
			document.getElementById("tmp").value+=document.getElementById("bge").value;
			document.getElementById("tmp").value+="</";
			document.getElementById("tmp").value+=document.getElementById("fx").value;
			document.getElementById("tmp").value+="></";
			if(document.getElementById("c_black").checked==true) {
				document.getElementById("tmp").value+="black";
			}
			if(document.getElementById("c_red").checked==true) {
				document.getElementById("tmp").value+="red";
			}
			if(document.getElementById("c_green").checked==true) {
				document.getElementById("tmp").value+="green";
			}
			if(document.getElementById("c_blue").checked==true) {
				document.getElementById("tmp").value+="blue";
			}
			if(document.getElementById("c_yellow").checked==true) {
				document.getElementById("tmp").value+="yellow";
			}
			if(document.getElementById("c_orange").checked==true) {
				document.getElementById("tmp").value+="orange";
			}
			if(document.getElementById("c_pink").checked==true) {
				document.getElementById("tmp").value+="pink";
			}
			document.getElementById("tmp").value+=">";
		}
		function showb( str ) {
			if ( str == undefined || str == ' ' ) return 0;
			var bd = document.getElementById( "body" );
			var x = Math.random() * 5 + 10;
			var y = Math.random() * (window.innerHeight-32)
			bd.innerHTML += '<div class="barrage" id="b" style="top:' + y + 'px;animation-duration:' + x + 's;animation-delay:' + Math.random() * 5 + 's;">' + str + '</div>';
			console.log( 'done:'+ str );
		}
		function aaa() {
			var blist = "<?php echo file_get_contents("test.txt"); ?>";
			var tmp, temp1 = 0,
				temp2, temp3;
			for ( i = 0; i < blist.length; i++ ) {
				if ( blist[ i ] != ' ' ) {
					if ( temp1 == 0 ) {
						tmp = i;
						temp1 = 1;
					}
				} else {
					var t = '';
					for ( j = tmp; j <=i; j++ ) {
						t += blist[ j ];
					}
					showb( t );
					console.log('showb');
					temp1 = 0;
					tmp++;
				}
			}
		}
		window.onload = function () {
			aaa();
		}
	</script>
</head>
<body id="body">
		<form action="<?php if(strtr($_POST["barrage"], array(' '=>'')))file_put_contents("test.txt",strtr($_POST["temp"], array(' '=>'　')),FILE_APPEND);if(strtr($_POST["barrage"], array(' '=>'')))file_put_contents("test.txt"," ",FILE_APPEND); ?>" method="post" id="sendbarrage">
		<input onBlur="ref()" onChange="ref()" type="text" name="barrage" placeholder="Say something..." class="txtfield" id="bge" maxlength="16">
		<input type="text" name="temp" class="txtfield" id="tmp" hidden>
		<input type="submit" value="Send" class="button" id="snd">
	</form>
<div class="pad">
<div class="panel">
	<form>
	<input onclick="ref()" name="color" id="c_black" class="palette" type="radio" c="black" checked>
	<label for="c_black">　</label>
	<input onclick="ref()" name="color" id="c_red" class="palette" type="radio" c="red">
	<label for="c_red">　</label>
	<input onclick="ref()" name="color" id="c_green" class="palette" type="radio" c="green">
	<label for="c_green">　</label>
	<input onclick="ref()" name="color" id="c_blue" class="palette" type="radio" c="blue">
	<label for="c_blue">　</label>
	<input onclick="ref()" name="color" id="c_yellow" class="palette" type="radio" c="yellow">
	<label for="c_yellow">　</label>
	<input onclick="ref()" name="color" id="c_orange" class="palette" type="radio" c="orange">
	<label for="c_orange">　</label>
	<input onclick="ref()" name="color" id="c_pink" class="palette" type="radio" c="pink">
	<label for="c_pink">　</label>
	</form>
</div>

<div class="panel">
<select onChange="ref()" id="fx">
<option value="f_normal">Normal</option>
<option value="f_big">Big</option>
<option value="f_small">Small</option>
<option value="f_ghost">Ghost</option>
<option value="f_reverse">Reverse</option>
</select>
</div>
</div>
</body>
</html>