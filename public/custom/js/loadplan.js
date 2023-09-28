jQuery(document).ready(function($) {
"use strict";
	

      // Network Change
      $('#net_id').change(function(){

         // Network id
         var id = $(this).val();

         // Empty the dropdown
         $('#subdata').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getsubdata/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){
            console.log(response);
             var len = 0;
             if(response['data'] != null){
                alert(response['data']);
               len = response['data'].length;
             }

             if(len > 0){
                alert(response.data);
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['data'][i].name;
                 var name = response['data'][i].price;

                 var option = "<option value='"+price+"'>"+name+"</option>"; 

                 $("#subdata").append(option); 
               }
             }

           }
        });
      });
});