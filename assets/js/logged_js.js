/*$(document).ready(function()
{
	window.setInterval(function()
	{
		var serviceURL = 'index.php/home/notification/index';
 	$.ajax({
            	type:'Get',
                url: serviceURL,
                data: "varsity_id=",
                contentType: "application/json; charset=utf-8",
                dataType: 'json',
             	success: function(data)
            {     
               alert(data);

            }, 
                error: errorFunc
            });

            function successFunc(data) {  
            alert(data);   
                $("#text").html(data);
            }

            function errorFunc() {
               $("#text").html('error');
            }
    },5000);
});
*/

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




//----------------------------------------
var result_prev_html=$("#results").html();

jQuery(function($) {
    $('#search_button').click (function(e) {
      //alert( "Handler for .change() called." );
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