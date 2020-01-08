 $(document).ready(function(){      
      //
      $(document).on('click', '.viewvideo', function(){  
           var button_id = $(this).attr("id"); 
           var content = $(this).attr("data-content");
           $("#ifVideo").attr('src' , content); 
           $("#imgHot").hide(); 
           
      });

	});