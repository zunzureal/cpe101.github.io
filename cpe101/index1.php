<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css"/>
    <title>Cookie Clicker | 0</title>
</head>
<body>
	<div class="saving">
		<button class="import" onclick="game.saving.openBox('import')">Import</button>
		<button class="export" onclick="game.saving.openBox('export')">Export</button>
	  <button class="export wipe" onclick="game.saving.wipeSave()">Wipe Save</button>
	</div>
	<div class="importExportBox">
		<div>
			<textarea id="saveBox" maxlength="5000"></textarea>
			<button onclick="game.saving.closeBox()">Close</button>
		</div>
	</div>
	<div class="cookieContainer">
		<b class="cookieDisplay">0</b></br>
		cps : <b class="cpsDisplay">0</b> | cpc : <b class="cpcDisplay">0</b>
		<button class="cookieButton"><img src="images/bitcoin.png"/></button>
	</div>
	<div class="shopContainer">
		<div class="shopList"></div>
		<div class="shop"></div>
	</div>
	<li>Cookies : <b class="cookieDisplay">0</b></li>
	<li>Cookies per click : <b class="cpcDisplay">0</b></li>
	<li>Cookies per sec : <b class="cpsDisplay">0</b></li>
	<li>Earned : <b class="earnedDisplay">0</b></li>
	<li>Spent : <b class="spentDisplay">0</b></li>
	<li>Clicked : <b class="clickedDisplay">0</b></li>
	<script src="base64.js"></script>
	<script src="game.js"></script>
</body>
</html>