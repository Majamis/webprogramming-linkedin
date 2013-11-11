
//----------------------Message bar on page load-------------------------

   // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      var html = "";
      var t_html="";
      // set an on click on the button
     //window.setInterval(function(){
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get("index.php/home/notification", function (time) {

        //var size=Object.keys(myObject).length;

          // update the textarea with the time
          t_html=$("#msging").html();
          $("#msging").html("");
    var myObject = eval('(' + time + ')');
		var size=Object.keys(myObject).length;
    var length= 0;
     $("#msging").html(t_html);
		
    $(".message-count").html(size);
			for (var i=0;i<size;i++)
			{ 
        length++;
				$(".detail-link").html(myObject[i].personal_note);
				$(".participants").html(myObject[i].fname + ' ' + myObject[i].lname);

				document.getElementById("photo_thumb").src=myObject[i].thumbnail;

				$(".date").html(myObject[i].time_date);

				html=html + $("#msging").html();
				$("#text").html("Time on the server is:" + myObject[0].picture );
			}

          $("#msging").html(html);
        });
     // }, 5000000000000000000000);
    });


//-----------------search bar on keyup------------------------------
 $( document ).ready(function () {
      // set an on click on the button
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get("webprogramming-linkedin/index.php/getTime", function (time) {
          // update the textarea with the time
          $("#text").html("Time on the server is:" + time);
        });
      });
    });

var prev_html=$("#search_bar").html();
$(document).click(function(){

$('#seach_div').hide();

})

$('#seach_div').hide();

jQuery(function($) {
    $('#main-search-box').keyup (function(e) {
      $('#seach_div').show();
      //alert( "Handler for .change() called." );
      var html="";
      var myObject;
      var size=0;
      var serviceURL = 'index.php/search/index';
      var input = this.value;
      $("#search_bar").html(prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            data: {data: input},
            success: function(data){
               $('#seach_div').hide();
              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
              //alert(size);
          
                $('#seach_div').show();
            //  alert(myObject[0].fname);


          for (var i=0;i<10;i++)
          { 
    
            $(".item-headline").html(myObject[i].fname + ' ' + myObject[i].lname);

            document.getElementById("search_bar_img").src=myObject[i].thumbnail;

            $(".item-subline").html(myObject[i].JTitle);

            html=html + $("#search_bar").html();

          }
           $("#search_bar").html(html);

            //alert(data);   // data printed on echoed on the server side.
            },
            error:function(x,e)
            {
              if(x.status==0){
              alert('You are offline!!\n Please Check Your Network.');
              }else if(x.status==404){
              alert('Requested URL not found.');
              }else if(x.status==500){
              alert('Internel Server Error.');
              }else if(e=='parsererror'){
              alert('Error.\nParsing JSON Request failed.');
              }else if(e=='timeout'){
              alert('Request Time out.');
              }else {
              alert('Unknow Error.\n'+x.responseText);
              }
            },
            dataType: 'html'
          });      
          
      });

    });

/*
if(document.getElementById("results-container"))
{

//--------------Search bar on submit--------------------------
var result_prev_html=$("#results").html();
$(document).ready(function(){
jQuery(function($) {
      var html="";
      var myObject;
      var size=0;
      var serviceURL = 'index.php/search/index';
      var input =$("#main-search-box").val();
      
      $("#results").html(result_prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            data: {data: input},
            success: function(data){

              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
            
              for (var i=0;i<10;i++)
          { 
    
            $(".title").html(myObject[i].fname + ' ' + myObject[i].lname);
            $(".title").attr("href","index.php/common/page/profile/" + myObject[i].UserId);

            document.getElementById("search_profile_img").src=myObject[i].thumbnail;

            $(".description").html(myObject[i].JTitle);

            html=html + $("#results").html();

          }
           $("#results").html(html);

            //alert(data);   // data printed on echoed on the server side.
            },
            error:function(x,e)
            {
              if(x.status==0){
              alert('You are offline!!\n Please Check Your Network.');
              }else if(x.status==404){
              alert('Requested URL not found.');
              }else if(x.status==500){
              alert('Internel Server Error.');
              }else if(e=='parsererror'){
              alert('Error.\nParsing JSON Request failed.');
              }else if(e=='timeout'){
              alert('Request Time out.');
              }else {
              alert('Unknow Error.\n'+x.responseText);
              }
            },
            dataType: 'html'
          });     
          
      });

});
}
*/
//----------------------profile page---------//


if(document.getElementById("results-container"))
{

//--------------Search bar on submit--------------------------
var result_prev_html=$("#results").html();
$(document).ready(function(){
jQuery(function($) {
      var html="";
      var myObject;
      var myObject2;
      var size=0;
      var serviceURL = 'index.php/search/index';
      var input =$("#main-search-box").val();
      var checkURL = 'index.php/search/is_connection';

      $("#results").html(result_prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            data: {data: input},
            async:   false,
            success: function(data){
              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
            
              for (var i=0;i<10;i++)
          { 

    
            $(".title").html(myObject[i].fname + ' ' + myObject[i].lname);
            $(".title").attr("href","index.php/common/page/profile/" + myObject[i].UserId);

            document.getElementById("search_profile_img").src=myObject[i].thumbnail;

            $(".description").html(myObject[i].JTitle);

            $.ajax({
              type: "POST",
              dataType: "json",
              async:   false,
              url:  checkURL,
              data: {data: myObject[i].UserId},
              success: function(data2){
            is_true = "";     
            is_true = data2;
            if(is_true == "true")
            {
              //alert(is_true);
              $(".primary-action").attr("href","index.php/common/page/profile/" + myObject[i].UserId);
              $(".primary-action").html("Message");
            }
            else
            {
              $(".primary-action").attr("href","index.php/common/page/send_invite/" + myObject[i].UserId);
              $(".primary-action").html("Connect");
            }
          
          }
          });
            html=html + $("#results").html();

          }
           $("#results").html(html);

            //alert(data);   // data printed on echoed on the server side.
            },
            error:function(x,e)
            {
              if(x.status==0){
              alert('You are offline!!\n Please Check Your Network.');
              }else if(x.status==404){
              alert('Requested URL not found.');
              }else if(x.status==500){
              alert('Internel Server Error.');
              }else if(e=='parsererror'){
              alert('Error.\nParsing JSON Request failed.');
              }else if(e=='timeout'){
              alert('Request Time out.');
              }else {
              alert('Unknow Error.\n'+x.responseText);
              }
            },
            dataType: 'html'
          });     
          
      });

});
}