var slide_img = document.getElementsByClassName("slide_img");
var x = 0;
//var list = document.getElementsByClassName("slide_img")[0];
//Đếm số thẻ img trong class có tên slide_img;
//var count = list.getElementsByTagName("img").length;
//var max_width= count*100-100;

var max_width = 0;

function Width_sl(n){
	max_width = n*100-100;
}
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

function insert(button_close,id){
	var span = document.getElementsByClassName(button_close)[0];
	var x = document.getElementsByClassName(id)[0];

	console.log(location.href);

	if(x.style.display !="block"){
		x.style.display = "block";
		span.innerHTML="-";
	}
	else{
		x.style.display = "none";
		span.innerHTML="+";
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

function about(){
	var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");
	
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
     } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}

function menu_admin(id,email){
	location.assign("admin.php?email="+email+"&tab="+id);
}

function current_page(id){
	$(id).css("background", "#66fcf1");
	$(id).css("color", "#000");
}

function search(a,b,c) {
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById(a);
	filter = input.value.toUpperCase();
	table = document.getElementById(b);
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
	  td = tr[i].getElementsByTagName("td")[c];
	  if (td) {
		txtValue = td.textContent || td.innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1) {
		  tr[i].style.display = "";
		} else {
		  tr[i].style.display = "none";
		}
	  }       
	}
}

function Display_update(id,name,img,note){
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value= id;
	var _name = document.getElementById("header_update_sl");
	_name.value=name;
	var _img = document.getElementById("file_choice");
	_img.value=img;
	var _note = document.getElementById("note_update_sl");
	_note.value=note;
}

function Hide_update(){
	document.getElementById("update_sl").reset();
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="none";
}