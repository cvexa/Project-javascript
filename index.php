<?php
include_once("includes/header.html");
?>
<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Chose what to do : </h2>
				<!-- <span class="byline">Proin gravida porttitor accumsan</span>  --></div>
			<ul class="actions">
				<li><a href="encryption.php" class="button">Encryption</a></li>
				<li><a href="#" class="button">Decryption</a></li>
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
			<li><a href="#" class="button">Try it !</a></li>
		</ul>
	</div>
</div>
<?php
include_once("includes/footer.html");
?>