<?php
include_once("includes/header.html");
?>

<script src="js/test1.js"></script>
	<div id="page" class="container">
		<div class="title">
			<h2>Encryption</h2>
			<span class="byline">Enter some text to encrypt, and shift :</span> </div>
			<p>Example: How are You today ? | 5 </p>
		<p><form id="frm1" action="encryption.php" method="post">
  <p>
  	<label for="text">
  		TEXT:
  	</label> 
  	<input id="text" type="text" name="text" placeholder="Enter some text...">
  </p>
 <p>
 	<label for="shift"> 
 		SHIFT:
 	</label> 
 	<input id="shift" type="number" name="shift" placeholder="Enter some shift as number...">
 </p>
  <span id="btn">
  <input type="button" value="Submit" onclick="myFunction()" class="button">
</span>
</form> 
</p>
<p id = "final">
	
</p>
<button type = "button" onclick = "refresh()" class = "button">REFRESH</button>
			
		
	</div>
</div>
	
<?php
include_once("includes/footer.html");
?>