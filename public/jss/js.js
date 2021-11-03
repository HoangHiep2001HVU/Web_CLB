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
	var img = document.getElementById(id);
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

function menu_admin(id){
	location.assign("admin.php?tab="+id);
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

function Display_update_sl(id,name,img,note){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	
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
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="none";
}

function Display_update_general(id,name,type,note,file){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _type = document.getElementById("type_update");
	_type.value=type;
	var _id = document.getElementById("id_update");
	_id.value= id;
	var _name = document.getElementById("header_update");
	_name.value=name;
	var _file = document.getElementById("file_choice");
	_file.value=file;
	var _note = document.getElementById("note_update");
	_note.value=note;
}

function Display_update_group(id,name,leader,link,img){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value= id;
	var _name = document.getElementById("name_update");
	_name.value=name;
	var _leader = document.getElementById("leader_update");
	_leader.value = leader;
	var _link = document.getElementById("link_leader_update");
	_link.value = link;
	var _img_leader = document.getElementById("img_leader_old");
	_img_leader.value = img;
}

function Display_update_even(id,id_group,header,description,detail,file,start,end){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value= id;
	var _group = document.getElementById("group_update");
	_group.value= id_group;
	var _header = document.getElementById("header_update");
	_header.value= header;
	var _description = document.getElementById("description_update");
	_description.value= description;
	var _note = document.getElementById("note_update");
	_note.value= detail;
	var _file_choice = document.getElementById("file_choice");
	_file_choice.value= file;
	var _start_day = document.getElementById("start_day_update");
	_start_day.value= start;
	var _end_day = document.getElementById("end_day_update");
	_end_day.value= end;
}

function Display_update_contact(id,method,link,file){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value= id;
	var _method = document.getElementById("method_update");
	_method.value= method;
	var _file_choice = document.getElementById("logo_choice");
	_file_choice.value= file;
	var _link = document.getElementById("contact_update");
	_link.value= link;
}

function Display_update_user(id,name,email,birthday,_class,sex,file,role){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value = id;
	var _name = document.getElementById("name_update");
	_name.value = name;
	var _brithday = document.getElementById("birthday_update");
	_brithday.value = birthday;
	var _email = document.getElementById("email_update");
	_email.value = email;
	var _class_up = document.getElementById("_class_update");
	_class_up.value = _class;
	var _sex = document.getElementById("_gender_update");
	_sex.value = sex;
	var _file = document.getElementById("file_choice");
	_file.value = file;
	var _role = document.getElementById("role_update");
	_role.value = role;
}

function Display_update_topic(id,topic,note){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value = id;
	var _name = document.getElementById("name_topic_update");
	_name.value = topic;
	var _note = document.getElementById("note_topic_update");
	_note.value = note;
}

function Display_update_question(id,id_topic,question,note){
	var x = document.getElementsByClassName("upload")[0];
	x.style.display = "none";
	var up= document.getElementsByClassName("update_data")[0];
	up.style.display="block";

	var _id = document.getElementById("id_update");
	_id.value = id;
	var _name = document.getElementById("name_question_update");
	_name.value = question;
	var topic = document.getElementById("id_topic_update");
	topic.value = id_topic;
	var _note = document.getElementById("note_question_update");
	_note.value = note;
}