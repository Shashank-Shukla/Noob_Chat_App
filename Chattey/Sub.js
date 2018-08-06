$('.textarea').keyup(function(e){
   if(e.which==13){
       $('.form').submit(function(){
           alert('Sending Message!!');
       });
   } 
});