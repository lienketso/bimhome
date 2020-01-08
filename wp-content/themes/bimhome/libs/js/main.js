 $(document).ready(function(){      
      //
      $(document).on('click', '.viewvideo', function(){  
           var button_id = $(this).attr("id"); 
           var content = $(this).attr("data-content");
           $("#videohot").append(content); 
           $("#imgHot").hide(); 
           
      });

	});