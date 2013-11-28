
//----------------------Message bar on page load && message inbox-------------------------

   // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      var html = "";
      var t_html="";
      var html_invi = "";
      var t_html_invi="";
      // set an on click on the button
     //window.setInterval(function(){
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get("index.php/home/notification", function (time) {

        //var size=Object.keys(myObject).length;

          // update the textarea with the time
          t_html=$("#msging").html();
          $("#msging").html("");
          if(document.getElementById("invitations")){
          t_html_invi=$("#replicate_conn").html();
          $("#replicate_conn").html("");}
    var myObject = eval('(' + time + ')');
		var size=Object.keys(myObject).length;
    var length= 0;
    if(document.getElementById("invitations")){
    $("#replicate_conn").html(t_html_invi);}
     $("#msging").html(t_html);
		
    $(".message-count").html(size);
			for (var i=0;i<size;i++)
			{ 
        length++;
				$(".detail-link").html(myObject[i].personal_note);
				$(".participants").html(myObject[i].fname + ' ' + myObject[i].lname);
				//document.getElementById("photo_thumb").src=myObject[i].thumbnail;
        $(".notification-photo").attr("src",myObject[i].thumbnail);
        $(".inbox-item").attr("data-gid",myObject[i].userid);
        $(".chk").attr("value",myObject[i].userid);
        $(".accept").attr("href","index.php/home/notification/accept_connection_process/" + myObject[i].userid);
        $(".ignore").attr("href","index.php/home/notification/ignore_connection_process/" + myObject[i].userid);
				$(".date").html(myObject[i].time_date);

				html=html + $("#msging").html();
        if(document.getElementById("invitations")){
         html_invi=html_invi + $("#replicate_conn").html();}
				//$("#text").html("Time on the server is:" + myObject[0].picture );
			}

          $("#msging").html(html);
          if(document.getElementById("invitations")){
          $("#replicate_conn").html(html_invi);}

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
      var e = document.getElementById("main-search-category");
      var input2 = e.options[e.selectedIndex].value;
      $("#search_bar").html(prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            data: {data: input, data2:input2},
            success: function(data){
               $('#seach_div').hide();
              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
              //alert(size);
          
                $('#seach_div').show();
            //  alert(myObject[0].fname);


          for (var i=0;i<size && i<10;i++)
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
 $('#results-container').hide();
jQuery(function($) {
      var html="";
      var myObject;
      var myObject2;
      var size=0;
      var serviceURL = 'index.php/search/index';
      var input =$("#main-search-box").val();
      var e = document.getElementById("main-search-category");
      var input2 = e.options[e.selectedIndex].value;
      var checkURL = 'index.php/search/is_connection';

      $("#results").html(result_prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            data: {data: input ,data2: input2},
            async:   false,
            success: function(data){
              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
              $('#results-container').show();
              for (var i=0;i<size && i<10;i++)
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
//------------ALUMINI-----------------------
if(document.getElementById("container-ptc-people-results"))
{
$('#container-ptc-people-results').hide();
var result_prev_html=$("#alumini-cards").html();
$(document).ready(function(){
jQuery(function($) {
      var html="";
      var myObject;
      var myObject2;
      var size=0;
      var serviceURL = 'index.php/search/index_2';
      var checkURL = 'index.php/search/is_connection';

      $("#alumini-cards").html(result_prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            async:   false,
            success: function(data){
              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
            $(".title").html(myObject[0].Company);
              for (var i=0;i<size;i++)
          { 
            
            $(".profile_name2").html(myObject[i].fname + ' ' + myObject[i].lname);
             $(".headline").html(myObject[i].JTitle);
            $(".hoverZoomLink").attr("src",myObject[i].thumbnail);
           //  $(".first").html(myObject[i].country);
           
            $(".profile-link").attr("href","index.php/common/page/profile/" + myObject[i].UserId);

           

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
              $(".connect").attr("href","index.php/common/page/profile/" + myObject[i].UserId);
              $(".connect").html("Message");
            }
            else
            {
              $(".connect").attr("href","index.php/common/page/send_invite/" + myObject[i].UserId);
              $(".connect").html("Connect");
            }
          
          }
          });
            html=html + $("#alumini-cards").html();

          }
           $("#alumini-cards").html(html);

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
  $('#container-ptc-people-results').show();
});
}


$('.all').click(function ()
{$("#main-search-category").prop("selectedIndex",0);
  $('.all').attr('selected',"selected");
  $(".people").removeAttr("selected");
   $(".jobs").removeAttr("selected");
    $(".companies").removeAttr("selected");
});

$('.people').click(function ()
{
  $("#main-search-category").prop("selectedIndex",1);
  $('.people').attr('selected',"selected");
   $(".all").removeAttr("selected");
   $(".jobs").removeAttr("selected");
    $(".companies").removeAttr("selected");
});

$('.jobs').click(function ()
{
  $("#main-search-category").prop("selectedIndex",2);
  $('.jobs').attr('selected',"selected");
   $(".people").removeAttr("selected");
   $(".all").removeAttr("selected");
    $(".companies").removeAttr("selected");
});

$('.companies').click(function ()
{
  $("#main-search-category").prop("selectedIndex",3);
  $('.companies').attr('selected',"selected");
   $(".people").removeAttr("selected");
   $(".jobs").removeAttr("selected");
    $(".all").removeAttr("selected");
});

//---------------newsfeed----------------//
if(document.getElementById("feed-nhome"))
{
 // var static_prev_html1=$('.comments_field').html();
var discussion_prev_html=$('.comments_field').html();
var result_prev_html=$("#my-feed-post").html();
//alert(discussion_prev_html);
//$(document).ready(function newsfeed(){
//jQuery(function($) {
  $('.content').hide();
  newsfeed();
 function newsfeed(){
      var html="";
      var html2="";
      var html3="";
      var myObject;
      var myObject2;
      var size=0;
      var serviceURL = 'index.php/search/display_feeds';
      var checkURL = 'index.php/search/display_comments';

      $("#my-feed-post").html(result_prev_html);
    $.ajax({
            type: "POST",
            url:  serviceURL,
            async:   false,
            success: function(data){
              var temp1="";
              temp1 = data;
            
              if(temp1.length != 9)
              {
              myObject = eval('(' + data + ')');
              size=Object.keys(myObject).length;
              $('.content').show();
            $(".title").html(myObject[0].Company);
              for (var i=0;i<size;i++)
          { 
              $('.newsfeed_upload_image').attr("src",myObject[i].picture);
              var pic_istrue=myObject[i].picture;
              if(pic_istrue)
              $('.newsfeed_upload_image').addClass('newsfeed_upload_image_true');

            
              $("#mentions-data").attr("value",myObject[i].id);
                $('.name-newsfeed').html(myObject[i].fname + ' ' + myObject[i].lname);
               $(".newsfeed-photo").attr("src",myObject[i].thumbnail);
               $('.text-newsfeed').html(myObject[i].text);
               $('.nus-timestamp').html(myObject[i].time);
            

           

            

            $.ajax({
              type: "POST",
              dataType: "json",
              async:   false,
              url:  checkURL,
              data: {data: myObject[i].id},
              success: function(data2){
               is_true="";
               is_true = data2;
                html2[i]="";
                html3="";
               if(is_true != 1)
               {
              myObject2 = eval('(' + data2 + ')');
              size2=Object.keys(myObject2).length;

            for(var j=0;j<size2;j++)
            {

              //$('.comments_field').addClass(i+'st');
              //$('.'+i+'st').removeClass('comments_field');
               $('.focus-comment-form').html("Comment ("+ size2+ ")");
               $('.name_comment').html(myObject2[j].fname + ' ' + myObject2[j].lname);
               $(".comment-photo").attr("src",myObject2[j].thumbnail);
               $('.text-comment').html(myObject2[j].text);
               $('.nus-timestamp').html(myObject2[j].time);
               //html2[i]=html2[i] + $('.'+i+'st').html();
               //chtml=$('.comments_field').html();
               //html2[i]=html2[i] + $('.comments_field').html();
               html3=html3+$('.comments_field').html();
            }
          
             //$('.'+i+'st').html(html2);
             //html2="";
            }
            else
               $('.focus-comment-form').html("Comment (0)");
          }
          , dataType: 'html'
        
          });
            $('.comments_field').html(html3);
            html=html + $("#my-feed-post").html();
            //$('.newsfeed_upload_image').removeClass('newsfeed_upload_image_true');
            $('.comments_field').html(discussion_prev_html);
             $('.newsfeed_upload_image').removeClass('newsfeed_upload_image_true');
             //$('.'+i+'st').addClass('comments_field');
             //$('.comments_field').removeClass(i+'st');
          }

           $("#my-feed-post").html(html);
            // for(var i=0;i<size;i++)
          //  $('.'+i+'st').html(html2[i]);

            //alert(data);   // data printed on echoed on the server side.
            }},
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
	  return false;  
      //});
}
}

var changestatus=1;
$("#openstatus").click(function(){
  //sstring='<div id="openstatus" class="menu-basic styled-dropdown open">';
  if(changestatus==1)
  {
  changestatus=0;
  $("#openstatus").addClass('open');
  }
  else if(changestatus==0)
  {
  changestatus=1;
  $("#openstatus").removeClass('open');
  }
  })


$("#secondstatus").mouseover(function(){
  //sstring='<div id="openstatus" class="menu-basic styled-dropdown open">';
  $('#firststatus').removeClass('selected');
  $('#firststatus').removeClass('highlighted');
  $('#secondstatus').addClass('selected');
  $('#secondstatus').addClass('highlighted');
  $('#thirdstatus').removeClass('selected');
  $('#thirdstatus').removeClass('highlighted');
  
  })
$("#thirdstatus").mouseover(function(){
  //sstring='<div id="openstatus" class="menu-basic styled-dropdown open">';
  $('#firststatus').removeClass('selected');
  $('#firststatus').removeClass('highlighted');
  $('#secondstatus').removeClass('selected');
  $('#secondstatus').removeClass('highlighted');
  $('#thirdstatus').addClass('selected');
  $('#thirdstatus').addClass('highlighted');
  
  })
$('#secondstatus').click(function(){
  $('#doc-sharing-visibility').prop('selectedIndex',0);
  document.getElementById('valueofselected').innerHTML="Public";

})
$('#thirdstatus').click(function(){
  $('#doc-sharing-visibility').prop('selectedIndex',1);
  document.getElementById('valueofselected').innerHTML="Connections";

})


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#prevImage').attr('src', e.target.result);
            $('.file-upload-image').addClass('file-upload-image-display');
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#userfile").change(function(){
    readURL(this);
});




function submit_comment(element)
{
  var postData = $(element).serialize();
    var serviceURL = 'index.php/home/newsfeed/submit_comment';
    var text=$('.texta').val();
    var id= $('.nf_id').val();

    $.ajax({
            type: "POST",
            url:  serviceURL,
            async:   false,
            //data: {data: mentions , data2:postText1},
            data:postData ,
            success: function(data){
        }  
      });
  //$('.comments_field').html(discussion_prev_html);
  //$("#my-feed-post").html(result_prev_html);
newsfeed();
return false;
}

function do_upload()
{
    var serviceURL = 'index.php/home/newsfeed/do_upload';
    var text=$('.post-message').val();
    var status= $('#doc-sharing-visibility').prop('value');
    $.ajaxFileUpload({
            enctype: 'multipart/form-data',
            url:  serviceURL,
            async:   false,
            secureuri      :false,
            fileElementId  :'userfile',
            dataType    : 'JSON',
            data:{data: status ,data2: text },
            success: function(data){
              newsfeed();
        }  
      });
   //  $('.comments_field').html(discussion_prev_html);
  //$("#my-feed-post").html(result_prev_html);
return false;
}


  function embedly_call()
  {
        $('.embedly-content').embedly({
          query: { maxwidth: 450, wmode: 'transparent'},
          method: 'after',
          key: '7d4a478575e64017a70ab0babb045bfc'
        });
  }

embedly_call();