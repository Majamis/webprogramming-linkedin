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
      // set an on click on the button
     //window.setInterval(function(){
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get("index.php/home/notification", function (time) {

        //var size=Object.keys(myObject).length;

          // update the textarea with the time
        var myObject = eval('(' + time + ')');
		var size=Object.keys(myObject).length;
		var html = "";

			for (var i=0;i<size;i++)
			{ 
				$(".detail-link").html(myObject[i].personal_note);
				$(".participants").html(myObject[i].fname + ' ' + myObject[i].lname);

				document.getElementById("photo_thumb").src=myObject[i].picture;

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
