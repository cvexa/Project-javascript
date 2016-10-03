<?php
include_once("includes/header.html");
?>

<script src="js/test1.js"></script>
	<div id="page" class="container">
		<div class="title">
			<h2>Encryption</h2>
			<span class="byline">Enter some text to encrypt, and shift :</span> </div>
			<p>Example: How are You today ? | 5 </p>
		<p> <form id="frm1" action="encryption.php">
  <p>TEXT: <input type="text" name="text"></p>
  <p>SHIFT: <input type="number" name="shift"></p>
  
  <input type="button" onclick="myFunction()" value="Submit" class="button">
</form> </p>

			
		
	</div>
</div>
	
<?php
include_once("includes/footer.html");
?>