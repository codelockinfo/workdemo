

$(document).ready(function(){
    $("#register").click(function(event){
            event.preventDefault();
            var formData= $("#register_fom").serialize();
         $.ajax({
            url:'insert.php',
            method:'POST',
            data:formData,
            success:function(data){
                var data =JSON.parse(data);
                console.log(data);
                if(data === 'success'){
                     $("#register_fom")[0].reset();
                     window.location.href = 'index.php';
                }else{
                if(data.name !== null && data.name !== undefined && data.name !== ''){
                     $('#nameerr').text(data.name);
                }else
                 {
                    $('#nameerr').text('');
                 }
                 if(data.email!== null && data.email!== undefined && data.email!==''){
                        $("#emailerr").text(data.email);
                }else
                {
                     $("#emailerr").text('');
                }
                if(data.password!== null && data.password!==undefined && data.password!==''){
                     $("#passworderr").text(data.password);
                }else{
                     $("#passworderr").text('');
                 }
                if(data.contact!== null && data.contact!==undefined && data.contact!==''){
                        $("#contact_er").text(data.contact);
                }else{
                     $("#contact_er").text('');
                 }
                   
               }
            }       
        })
    });
$("#index").click(function(event){
    event.preventDefault();
    var formData = $("#index_fm").serialize();
    $.ajax({
        url: 'login.php',
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function(data) {
       
                if (data === 'success') {
                    $("#index_fm")[0].reset();
                    window.location.href = 'dashboard.php';
                } else if (data === 'Invalid email or password') {
                    alert(data); // Example handling of error message
                } else
                 {
                 
                    if(data.email!== null && data.email!== undefined && data.email!==''){
                        $("#emailerr").text(data.email);
                    }else
                    {
                        $("#emailerr").text('');
                    }
                    if(data.password!== null && data.password!==undefined && data.password!==''){
                        $("#passworderr").text(data.password);
                    }else{
                        $("#passworderr").text('');
                    }
                }
        }
       
       
       
    });
});
$("#add").click(function(event){
    event.preventDefault();
    var formData= $("#add_emly").serialize();
 $.ajax({
    url:'add_employe.php',
    method:'POST',
    data:formData,
    success:function(data){
        var data =JSON.parse(data);
        console.log(data);
        if(data === 'success'){
             $("#add_emly")[0].reset();
             window.location.href = 'view_employe.php';
        }else{
             
            if(data.name !== null && data.name !== undefined && data.name !== ''){
                $('#nameerr').text(data.name);
            }else
            {
               $('#nameerr').text('');
            }
           if(data.email!== null && data.email!== undefined && data.email!==''){
               $("#emailerr").text(data.email);
           }else
           {
               $("#emailerr").text('');
           }
           if(data.password!== null && data.password!==undefined && data.password!==''){
               $("#passworderr").text(data.password);
           }else{
               $("#passworderr").text('');
           }
           if(data.contact!== null && data.contact!==undefined && data.contact!==''){
               $("#contact_er").text(data.contact);
           }else{
               $("#contact_er").text('');
           }
           if(data.address!== null && data.address!==undefined && data.address!==''){
            $("#address_er").text(data.contact);
        }else{
            $("#address_er").text('');
        }
        }
    }       
})
});
    
    
    $(document).on('click','.delt', function(event){
        event.preventDefault();
        id=$(this).data('id');
        console.log(id);
        $.ajax({
            url:'delete.php',
            method:'POST',
            data:{id,id},
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
                    window.location.href = 'view_employe.php';
                    
                 
                },
            });
        });
    });
   
});
function getdata(){
    $.ajax({
        url:'select.php',
        method:'POST',
        success:function(data){
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
            $("#contact").val(data['contact']);
            $("#address").val(data['address']);
        }
    })
}