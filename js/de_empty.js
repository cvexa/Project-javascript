var counter = 0;
var counter2 = 0;
$("#btn_go").on("click",function() {
     // $('#final').html('<img src="img/a.gif" />');


 var max_small = 122;
  var min_small = 97;
  var min_big = 65;
  var max_big = 90;

 var element, element2, convert, result;
    



    var a = document.getElementById("text").value;
    var b = document.getElementById("shift").value;
    var final = " ";
  
    if (a === "") {
    $("#final").text("Enter some text...");
    $("#final").css({"display":"block",
                 "color":"#FF0000"});
    
   counter2 = 1;
    }else if(b.length > 2){
    $("#final").text("Enter max-shift of [25]");
    $("#final").css({"display":"block",
                 "color":"#FF0000"});
    counter2 = 4;
    }else if (b > 25) {
      $("#final").text("Enter max-shift of [25]");
    $("#final").css({"display":"block",
                 "color":"#FF0000"});
    counter2 = 5;
    }else if(b === "" || b === "0"){
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
    // console.log(parseB);
    if (parseC === 32 ||parseC === 33 ||parseC === 63 ||parseC === 64 ||parseC === 44 ||parseC === 46) {
    convert = parseC;
    result = String.fromCharCode(convert);
	final += result;
    }else if (parseC >= min_small && parseC <= max_small) {
      convert = parseC -= parseB;
   if (convert < min_small) {
   var dif = Number(min_small) - Number(convert);
    // console.log(dif);
    var de = Number(max_small + 1) - Number(dif);
    // console.log(de);
    var minus = String.fromCharCode(de);
    // console.log(minus);
    final += minus;
    
  }else{
result = String.fromCharCode(convert);
   final += result;
  }
}else if (parseC >= min_big && parseC <= max_big) {
      convert2 = parseC -= parseB;
 
  


  if (convert2 < min_big) {
    var dif2 = Number(min_big) - Number(convert2);
    // console.log(dif2);
    var de2 = Number(max_big + 1) - Number(dif2);
    // console.log(de2);
    var minus2 = String.fromCharCode(de2);
    // console.log(minus2);
    final += minus2;
    
  }else{
result2 = String.fromCharCode(convert2);
   final += result2;
  }

 


  }
}
}
 // console.log(final);

if (counter2 > 0) {

  
}else{

element = document.getElementById("final").innerHTML += "Decrypted text with "+ b + " shift :"+ final;
element2 = document.getElementById("final").style.color="#85c1a4";
$("#final").css("display","block");
 $("#page").css({"background-image":"url(css/c.png)",
       "background-repeat": "no-repeat",
       "background-attachment": "fixed",
       "background-position": "center",
       });
counter++;

 if (counter > 1 ) {
       $("#page").css({
       "background-image":"url(css/c.png)",
       "background-repeat": "no-repeat",
       "background-attachment": "fixed",
       "background-position": "center",
        });
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

    // $("#final").load("inc/content.php");
    $("#final").css("display","none");
    $('#text').attr("placeholder", "Enter some text...");
    $('#text').val("");
    $('#shift').attr("placeholder", "Enter some shift...");
    $('#shift').val("");

}



