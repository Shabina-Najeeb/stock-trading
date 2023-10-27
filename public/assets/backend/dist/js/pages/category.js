$(document).ready(function(){
    // $("#liPostCategory,#liPostCategoryMobile").click(function(e){
    //     e.preventDefault();
    //     hideAll();
    //     $("#pageCategory").show();
// alert('hi');
        $("#addCategoryButton").show();
        $('#category_form').on('submit', function(event){
            event.preventDefault();
             $.ajax({
              url:"/admin/addCategory",
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
                $('#category_form')[0].reset();
                //form display
                $('#categoryname').val(data.user_FormData.categoryname);
                $('#order').val(data.user_FormData.order);
               
                categoryId=data.category_FormData.id;
                $('#categoryHiddenId').val(categoryId);
                $('#addCategoryButton').hide();
                $('#updateCategoryButton,#newCategoryButton').show();
                categoryTable();
               }
               $('#form_result').html(html);
              }
        
              }); 
        
           });

        });

       categoryTable();
        function categoryTable(){
            $.ajax({
                url:"/admin/categoryTable",
                method:"get",
                dataType:"json",
                success:function(data){
                
                        var categoryList=Object.values(data);
                        var data='';
                        for(var i=0;i<(categoryList[0].length);i++){
                            data+='<tr><td>'+categoryList[0][i].order+'</td>';
                            data+='<td>'+categoryList[0][i].categoryname+'</td>';
                        
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+categoryList[0][i].id+'" class="category-edit-class">';
                            data+='<span class="btn btn-blue"></span><gcfxgfgfcx/button></div>'+'</td></tr>';
                            data+='<span class="btn btn-blue"></span>button 2</button></div>'+'</td></tr>';

                        }
                             $('#categoryTbody,#categoryTable').html(data);
                      }
                });
            }
            $('#newCategoryButton').click(function(e){
                e.preventDefault();
                $('#category_form')[0].reset();
              userId='';
                $('#categoryHiddenId').val(userId);
                $('#form_result').html('');
                $('#addCategoryButton').show();
                $('#updateCategoryButton,#newCategoryButton,#deleteCategoryButton').hide();
            
            });
            
            $(document).on('click','.category-edit-class',function(e){
                // alert('hi')
                e.preventDefault();
                var id=$(this).attr('id');
                $('#addCategoryButton,#newCategryButton').hide();
                $('#updateCategoryButton,#deleteCategoryButton').show();
                $.ajax({
                    url:"/admin/editCategory/"+id,
                    method:"get",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#form_result').html('');
                         $('#category_form')[0].reset();
                        $('#addCategoryButton,#newCategoryButton').hide();
                        //form display
                      categoryId=data.data.id;
                      $('#categoryHiddenId').val(categoryId);
                        $('#categoryname').val(data.data.categoryname);
                        $('#order').val(data.data.order);
                        
                       
                    
                        
                    }
                });
            
            });
            
            
            $('#deleteCategoryButton').click(function(e){
            
                if(!confirm("Do you really want to do this?")) {
                    return false;
                  }
                e.preventDefault();
                $.ajax({
                    url:"/admin/deleteCategory/"+categoryId,
                    method:"get",
                    dataType:"json",
                    success:function(response)
                    {
                       categoryId='';          
                       categoryTable();
                        
                    }
                });
                return false;
            
            });
    
        
        