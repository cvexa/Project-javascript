var count = 0;
$('#about_btn').css({'margin-top':'12%','margin-left':'-15%','display':'inline-block','position':'absolute'});
$(" .boxA, .boxB, .boxC ").mouseover(function(){
   $(this).css({
	"color":"#fff",
	"background-color":"#009e2d",
	
	"border-radius":"8px",
   });

});
$(" .boxA, .boxB, .boxC ").mouseout(function(){
   $(this).css({
	"color":"#656565",
	"background-color":"#fff",
   });
   $('#about_btn').css({'background-color':'#009e2d'});
  
$(this).css("margin-top","0");
count = 0;
});


$(" .boxA, .boxB, .boxC ").click(function(){
count++;
// $('#about_btn').css({'margin-left':'50px','display':'inline-block','margin-top':'1%'});
$(this).attr('unselectable', 'on');
$(this).css('user-select', 'none');
$(this).on('selectstart', false);
	
$(this).css("margin-top","-20px");

$('#about_btn').css({'background-color':'#FF0000'});


if (count > 1) {
	$(this).css("margin-top","0");
	count = 0;
	// $('#about_btn').css({'margin':'auto','display':'none'});
}
});