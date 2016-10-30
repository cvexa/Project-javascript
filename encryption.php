<?php
include_once("includes/header.html");

?>


	<div id="page" class="container">
		<div class="title">
			<h2>Encryption</h2>
			<span class="byline">Enter some text to encrypt, and shift :</span> </div>
			<p id="ex">Example: How are You today ? | 5 </p>
<!-- 		<p><form id="frm1" action="encryption.php" method="post">
  <p> -->
  	<label for="text">
  		TEXT:
  	</label> 
  	<input id="text" type="text" name="text" placeholder="Enter some text...">
  </p>
 <p>
 	<label for="shift"> 
 		SHIFT:
 	</label> 
 	<input id="shift" type="number" name="shift" placeholder="Enter some shift as number..." max="29" maxlength="2">
 </p>
 
<!-- </form>  -->
 <span id="btn">
  <button id="btn_go" type="button" class="button">Submit</button>
</span>
</p>

<p id = "final">
	
</p>
<button type = "button" onclick = "refresh()" class = "button">REFRESH</button>
<p>

<a href="decryption.php"><button id="de" type = "button"  class = "button">DECRYPTION</button></a>
</p>			
		
	</div>
</div>
	<script src="js/enc.js"></script>
<script>
 $("#page").css({
       "background-image":"url(css/c.png)",
       "background-repeat": "no-repeat",
       "background-attachment": "fixed",
       "background-position": "center",
        });
</script>
<?php
include_once("includes/footer.html");
?>