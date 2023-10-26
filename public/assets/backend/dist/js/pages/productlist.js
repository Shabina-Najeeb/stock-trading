$(document).ready(function(){
  

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
                            data+='<td>'+productList[0][i].productcode+'</td>';
                            data+='<td>'+productList[0][i].homepage+'</td>';
                            data+='<td>'+productList[0][i].mon+'</td>';
                            data+='<td>'+productList[0][i].randomrange+'</td>';
                            data+='<td>'+productList[0][i].minimumrisk+'</td>';
                            data+='<td>'+productList[0][i].maximumrisk+'</td>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            // data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            // data+='<span class="btn btn-red"></span></button></div>'+'</td></tr>';
                            // data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            // data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            // data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            // data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            // data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            // data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            // data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            // data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                        }
                             $('#productTbody,#productTable').html(data);
                      }
                });
            }
          
        
      
  
    }); 