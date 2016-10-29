function myFunction() {
    var element, element2;
    var counter = 0;



    var a = document.getElementById("text").value;
    var b = document.getElementById("shift").value;
    var final = " ";

    if (a === "") {
    	$("#final").text("Enter some text...");
        counter++;

    }else if(b === "" || b === "0"){
    	$("#final").text("Enter some shift...")
        counter++; 
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




element = document.getElementById("final").innerHTML += "Encrypted text with "+ b + " shift :"+ final;
element2 = document.getElementById("final").style.color="#85c1a4";
$("#final").css("display","block");




// window.location.reload();
//         var counter = 0;
//    $("#btn").click(function(){
//     counter+= 1;

// });
   
//    if (counter > 1 ) {
//       $('#final').val('');
//       $('#final').css("display","none");
//    }

}
function refresh(){
	// element = document.getElementById("final").innerHTML = " ";
	window.location.reload();
    $("#final").css("display","none");
    $('#text').attr("placeholder", "Enter some text...");
    $('#text').val("");
    $('#shift').attr("placeholder", "Enter some shift...");
    $('#shift').val("");

}

