<?php
include_once("includes/header.html");

?>


	<div id="page" class="container">
		<div class="title">
			<h2>Decryption</h2>
			<span class="byline">Enter some text to decrypt, and shift :</span> </div>
			<p id="ex">Example: s kw ohkwzvo (!) | 10 </p>
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
 	<input id="shift" type="number" name="shift" placeholder="Enter some shift as number..." max="25" maxlength="2">
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
<a href="encryption.php"><button id="inc" type = "button"  class = "button">ENCRYPTION</button></a>
</p>			
		  <div class="bonus"> 

<b>PROOF : </b><br>
http://practicalcryptography.com/ciphers/caesar-cipher/ <br>
<b>Examples : </b>
<ul>
  <li>X sxs p vgtpi ydq ! (15)</li>
  <li>dggggggggggggggd (18)</li>
  <li>iujkxy iujotm iujk (6)</li>
</ul>
</div><!--  end of bonus  -->
	</div>
</div>

	<script src="js/de.js"></script>
<script>
 $("#page").css({
       "background-image":"url(css/cc.png)",
       "background-repeat": "no-repeat",
       "background-attachment": "fixed",
       "background-position": "center",
        });
</script>
<?php
include_once("includes/footer.html");
?>