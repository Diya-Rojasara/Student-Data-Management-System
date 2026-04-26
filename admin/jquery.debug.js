$(document).ready(function(event){
	
	$("#cwsn").attr("disabled",true);
	$("#mstream").attr("disabled",true);
	$("#res").attr("disabled",true);
	
	$("#mark").attr("disabled",true);
	$("#text").attr("disabled",true);
	$("#uni").attr("disabled",true);
	$("#tran").attr("disabled",true);
	$("#bi").attr("disabled",true);
	$("#hos").attr("disabled",true);
	$("#esc").attr("disabled",true);
	$("#mob").attr("disabled",true);
	
	
});
	
//if field is blank then displaying error

$('#dob').blur(function(){
$(this).each(function() {
if(!$(this).val()){
$(this).next().text("Field can't be blank");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;
			
          
}
else
{
	$(this).next().text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
}
		
		
    });
});
window.addEventListener( "pageshow", function ( event ) {
     var perfEntries = performance.getEntriesByType("navigation");
     if (perfEntries[0].type === "back_forward") {
       location.reload();
     }
	 
});
//heighlighting the fields
$('#form *').filter(':input:not(:checkbox):not(:radio)').on("focus", function() {
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 4px lightblue");
});

//to heighlight checkbox
$('#form *').filter(':input[type="checkbox"]').on("focus", function() {
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 4px 1px lightblue");
});
//to remove style from checkbox
$('#form *').filter(':input[type="checkbox"]').on("blur", function() {
$(this).css("border-color", "");
$(this).css("box-shadow", "");

});
//to heighlight the radiobutton
$('#form *').filter(':input[type="radio"]').on("focus", function() {
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 4px 1px lightblue");
});
//to remove style from radiobutton
$('#form *').filter(':input[type="radio"]').on("blur", function() {
$(this).css("border-color", "");
$(this).css("box-shadow", "");
});
//validating student name
var minLength = 2;

$(document).ready(function(e){
$('#sname').on('keydown keyup change', function(e){

var key = e.which;


if ((key<65 || key>90) && (key<97 || key>122) && (key!=37) && (key!=39) && (key!=32) && (key!=17) && (key!=18) && (key!=9) && (key!=16) && (key!=20) && (key!=91) && (key!=93) && (key!=8) && (key!=46) && (key!=35)) 
{
    e.preventDefault();
  
$('#sname1').text("only letters are allowed");
$("#sname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
return false;
}

var charLength = $(this).val().length;
var pos=$(this).val().indexOf(' ',0);

if(charLength < minLength || pos==1){
$('#sname1').text("Student's Name minimum 2 letters");
$("#sname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

        }
else{
  $('#sname1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
        }

    });
});
//validating gender
$(document).ready(function(){
$('#gender').on('blur',function() {
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
});
});
//validating sid

var maxsid=18;
$(document).ready(function(){
$('#sid').on('keydown keyup change', function(){

var charsid = $(this).val().length;
if(charsid>maxsid || charsid<maxsid){
$('#sid1').text("It should be of 18 characters");
$("#sid1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

        }
else
{

var i;
var flag=0;
for (i = 0; i < array.length; ++i) 
{
    if($("#sid").val()==array[i])
	{
		$("#sid1").text("Student Id already exists!");
		$("#sid1").css("color","red");
		$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
flag=1;
break;
	}
	
}
if(flag==0)
{
	$('#sid1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
 
}

 
        }

    });

});            


//validating mother name
var minLength = 2;

$(document).ready(function(e){
$('#mname').on('keydown keyup change', function(e){

var key = e.which;


if ((key<65 || key>90) && (key<97 || key>122) && (key!=37) && (key!=39) && (key!=32) && (key!=17) && (key!=18) && (key!=9) && (key!=16) && (key!=20) && (key!=91) && (key!=93) && (key!=8) && (key!=46) && (key!=35)) 
{
    e.preventDefault();
  
$('#mname1').text("only letters are allowed");
$("#mname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
return false;
}

var charLength = $(this).val().length;
var pos=$(this).val().indexOf(' ',0);

if(charLength < minLength || pos==1){
$('#mname1').text("Mother's Name minimum 2 letters");
$("#mname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

        }
else{
  $('#mname1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
        }

    });
});

//validating father name
var minLength = 2;

$(document).ready(function(e){
$('#fname').on('keydown keyup change', function(e){

var key = e.which;


if ((key<65 || key>90) && (key<97 || key>122) && (key!=37) && (key!=39) && (key!=32) && (key!=17) && (key!=18) && (key!=9) && (key!=16) && (key!=20) && (key!=91) && (key!=93) && (key!=8) && (key!=46) && (key!=35)) 
{
    e.preventDefault();
  
$('#fname1').text("only letters are allowed");
$("#fname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
return false;
}

var charLength = $(this).val().length;
var pos=$(this).val().indexOf(' ',0);

if(charLength < minLength || pos==1){
$('#fname1').text("Father's Name minimum 2 letters");
$("#fname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

        }
else{
  $('#fname1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
        }

    });
});


//validating guardian name
var minLength = 2;

$(document).ready(function(e){
$('#gname').on('keydown keyup change', function(e){

var key = e.which;


if ((key<65 || key>90) && (key<97 || key>122) && (key!=37) && (key!=39) && (key!=32) && (key!=17) && (key!=18) && (key!=9) && (key!=16) && (key!=20) && (key!=91) && (key!=93) && (key!=8) && (key!=46) && (key!=35)) 
{
    e.preventDefault();
  
$('#gname1').text("only letters are allowed");
$("#gname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
return false;
}

var charLength = $(this).val().length;
var pos=$(this).val().indexOf(' ',0);

if(charLength < minLength || pos==1){
$('#gname1').text("Guardian's Name minimum 2 letters or can be blank");
$("#gname1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

        }
else{
  $('#gname1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
        }

    });
});

//on blur from guardian name
$('#gname').blur(function(){
$(this).each(function() {
if(!$(this).val()){
  $(this).next().text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
  
}

		
    });
});
//validating aadhar
var maxanum=12;
$(document).ready(function(){
$('#anum').on('keydown keyup change', function(){

var charsid = $(this).val().length;
if(charsid>maxanum || charsid<maxanum){
$('#anum1').text("It should be of 12 characters");
$("#anum1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

        }
else
{
var i1;
var flag1=0;
for (i = 0; i < array2.length; ++i) 
{
    if($("#anum").val()==array2[i])
	{
		$("#anum1").text("Aadhaar number already exists!");
		$("#anum1").css("color","red");
		$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
flag1=1;
break;
	}
	
}
if(flag1==0)
{
	$('#anum1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
 
}

}
    });
});
//validating address
var maxaddr=10;
$(document).ready(function(){
$('#addr').on('keydown keyup change', function(){

var charsid = $(this).val().length;
var incorrect = /\s{2}/.test($(this).val());
if(charsid<maxaddr || incorrect){
$('#addr1').text("at least 10 characters and multiple spaces are not allowed");
$("#addr1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

}

else
{
	
	
	$("#addr1").text('');
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 	
	
}
    });
});
//validating pincode
var maxpin=6;
$(document).ready(function(){
$('#pin').on('keydown keyup change', function(){

var charsid = $(this).val().length;
if(charsid<maxpin || charsid>maxpin){
$('#pin1').text("pincode length 6 numbers");
$("#pin1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

}

else
{
	
	
	$("#pin1").text('');
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 	
	
}
    });
});
//validating mobileno

$(document).ready(function(){
$('#mnum').on('keydown keyup change', function(){
var regex = /^[6-9]\d{9}$/;
var this1=$(this).val();
if(regex.test(this1)){
$("#mnum1").text('');
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 	
	
}

else
{
	$('#mnum1').text("Mobile number should be of 10 length");
$("#mnum1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

	
	
}
    });
});
//validating alternate mobile no
$(document).ready(function(){
$('#amnum').on('keydown keyup change', function(){
var regex = /^[6-9]\d{9}$/;
var this1=$(this).val();
if(!regex.test(this1)){
$('#amnum1').text("Alternate Mobile number should be of 10 length or can be blank");
$("#amnum1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 	
	
}

else
{
	
$("#amnum1").text('');
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
	
	
}
    });
});
//on blur from alternate mobile no
$('#amnum').blur(function(){
$(this).each(function() {
if(!$(this).val()){
  $(this).next().text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
  
}
});
});
//on blur from e-mail
$('#email').blur(function(){
$(this).each(function() {
if(!$(this).val()){
  $(this).next().text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
  
}
});
});
//validating mother tongue
$(document).ready(function(){
$('#mtongue').on('blur',function() {
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
});
});
//validating social category
$(document).ready(function(){
$('#sc').on('blur',function() {
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
});
});
//validating minority group
$(document).ready(function(){
$('#mg').on('blur',function() {
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
});
});
//disable or enable cwsn_type
$("#Yes").click(function() {
                        $("#cwsn").attr("disabled", false);
						$("#cwsn").next().text("must be selected");
$("#cwsn").next().css("color","red");
$("#cwsn").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#cwsn").css({"background-image": "url(wrong.png)"});
$("#cwsn").css("background-size","20px");
$("#cwsn").css("background-position-x", "95%");
$("#cwsn").css("background-position-y", "50%");
$("#cwsn").css("background-repeat" ,"no-repeat");
$('#cwsn').on('change blur focus',function() {
var selected1 = $(this).children("option:selected").val();  
if(selected1!="NA")
{
	$(this).next().text('');
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
}
else
{
$(this).next().text("must be selected");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;	
}
});


});

$("#No").click(function() {
                        $("#cwsn").attr("disabled", true);
						$("#cwsn").val("NA").change();
						$("#cwsn").next().text('');
  $("#cwsn").css("border-color", "black");
$("#cwsn").css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$("#cwsn").css({"background-image": "url(correct.png)"});
$("#cwsn").css("background-size","20px");
$("#cwsn").css("background-position-x", "95%");
$("#cwsn").css("background-position-y", "50%");
$("#cwsn").css("background-repeat" ,"no-repeat"); 
						
						
						
});
//disable or enable mstream
$("#oyes").click(function() {
$("#mstream").attr("disabled", false);
$("#mstream").next().text("must be selected");
$("#mstream").next().css("color","red");
$("#mstream").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#mstream").css({"background-image": "url(wrong.png)"});
$("#mstream").css("background-size","20px");
$("#mstream").css("background-position-x", "95%");
$("#mstream").css("background-position-y", "50%");
$("#mstream").css("background-repeat" ,"no-repeat");
 
$('#mstream').on('change blur focus',function() {
var selected = $(this).children("option:selected").val();  
if(selected!="NA")
{
	$(this).next().text('');
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
}
else
{
$(this).next().text("must be selected");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;	
}
});
						
});
$("#ono").click(function() {
                        $("#mstream").attr("disabled", true);
						$("#mstream").val("NA").change();
						$("#mstream").next().text('');
  $("#mstream").css("border-color", "black");
$("#mstream").css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$("#mstream").css({"background-image": "url(correct.png)"});
$("#mstream").css("background-size","20px");
$("#mstream").css("background-position-x", "95%");
$("#mstream").css("background-position-y", "50%");
$("#mstream").css("background-repeat" ,"no-repeat"); 
						
});
//admission number
$('#adnum').on('keydown keyup change', function(){
$(this).each(function() {
if(!$(this).val()){
$(this).next().text("Field can't be blank");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;
			
          
}

else
{

var i;
var flag=0;
for (i = 0; i < array3.length; ++i) 
{
    if($("#adnum").val()==array3[i])
	{
		$("#adnum1").text("Admission number already exists!");
		$("#adnum1").css("color","red");
		$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
flag=1;
break;
	}
	
}
if(flag==0)
{
	$('#adnum1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
 
}

 
        }
		
		
    });
});
//admission date
$('#addate').blur(function(){
$(this).each(function() {
if(!$(this).val()){
$(this).next().text("Field can't be blank");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;
			
          
}
else
{
	$(this).next().text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
}
		
		
    });
});
//validating rollno
var maxrollno=3;
$(document).ready(function(){
$('#rno').on('keydown keyup change', function(){

var charsid = $(this).val().length;
if(charsid>maxrollno || charsid==0 || $(this).val()<1){
$('#rno1').text("rollno length 3 numbers and should not be less than 1");
$("#rno1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

}

else
{

var i;
var flag=0;
for (i = 0; i < array4.length; ++i) 
{
    if($("#rno").val()==array4[i])
	{
		$("#rno1").text("Rollno already exists!");
		$("#rno1").css("color","red");
		$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
flag=1;
break;
	}
	
}
if(flag==0)
{
	$('#rno1').text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
 
}
}
    });
});
//validating status
$(document).ready(function(){
$('#status').on('blur',function() {
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
});
});
//validating lyear
$('#lyear').on('change blur focus',function() {
var selected = $(this).children("option:selected").val(); 
if(cla=="Anganwadi")
					{
						$("#1").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="1")
					{
						$("#Anganwadi").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="2")
					{
						$("#1").attr("disabled",true);
						$("#Anganwadi").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="3")
					{
						$("#1").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#Anganwadi").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="4")
					{
						$("#1").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#Anganwadi").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="5")
					{
						$("#1").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#Anganwadi").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="6")
					{
						$("#1").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#Anganwadi").attr("disabled",true);
						$("#7").attr("disabled",true);
	
					} 
else if(cla=="7")
					{
						$("#1").attr("disabled",true);
						$("#2").attr("disabled",true);
						$("#3").attr("disabled",true);
						$("#4").attr("disabled",true);
						$("#5").attr("disabled",true);
						$("#6").attr("disabled",true);
						$("#Anganwadi").attr("disabled",true);
	
					} 
					
if(selected!="")
{
	
					
					
	$(this).next().text('');
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
}
else
{
$(this).next().text("must be selected");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;	
}
});
//validating appear for exam
$(document).ready(function(){
$('#appear_exam').on('blur',function() {
  $(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 
});
});
//validating appear_for_exam2
$('#appear_exam').on('focus change blur',function() {
var selected = $(this).children("option:selected").val();  
if(selected=="Yes" && $("#res").children("option:selected").val()=="NA")
{
	$("#res").attr("disabled", false);
	$("#mark").attr("disabled", false);
	
$("#res").next().text("must be selected");
$("#res").next().css("color","red");
$("#res").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#res").css({"background-image": "url(wrong.png)"});
$("#res").css("background-size","20px");
$("#res").css("background-position-x", "95%");
$("#res").css("background-position-y", "50%");
$("#res").css("background-repeat" ,"no-repeat");
$("#mark").css("border-color", "");
$("#mark").css("box-shadow", "");

        
$("#mark").css({"background-image": ""});
$("#mark").css("background-size","");
$("#mark").css("background-position-x", "");
$("#mark").css("background-position-y", "");
$("#mark").css("background-repeat" ,""); 
	
}
else if(selected=="No")
{
	
	
	
	
	
	
	$("#res").next().text('');
	$("#mark").next().text('');
	
	$("#res").val("NA").change();
	$("#mark").val("");
						 
	$("#res").css("border-color", "black");
$("#res").css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$("#res").css({"background-image": "url(correct.png)"});
$("#res").css("background-size","20px");
$("#res").css("background-position-x", "95%");
$("#res").css("background-position-y", "50%");
$("#res").css("background-repeat" ,"no-repeat");
$("#mark").css("border-color", "black");
$("#mark").css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$("#mark").css({"background-image": "url(correct.png)"});
$("#mark").css("background-size","20px");
$("#mark").css("background-position-x", "95%");
$("#mark").css("background-position-y", "50%");
$("#mark").css("background-repeat" ,"no-repeat"); 
$("#mark").attr("disabled", true);	
$("#res").attr("disabled", true);
}

});
//result
$('#res').on('focus change blur',function() {
var selected = $(this).children("option:selected").val();  
if(selected!="NA")
{
if(selected=="Fail")
{
$("#mark").attr("disabled", true);
$("#mark").css("border-color", "black");
$("#mark").css("box-shadow", "0px 0px 0px 5px #AFE1AF");
$("#mark").css({"background-image": "url(correct.png)"});
$("#mark").css("background-size","20px");
$("#mark").css("background-position-x", "95%");
$("#mark").css("background-position-y", "50%");
$("#mark").css("background-repeat" ,"no-repeat");
$("#mark").next().text('');
$("#mark").val("");
}
else
{
	
$("#mark").attr("disabled", false);
$("#mark").next().text("Field can't be blank");
$("#mark").next().css("color","red");
$("#mark").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#mark").css({"background-image": "url(wrong.png)"});
$("#mark").css("background-size","20px");
$("#mark").css("background-position-x", "95%");
$("#mark").css("background-position-y", "50%");
$("#mark").css("background-repeat" ,"no-repeat");

if($("#appear_exam").children("option:selected").val()=="No")
{
$("#mark").next().text('');	
}
if($("#mark").val().length>=1)
	{
		$("#mark").next().text('');
		$("#mark").attr("disabled", false);
$("#mark").css("border-color", "");
$("#mark").css("box-shadow", "");
$("#mark").css({"background-image": ""});

var charsid = $("#mark").val();
var st=charsid.toString();

if(charsid<0 || charsid>100 || st.indexOf('.')!=-1){
$('#mark1').text("value should be integer and in range of 0 and 100");
$("#mark1").css("color","red");
$("#mark").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#mark").css("border-color", "black");
$("#mark").css({"background-image": "url(wrong.png)"});
$("#mark").css("background-size","20px");
$("#mark").css("background-position-x", "95%");
$("#mark").css("background-position-y", "50%");
$("#mark").css("background-repeat" ,"no-repeat");

}

else
{
	
	
	$("#mark1").text('');
$("#mark").css("border-color", "black");
$("#mark").css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$("#mark").css({"background-image": "url(correct.png)"});
$("#mark").css("background-size","20px");
$("#mark").css("background-position-x", "95%");
$("#mark").css("background-position-y", "50%");
$("#mark").css("background-repeat" ,"no-repeat"); 	
	
}
		
	}
}
$("#res").next().text('');
$("#res").css("border-color", "black");
$("#res").css("box-shadow", "0px 0px 0px 5px #AFE1AF");
$("#res").css({"background-image": "url(correct.png)"});
$("#res").css("background-size","20px");
$("#res").css("background-position-x", "95%");
$("#res").css("background-position-y", "50%");
$("#res").css("background-repeat" ,"no-repeat");

}
else if(selected=="NA")
{

$("#mark").css("border-color", "");
$("#mark").text("");
$("#mark").css("box-shadow", "");
$("#mark").css({"background-image": ""});
$("#mark").css("background-size","");
$("#mark").css("background-position-x", "");
$("#mark").css("background-position-y", "");
$("#mark").css("background-repeat" ,"");
$("#mark").attr("disabled", false);
$("#res").next().text("must be selected");
$("#res").next().css("color","red");
$("#res").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#res").css({"background-image": "url(wrong.png)"});
$("#res").css("background-size","20px");
$("#res").css("background-position-x", "95%");
$("#res").css("background-position-y", "50%");
$("#res").css("background-repeat" ,"no-repeat");
$("#mark").css("border-color", "");
$("#mark").css("box-shadow", "");
if($("#appear_exam").children("option:selected").val()=="No")
{
$("#res").next().text("");	
}
}

});
//marks

$(document).ready(function(){
$('#mark').on('keydown keyup change', function(){
	
if($("#res").children("option:selected").val()=="NA")
{
$("#res").next().text("must be selected");
$("#res").next().css("color","red");
$("#res").css("box-shadow","0px 0px 0px 5px #FFCCCB");
$("#res").css({"background-image": "url(wrong.png)"});
$("#res").css("background-size","20px");
$("#res").css("background-position-x", "95%");
$("#res").css("background-position-y", "50%");
$("#res").css("background-repeat" ,"no-repeat");
$("#mark").css("border-color", "");
$("#mark").css("box-shadow", "");
}
var charsid = $(this).val();
var st=charsid.toString();

if(charsid<0 || charsid>100 || st.indexOf('.')!=-1){
$('#mark1').text("value should be integer and in range of 0 and 100");
$("#mark1").css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css("border-color", "black");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");

}

else
{
	
	
	$("#mark1").text('');
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");

        
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat"); 	
	
}
if(!$(this).val())
	{
		$(this).css("border-color", "");
$(this).css("box-shadow", "");

        
$(this).css({"background-image": ""});
$(this).css("background-size","");
$(this).css("background-position-x", "");
$(this).css("background-position-y", "");
$(this).css("background-repeat" ,""); 	
	
	}	
    });
});
//attendance
$('#attendance').on('keydown keyup change', function(){
$(this).each(function() {
if(!$(this).val()){
$(this).next().text("Field can't be blank");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 return false;
			
          
}

else if($(this).val()>250 || $(this).val()<0)
{
	$(this).next().text("value should not be more than 250 or less than 0");
$(this).next().css("color","red");
$(this).css("box-shadow","0px 0px 0px 5px #FFCCCB");
$(this).css({"background-image": "url(wrong.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
 
			
}
else
{
	$(this).next().text('');
  
$(this).css({"background-image": "url(correct.png)"});
$(this).css("background-size","20px");
$(this).css("background-position-x", "95%");
$(this).css("background-position-y", "50%");
$(this).css("background-repeat" ,"no-repeat");
$(this).css("border-color", "black");
$(this).css("box-shadow", "0px 0px 0px 5px #AFE1AF");
}
		
		
    });
});
//facility
$("#fyes").click(function() {
$("#text").attr("disabled", false);
                        $("#uni").attr("disabled", false);
                        $("#hos").attr("disabled", false);
                        $("#esc").attr("disabled", false);
                        $("#bi").attr("disabled", false);
                        $("#tran").attr("disabled", false);
                        $("#mob").attr("disabled", false);
						$("#facility").text("atleast one must be selected");
						$("#facility").css("color","red");
$('#text,#uni,#hos,#esc,#bi,#tran,#mob').on('change',function() {
	$(this).each(function(){
if($(this).prop('checked')==true)
{
$("#facility").text("");
}
else if($('#text,#uni,#hos,#esc,#bi,#tran,#mob').is(':checked')==false)
{
$("#facility").text("atleast one must be selected");
$("#facility").css("color","red");	
}
	});
});	
});
						
$("#fno").click(function() {
	$('#text').prop('checked', false);
	$('#uni').prop('checked', false);
	$('#hos').prop('checked', false);
	$('#esc').prop('checked', false);
	$('#bi').prop('checked', false);
	$('#tran').prop('checked', false);
	$('#mob').prop('checked', false);
	
                        $("#text").attr("disabled", true);
                        $("#uni").attr("disabled", true);
                        $("#hos").attr("disabled", true);
                        $("#esc").attr("disabled", true);
                        $("#bi").attr("disabled", true);
                        $("#tran").attr("disabled", true);
                        $("#mob").attr("disabled", true);
						
						$("#facility").text('');
  
						
});


//disabling the submit button

$('#form').on('submit',function(e){
	$("#form :disabled").removeAttr('disabled');
	

});



             
            
                
