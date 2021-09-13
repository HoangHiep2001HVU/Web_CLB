var slide_img = document.getElementsByClassName("slide_img");
var x = 0;
var list = document.getElementsByClassName("slide_img")[0];
var count = list.getElementsByTagName("img").length;
var max_width= count*100-100;
function Next(){
	if(x <max_width){
		x +=100;
	}
	else{
		x =0;
	}
	for (var i = 0; i < slide_img.length; i++) {
		slide_img[i].style.marginLeft = '-' + x + '%';
	}
}

function Back(){
	if(x ==0){
		x = max_width;
	}
	else{
		x -= 100;
	}
	for (var i = 0; i < slide_img.length; i++) {
		slide_img[i].style.marginLeft = '-' + x + '%';
	}
}