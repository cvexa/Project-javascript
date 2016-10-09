function myFunction() {

    var a = document.getElementById("text").value;
    var b = document.getElementById("shift").value;
    var final = " ";

    if (a === "") {
    	alert('Please enter some text ....');
    }else if(b === "" || b === "0"){
    	alert('Please enter some shift ....');
    }else{

   for (var i = 0;i <= a.length - 1;i++) {
    var c = a[i].charCodeAt(0);
    var parseC = parseInt(c);
    // console.log(parseC);
    var parseB = parseInt(b);
    if (parseC === 32) {
    var convert = parseC;
    var result = String.fromCharCode(convert);
	final += result;
    }else{
	convert = parseC += parseB;
	result = String.fromCharCode(convert);
	final += result;
	// alert(result);
	}
}
}
 // console.log(final);


var element = document.getElementById("final").innerHTML += "Encrypted text with "+ b + " shift :"+ final;
var element2 = document.getElementById("final").style.color="#85c1a4";

// window.location.reload();


}
function refresh(){
	element = document.getElementById("final").innerHTML = " ";
	window.location.reload();

}