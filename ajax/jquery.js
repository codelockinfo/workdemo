
$(document).ready(function(){

    $("#button").click(function(event){
         event.preventDefault(); 
            var formData = $("#myfrm").serialize();

                $.ajax({
                    url: 'insert.php',
                    method: 'POST',
                    data:  formData,                              
                  success: function(data){
                    console.log(data);
                        $("#myfrm")[0].reset(); 
                    
                        getdata();
                    }
                });        

    });

    // delete recode
    $(document).on('click','.delt', function(event){
        
       event.preventDefault();
      id = $(this).data('id');
       console.log(id);
       
       $.ajax({
         url:'delete.php',
         method: 'POST',
         data:{id:id},
         success:function(data){
        
            getdata(); 
         }

       })   
       
    })
    $(document).ready(function() {
        $("#update_btn").click(function(event) {
            alert("ok");
            event.preventDefault(); 
            var formData = $("#updateform").serialize();
            $.ajax({
                url: "updaterecode.php",
                method: 'POST',
                data:formData,
                success: function(data) {
                    console.log(data);
                    $("#updateform")[0].reset(); 
                    window.location.href = 'index.php';
                    
                 
                },
                
                
                
            });
        });
    });
    

 
   }); 
// select recode
    function getdata()
    {
    
        $.ajax({
            url:"fetch.php",
            method:'POST',
            success: function(data){
                console.log(data);
               $(".result").html(data);              
            }
        })

    }
  
function fetchdata(id){
    $.ajax({
        url:'update.php',
        method:'POST',
        dataType: "json",
        data:{id,id},
        success:function(data){
            console.log(data);
            $("#name").val(data['name']);
            $("#email").val(data['email']);
            $("#password").val(data['password']);
        


        }
    })
}
    
    

    
    
    
    



