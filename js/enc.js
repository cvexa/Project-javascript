var counter = 0;
var counter2 = 0;
$("#btn_go").on("click",function() {
counter2 = 0;

 var element, element2, convert, result;
    



    var a = document.getElementById("text").value;
    var b = document.getElementById("shift").value;
    var final = " ";
  
    if (a === "") {
    $("#final").text("Enter some text...");
    $("#final").css({"display":"block",
                 "color":"#FF0000"});
    
   counter2 = 1;
    }
    // else if (b > 31) {
    //      $("#final").text("Enter some valid shift (=< 30)...");
    // $("#final").css({"display":"block",
    //              "color":"#FF0000"});
    // counter2 = 2;
    // }
    else if(b === "" || b === "0"){
    $("#final").text("Enter some valid shift...");
    $("#final").css({"display":"block",
                 "color":"#FF0000"});
    counter2 = 3;
    }else{

   for (var i = 0;i <= a.length - 1;i++) {
    var c = a[i].charCodeAt(0);
    var parseC = parseInt(c);
    // console.log(parseC);
    var parseB = parseInt(b);
    if (parseC === 32 ||parseC === 33 ||parseC === 63 ||parseC === 64 ||parseC === 44 ||parseC === 46) {
    convert = parseC;
    result = String.fromCharCode(convert);
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

if (counter2 > 0) {
 
  
}else{

element = document.getElementById("final").innerHTML += "Encrypted text with "+ b + " shift :"+ final;
element2 = document.getElementById("final").style.color="#85c1a4";
$("#final").css("display","block");
counter++;

 if (counter > 1 ) {

    counter = 0;
       // $("#final").css("display","none");
    // $('#text').attr("placeholder", "Enter some text...");
    // $('#text').val("");
    // $('#shift').attr("placeholder", "Enter some shift...");
    // $('#shift').val("");
      $('#final').css("display","none");
      $('#final').val("");
      $('#final').text("");
   }

}

// window.location.reload();
//         var counter = 0;
//    $("#btn").click(function(){
//     counter+= 1;

// });
   
  
}
);
function refresh(){
	// element = document.getElementById("final").innerHTML = " ";
	window.location.reload();
    $("#final").css("display","none");
    $('#text').attr("placeholder", "Enter some text...");
    $('#text').val("");
    $('#shift').attr("placeholder", "Enter some shift...");
    $('#shift').val("");

}


