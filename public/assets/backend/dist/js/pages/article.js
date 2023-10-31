$(document).ready(function(){
    // $("#liPostCategory,#liPostCategoryMobile").click(function(e){
    //     e.preventDefault();
    //     hideAll();
    //     $("#pageCategory").show();
//  alert('hi');
        $("#addArticleButton").show();
        $('#article_form').on('submit', function(event){
            event.preventDefault();
             $.ajax({
              url:"/admin/addArticle",
              method:"POST",
              data: new FormData(this),
              contentType: false,
              cache:false,
              processData: false,
              dataType:"json",
              success:function(data)
              {

                alert('hi');
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
                $('#article_form')[0].reset();
                //form display
                $('#article_name').val(data.article_FormData.article_name);
                $('#article_classification').val(data.article_FormData.article_classification);
                $('#whetherto_display').val(data.article_FormData.whetherto_display);
                $('#akeyword').val(data.article_FormData.keyword);
                $('#content').val(data.article_FormData.content);
                

                articleId=data.article_FormData.id;
                $('#articleHiddenId').val(articleId);
                $('#addArticleButton').hide();
                $('#updateArticleButton,#newArticleButton').show();
                articleTable();
               }
               $('#form_result').html(html);
              }
        
              }); 
        
           });

        });

       articleTable();
        function articleTable(){
            $.ajax({
                url:"/admin/articleTable",
                method:"get",
                dataType:"json",
                success:function(data){
                
                        var articleList=Object.values(data);
                        var data='';
                        for(var i=0;i<(articleList[0].length);i++){
                            data+='<tr><td>'+articleList[0][i].article_name+'</td>';
                            data+='<td>'+articleList[0][i].article_classification+'</td>';
                        
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+articleList[0][i].id+'" class="article-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            
                        }
                             $('#articleTbody,#articleTable').html(data);
                      }
                });
            }
            $('#newArticleButton').click(function(e){
                e.preventDefault();
                $('#article_form')[0].reset();
              userId='';
                $('#articleHiddenId').val(userId);
                $('#form_result').html('');
                $('#addArticleButton').show();
                $('#updateArticleButton,#newArticleButton,#deleteArticleButton').hide();
            
            });
            
            $(document).on('click','.article-edit-class',function(e){
                // alert('hi')
                e.preventDefault();
                var id=$(this).attr('id');
                $('#addArticleButton,#newArticleButton').hide();
                $('#updateArticleButton,#deleteArticleButton').show();
                $.ajax({
                    url:"/admin/editArticle/"+id,
                    method:"get",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#form_result').html('');
                         $('#article_form')[0].reset();
                        $('#addArticleButton,#newArticleButton').hide();
                        //form display
                      articleId=data.data.id;
                      $('#articleHiddenId').val(articleId);
                      $('#article_name').val(data.data.article_name);
                      $('#article_classification').val(data.data.article_classification);
                      $('#whetherto_display').val(data.data.whetherto_display);
                      $('#keyword').val(data.data.keyword);
                      $('#content').val(data.data.content);
                        
                       
                    
                        
                    }
                });
            
            });

               
            $('#deleteArticleButton').click(function(e){
            
                if(!confirm("Do you really want to do this?")) {
                    return false;
                  }
                e.preventDefault();
                $.ajax({
                    url:"/admin/deleteArticle/"+articleId,
                    method:"get",
                    dataType:"json",
                    success:function(response)
                    {
                       articleId='';          
                       articleTable();
                        
                    }
                });
                return false;
            
            });
            