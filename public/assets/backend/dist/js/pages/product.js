
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
              url:"/admin/addproduct",
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
              }
        
              }); 
        
           });

        });

        productTable();
        function productTable(){
            $.ajax({
                url:"/admin/productTable",
                method:"get",
                dataType:"json",
                success:function(data){
                
                        var productList=Object.values(data);
                        var data='';
                        for(var i=0;i<(productList[0].length);i++){
                            data+='<tr><td>'+(i+1)+'</td>';
                            data+='<td>'+productList[0][i].productname+'</td>';
                            data+='<td>'+productList[0][i].productmodel+'</td>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="fas fa-edit nav-icon""></span></button></div>'+'</td></tr>';
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
                e.preventDefault();
                var id=$(this).attr('id');
                $('#addProductButton,#newProductButton').hide();
                $('#updateProductButton,#deleteProductButton').show();
                $.ajax({
                    url:"/admin/editProduct/"+id,
                    method:"get",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#form_result').html('');
                        $('#product_form')[0].reset();
                        $('#addProductButton,#newProductButton').hide();
                        //form display
                        productId=data.product_FormData.id;
                        $('#productHiddenId').val(productId);
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
                        
                    }
                });
            
            });
            
            
            $('#deleteProductButton').click(function(e){
            
                if(!confirm("Do you really want to do this?")) {
                    return false;
                  }
                e.preventDefault();
                $.ajax({
                    url:"/admin/deleteProduct/"+productId,
                    method:"get",
                    dataType:"json",
                    success:function(response)
                    {
                        productId='';          
                        productTable();
                        
                    }
                });
                return false;
            
            });
    
        
          $('#productcode').keyup(function(){
               
            var Text=$('#productcode').val();
           
            var slut=Text.toLowerCase().replace('//g','-').replace(/[^\w-]+/g,'-');
            $(this).val(slut);
            
        });
  
        $('#productcode').keyup(function(){
               
            var Text=$('#productcode').val();
           
            var slut=Text.toLowerCase().replace('//g','-').replace(/[^\w-]+/g,'-');
            $(this).val(slut);
            
        });
        $('#productname').keyup(function(){
               
            var Text=$('#productname').val();
           
            var slut=Text.toLowerCase().replace('//g','-').replace(/[^\w-]+/g,'-');
            $('#productcode').val(slut);
            
        });
  
    