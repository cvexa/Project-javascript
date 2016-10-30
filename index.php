<?php
include_once("includes/header.html");
?>
<script type="text/javascript">
	$( document ).ready(
	function start_flash(){
	for (var i = 0; i < 500; i++) {
		$("#logo").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
	}
}
	// $( "#logo" ).onclick = function start_flash()
);
$("#logo").hover(function() {
	$( "#logo" ).stop();
	$( "#logo" ).clearQueue();
	
	$( "#logo" ).css("display","block");
	$( "#logo" ).fadeIn(1000);
});
$("#logo").mouseout(function start_flash2() {
	for (var i = 0; i < 500; i++) {
		$("#logo").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
	}
});

	</script>
	<script type="text/javascript">
	
	$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
</script>
<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Chose what to do : </h2>
				<!-- <span class="byline">Proin gravida porttitor accumsan</span>  --></div>
			<ul class="actions">
				<li><a href="encryption.php" class="button">Encryption</a></li>
				<li><a href="decryption.php" class="button">Decryption</a></li>
			</ul>
		</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>Caesar cipher</h2>
			<span class="byline">From Wikipedia, the free encyclopedia : </span> </div>
		<div id="three-column">
			<div class="boxA">
				<div class="box">
					<p>In cryptography, a Caesar cipher, also known as, the shift cipher, Caesar's code or Caesar shift, is one of the simplest and most widely known encryption techniques.</p>
				</div>
			</div>
			<div class="boxB">
				<div class="box">
					<p>It is a type of substitution cipher in which each letter in the plaintext is replaced by a letter some fixed number of positions down the alphabet.</p>
				</div>
			</div>
			<div class="boxC">
				<div class="box">
					<p>The encryption step performed by a Caesar cipher is often incorporated as part of more complex schemes, and still has modern application in the ROT13 system. </p>
				</div>
			</div>
		</div>
		<ul class="actions">
			<li><a href="https://en.wikipedia.org/wiki/Caesar_cipher" class="button">Read More</a></li>
		</ul>
	</div>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2>Encrypting</h2>
				<span class="byline">Something like this : <br/>
				<i>Caesar cipher using a left rotation of three places :</i></span> </div>
			<p>Plaintext:  THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG <br/>
               Ciphertext: QEB NRFZH YOLTK CLU GRJMP LSBO QEB IXWV ALD </p>
		</div>
		<ul class="actions">
			<li><a href="encryption.php" class="button">Try it !</a></li>
		</ul>
	</div>
	<div id="page" class="container">
		<div class="title">
			<h2>Deciphering</h2>
			<span class="byline">Something like this : <br/>
				<i>Caesar cipher using a left rotation of three places :</i></span> </div>
		<p>Cipher:   XYZABCDEFGHIJKLMNOPQRSTUVW <br/>
		   Plain:    ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
		<ul class="actions">
			<li><a href="decryption.php" class="button">Try it !</a></li>
		</ul>
	</div>
</div>
<?php
include_once("includes/footer.html");
?>