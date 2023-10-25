$(document).ready(function(){
    // $("#liPostCategory,#liPostCategoryMobile").click(function(e){
    //     e.preventDefault();
    //     hideAll();
    //     $("#pageCategory").show();
// alert('hi');
        $("#addUserButton").show();
        $('#user_form').on('submit', function(event){
            event.preventDefault();
             $.ajax({
              url:"/admin/adduser",
              method:"POST",
              data: new FormData(this),
              contentType: false,
              cache:false,
              processData: false,
              dataType:"json",
              success:function(data)
              {

                // alert('hi');
               var html = '';
               if(data.errors)
               {
                html = '<div class="alert alert-danger">';
                for(var count = 0; count < data.errors.length; count++)
                {
                 html += '<p>' + data.errors[count] + '</p>';
                }
                html += '</div>';
               }
               if(data.success)
               {
                html = '<div class="alert alert-success">' + data.success + '</div>';
                //form reset
                $('#user_form')[0].reset();
                //form display
                $('#useraccount').val(data.user_FormData.useraccount);
                $('#name').val(data.user_FormData.name);
                $('#userid').val(data.user_FormData.userid);
                $('#login_pword').val(data.user_FormData.login_pword);
                $('#transaction_pword').val(data.user_FormData.transaction_pword);
                $('#balance').val(data.user_FormData.balance);
                $('#member').val(data.user_FormData.member);
              
                userId=data.user_FormData.id;
                $('#userHiddenId').val(userId);
                $('#addUserButton').hide();
                $('#updateUserButton,#newUserButton').show();
                userTable();
               }
               $('#form_result').html(html);
              }
        
              }); 
        
           });

        });

       userTable();
        function userTable(){
            $.ajax({
                url:"/admin/userTable",
                method:"get",
                dataType:"json",
                success:function(data){
                
                        var userList=Object.values(data);
                        var data='';
                        for(var i=0;i<(userList[0].length);i++){
                            data+='<tr><td>'+(i+1)+'</td>';
                            data+='<td>'+userList[0][i].name+'</td>';
                            data+='<td>'+userList[0][i].useraccount+'</td>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+userList[0][i].id+'" class="user-edit-class">';
                            data+='<span class="fas fa-edit nav-icon""></span></button></div>'+'</td></tr>';
                        }
                             $('#userTbody,#userTable').html(data);
                      }
                });
            }
            $('#newUserButton').click(function(e){
                e.preventDefault();
                $('#user_form')[0].reset();
              userId='';
                $('#userHiddenId').val(userId);
                $('#form_result').html('');
                $('#addUserButton').show();
                $('#updateUserButton,#newUserButton,#deleteUserButton').hide();
            
            });
            
            $(document).on('click','.user-edit-class',function(e){
                e.preventDefault();
                var id=$(this).attr('id');
                $('#addUserButton,#newUserButton').hide();
                $('#updateUserButton,#deleteUserButton').show();
                $.ajax({
                    url:"/admin/editUser/"+id,
                    method:"get",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#form_result').html('');
                        $('#user_form')[0].reset();
                        $('#addUserButton,#newUserButton').hide();
                        //form display
                        productId=data.product_FormData.id;
                        $('#userHiddenId').val(productId);
                        $('#useraccount').val(data.user_FormData.useraccount);
                        $('#name').val(data.user_FormData.name);
                        $('#userid').val(data.user_FormData.userid);
                        $('#login_pword').val(data.user_FormData.login_pword);
                        $('#transaction_pword').val(data.user_FormData.transaction_pword);
                        $('#balance').val(data.user_FormData.balance);
                       
                        $('#member').val(data.user_FormData.member);
                        
                    }
                });
            
            });
            
            
            $('#deleteusertButton').click(function(e){
            
                if(!confirm("Do you really want to do this?")) {
                    return false;
                  }
                e.preventDefault();
                $.ajax({
                    url:"/admin/deleteUser/"+userId,
                    method:"get",
                    dataType:"json",
                    success:function(response)
                    {
                        userId='';          
                       userTable();
                        
                    }
                });
                return false;
            
            });
    
        
          $('#userid').keyup(function(){
               
            var Text=$('#userid').val();
           
            var slut=Text.toLowerCase().replace('//g','-').replace(/[^\w-]+/g,'-');
            $(this).val(slut);
            
        });
  
        $('#userid').keyup(function(){
               
            var Text=$('#userid').val();
           
            var slut=Text.toLowerCase().replace('//g','-').replace(/[^\w-]+/g,'-');
            $(this).val(slut);
            
        });
        $('#name').keyup(function(){
               
            var Text=$('#name').val();
           
            var slut=Text.toLowerCase().replace('//g','-').replace(/[^\w-]+/g,'-');
            $('#userid').val(slut);
            
        });
  
    