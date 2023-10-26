$(document).ready(function(){
    // $("#liPostCategory,#liPostCategoryMobile").click(function(e){
    //     e.preventDefault();
    //     hideAll();
    //     $("#pageCategory").show();
// alert('hi');
        $("#addRiskButton").show();
        $('#risk_form').on('submit', function(event){
            event.preventDefault();
             $.ajax({
              url:"/admin/addRisk",
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
                $('#risk_form')[0].reset();
                //form display
                $('#guaranteed_time').val(data.risk_FormData.guaranteed_time);
                $('#steady_time').val(data.risk_FormData.steady_time);
                $('#win_ratio').val(data.risk_FormData.win_ratio);
                $('#designated_client_losses').val(data.risk_FormData.designated_client_losses);
                $('#customer_profit').val(data.risk_FormData.customer_profit);
                $('#risk_control').val(data.risk_FormData.risk_control);
                $('#risk_probability').val(data.risk_FormData.risk_probability);
              
                riskId=data.risk_FormData.id;
                $('#riskHiddenId').val(riskId);
                $('#addRiskButton').hide();
                $('#updateRiskButton,#newRiskrButton').show();
                riskTable();
               }
               $('#form_result').html(html);
              }
        
              }); 
        
           });

        });

      riskTable();
        function riskTable(){
            $.ajax({
                url:"/admin/riskTable",
                method:"get",
                dataType:"json",
                success:function(data){
                
                        var riskList=Object.values(data);
                        var data='';
                        for(var i=0;i<(riskList[0].length);i++){
                            data+='<tr><td>'+(i+1)+'</td>';
                            data+='<td>'+riskList[0][i].guaranteed_time+'</td>';
                            data+='<td>'+riskList[0][i].steady_time+'</td>';
                            data+='<td>'+'<div class="option-box"><class="option-list"><button type="button" data-text="View recored" id="'+riskList[0][i].id+'" class="risk-edit-class">';
                            data+='<span class="btn btn-blue"></span></button></div>'+'</td></tr>';
                        }
                             $('#riskTbody,#riskTable').html(data);
                      }
                });
            }
            $('#newRiskButton').click(function(e){
                e.preventDefault();
                $('#risk_form')[0].reset();
              userId='';
                $('#riskHiddenId').val(userId);
                $('#form_result').html('');
                $('#addRiskButton').show();
                $('#updateRiskButton,#newRiskButton,#deleteRiskButton').hide();
            
            });
            
            $(document).on('click','.risk-edit-class',function(e){
                // alert('hi')
                e.preventDefault();
                var id=$(this).attr('id');
                $('#addRiskButton,#newRiskButton').hide();
                $('#updateRiskButton,#deleteRiskButton').show();
                $.ajax({
                    url:"/admin/editRisk/"+id,
                    method:"get",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#form_result').html('');
                         $('#risk_form')[0].reset();
                        $('#addRiskButton,#newRiskButton').hide();
                        //form display
                      riskId=data.data.id;
                       $('#guaranteed_time').val(data.data.guaranteed_time);
                       $('#steady_time').val(data.data.steady_time);
                       $('#win_ratio').val(data.data.win_ratio);
                       $('#designated_client_losses').val(data.data.designated_client_losses);
                       $('#customer_profit').val(data.data.customer_profit);
                       $('#risk_control').val(data.data.risk_control);
                       $('#risk_probability').val(data.data.risk_probability);
                     
                    }
                });
            
            });
            
            
            $('#deleteRiskButton').click(function(e){
            
                if(!confirm("Do you really want to do this?")) {
                    return false;
                  }
                e.preventDefault();
                $.ajax({
                    url:"/admin/deleteRisk/"+riskId,
                    method:"get",
                    dataType:"json",
                    success:function(response)
                    {
                        riskId='';          
                        riskTable();
                        
                    }
                });
                return false;
            
            });
    
        
        