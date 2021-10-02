var slide_img = document.getElementsByClassName("slide_img");
var x = 0;
//var list = document.getElementsByClassName("slide_img")[0];
//Đếm số thẻ img trong class có tên slide_img;
//var count = list.getElementsByTagName("img").length;
//var max_width= count*100-100;

var max_width= 500;
//Chuyển sang ảnh phía sau
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
//Quay về ảnh phía trước
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
//Tự động gọi hàm Next() sau 5s
setInterval(function(){
	Next();
},5000);


function click_img(id,src,alt){
	var modal = document.getElementById("myModal");
	var img = document.getElementById("sl_1");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	
	modal.style.display = "block";
	modalImg.src = src;
	captionText.innerHTML = alt;
	
	var span = document.getElementById("click_img");

	span.onclick = function() { 
	  modal.style.display = "none";
	}
}

function users(id,close_id){
	
	var x = document.getElementById(id);
	console.log(x);
	x.style.display = "block";

	var span = document.getElementById(close_id);
	
	span.onclick = function(){
		x.style.display = "none";

		if(id == "upload_sl_img"){
			//tải ảnh song thì load lại trang
			location.reload();
		}
	}
}

function menu_mobile(){
	var menu = document.getElementsByClassName("nav")[0];
	if(menu.style.display != "grid"){
		menu.style.display = "grid";
	}
	else {
		menu.style.display = "none";
	}
}
