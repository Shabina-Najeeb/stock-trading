$(document).ready(function(){
  

        productTable();
        function productTable(){
            $.ajax({
                url:"/admin/productTable",
                method:"get",
                dataType:"json",
                success:function(data){
                    var data='';
                    var productList=Object.values(data);
                    data += '<tr><th>ID</th><th>Name</th><th>Code</th><th>Homepage</th><th>OpenDay</th><th>Range</th><th>Minimun Risk</th><th>Maximumm Risk</th></tr>';
                     
                      
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
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-red"></span></button></div>'+'</td></tr>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+productList[0][i].id+'" class="product-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                        }
                             $('#productlistTbody,#produclistTable').html(data);
                      }
                });
            }
          
        
      
  
    }); 





    // $(document).ready(function() {
    //     $.ajax({
    //         url: 'getData.php',
    //         type: 'GET',
    //         dataType: 'json',
    //         success: function(data) {
    //             // Create and populate the data table
    //             var table = '<table>';
    //             table += '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';
    //             $.each(data, function(index, item) {
    //                 table += '<tr>';
    //                 table += '<td>' + item.id + '</td>';
    //                 table += '<td>' + item.name + '</td>';
    //                 table += '<td>' + item.email + '</td>';
    //                 table += '</tr>';
    //             });
    //             table += '</table>';
    //             $('#data-container').html(table);
    //         },
    //         error: function() {
    //             alert('Error fetching data');
    //         }
    //     });
    // });