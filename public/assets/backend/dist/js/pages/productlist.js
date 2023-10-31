
$(document).ready(function(){
    // $("#liPostCategory,#liPostCategoryMobile").click(function(e){
    //     e.preventDefault();
    //     hideAll();
    //     $("#pageCategory").show();
// alert('hi');
        $("#addProductButton").show();
        $('#product_form').on('submit', function(event){
            event.preventDefault();
             $.ajax({
              url:"/admin/addproductlist",
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
                $('#product_form')[0].reset();
                //form display
                $('#productname').val(data.product_FormData.productname);
            
                $('#productcode').val(data.product_FormData.productcode);
                $('#homepage').val(data.product_FormData.homepage);
                $('#producticon').val(data.product_FormData.producticon);
                $('#minimumrisk').val(data.product_FormData.minimumrisk);
                $('#maximumrisk').val(data.product_FormData.maximumrisk);
                $('#randomrange').val(data.product_FormData.randomrange);
                $('#time1').val(data.product_FormData.timeplay1);
                $('#time2').val(data.product_FormData.timeplay2);
                $('#time3').val(data.product_FormData.timeplay3);
                $('#time4').val(data.product_FormData.timeplay4);
                $('#profit1').val(data.product_FormData.profit1);
                $('#profit2').val(data.product_FormData.profit2);
                $('#profit3').val(data.product_FormData.profit3);
                $('#profit4').val(data.product_FormData.profit4);
                $('#loss1').val(data.product_FormData.loss1);
                $('#loss2').val(data.product_FormData.loss2);
                $('#loss3').val(data.product_FormData.loss3);
                $('#loss4').val(data.product_FormData.loss4);
                $('#earningratio').val(data.product_FormData.earningratio);
                $('#floatingratio').val(data.product_FormData.floatingratio);
                $('#monday').val(data.product_FormData.mon);
                $('#tuesday').val(data.product_FormData.tue);
                $('#wednesday').val(data.product_FormData.wed);
                $('#thursaday').val(data.product_FormData.thur);
                $('#friday').val(data.product_FormData.fri);
                $('#satarday').val(data.product_FormData.sat);
                $('#sunday').val(data.product_FormData.sun);
                $('#productnote').val(data.product_FormData.productnote);
              
              
                produtId=data.product_FormData.id;
                $('#productHiddenId').val(productId);
                $('#addProductButton').hide();
                $('#updateProductButton,#newProductButton').show();
                productTable();
               }
               $('#form_result').html(html);
               $('#productTable').show();
               $('#product_form').hide();
              }
        
              }); 
        
           });

        });

        productTable();
        function productTable(){
            $.ajax({
                url:"/admin/productTabledisplay",
                method:"get",
                dataType:"json",
                success:function(data){
                
                        var productList=Object.values(data);
                        var data='';
                        data += '<tr><th>ID</th><th>Product Name</th><th>Product Code</th> <th>Home page Recomentation</th> <th>State</th><th>Random Value</th><th>Minimum Risk Control</th> <th>Maximum Risk Control</th><th>Action</th></tr>';
                     
                        for(var i=0;i<(productList[0].length);i++){
                            data+='<tr><td>'+(i+1)+'</td>';
                            data+='<td>'+productList[0][i].productname+'</td>';
                            data+='<td>'+productList[0][i].productcode+'</td>';
                            data+='<td>'+productList[0][i].homepage+'</td>';
                            data+='<td>'+productList[0][i].earningratio+'</td>';
                            data+='<td>'+productList[0][i].randomrange+'</td>';
                            data+='<td>'+productList[0][i].minimumrisk+'</td>';
                            data+='<td>'+productList[0][i].maximumrisk+'</td>';
                          
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-blue">Edit</span></button></div>'+'</td></tr>';
                        }
                             $('#productTbody,#productTable').html(data);
                      }
                });
            }
            $('#newProductButton').click(function(e){
                e.preventDefault();
                $('#product_form')[0].reset();
               productId='';
                $('#productHiddenId').val(productId);
                $('#form_result').html('');
                $('#addProductButton').show();
                $('#updateProductButton,#newProductButton,#deleteProductButton').hide();
            
            });
            
            $(document).on('click','.product-edit-class',function(e){
                $('#productTable').hide();
                $('#product_form').show();
                e.preventDefault();
                var id=$(this).attr('id');
                $('#addProductButton,#newProductButton').hide();
                $('#updateProductButton,#deleteProductButton').show();
                $.ajax({
                    url:"/admin/editProductlist/"+id,
                    method:"get",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#form_result').html('');
                        // $('#product_form')[0].reset();
                        $('#addProductButton,#newProductButton').hide();
                        //form display
                        productId=data.data.id;
                        $('#productHiddenId').val(productId);
                      
                       
                 $('#productname').val(data.data.productname);
                $('#productcode').val(data.data.productcode);
                $('#homepage').val(data.data.homepage);
                $('#producticon').val(data.data.producticon);
                $('#minimumrisk').val(data.data.minimumrisk);
                $('#maximumrisk').val(data.data.maximumrisk);
                $('#randomrange').val(data.data.randomrange);
                $('#time1').val(data.data.timeplay1);
                $('#time2').val(data.data.timeplay2);
                $('#time3').val(data.data.timeplay3);
                $('#time4').val(data.data.timeplay4);
                $('#profit1').val(data.data.profit1);
                $('#profit2').val(data.data.profit2);
                $('#profit3').val(data.data.profit3);
                $('#profit4').val(data.data.profit4);
                $('#loss1').val(data.data.loss1);
                $('#loss2').val(data.data.loss2);
                $('#loss3').val(data.data.loss3);
                $('#loss4').val(data.data.loss4);
                $('#earningratio').val(data.data.earningratio);
                $('#floatingratio').val(data.data.floatingratio);
                $('#monday').val(data.data.mon);
                $('#tuesday').val(data.data.tue);
                $('#wednesday').val(data.data.wed);
                $('#thursaday').val(data.data.thur);
                $('#friday').val(data.data.fri);
                $('#satarday').val(data.data.sat);
                $('#sunday').val(data.data.sun);
                $('#productnote').val(data.data.productnote);   
                        
                    }
                });
            
            });
            
            
            $('#deleteProductButton').click(function(e){
            
                if(!confirm("Do you really want to do this?")) {
                    return false;
                  }
                e.preventDefault();
                $.ajax({
                    url:"/admin/deleteProductlist/"+productId,
                    method:"get",
                    dataType:"json",
                    success:function(response)
                    {
                        productId='';          
                        productTable();
                         $('#productTable').show();
                    $('#product_form').hide();
                        
                    }
                   
                });
                return false;
            
            });
    
        
         
  
       
    