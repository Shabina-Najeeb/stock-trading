
@extends('layouts.common_home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="{{asset('assets/backend/images/favicon.ico')}}">

	<title>Neon | Dashboard</title>

	<link rel="stylesheet" href="{{asset('assets/backend/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/css/font-icons/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/css/neon-core.css')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/css/neon-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/css/neon-forms.css')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/css/custom.css')}}">

	<script src="{{asset('assets/backend/js/jquery-1.11.3.min.js')}}"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			
			
			
			
			
									
        <ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active opened active has-sub">
					<a href="/backend">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					
				</li>

         

                <li class="active opened active has-sub">
					<a href="/admin/producttablelist">
						<i class="entypo-gauge"></i>
						<span class="title">Product Management</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="/admin/producttablelist">
								<span class="title">Product List</span>
							</a>
						</li>
						
					</ul>
                    <ul class="visible">
						<li class="active">
							<a href="/admin/risk">
								<span class="title">Risk Control Management</span>
							</a>
						</li>
						
					</ul>
				</li>
                
                <li class="active opened active has-sub">
					<a href="/admin/order">
						<i class="entypo-gauge"></i>
						<span class="title">Order Management</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Transaction flow</span>
							</a>
						</li>
						
					</ul>
                    <ul class="visible">
						<li class="active">
							<a href="/admin/order_log">
								<span class="title">Closing log</span>
							</a>
						</li>
						
					</ul>
				</li>
                


               
				
                
				
				
				
				
				
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
</br>


<!-- Raw Links -->



<!-- Raw Links -->


</br>
</br>
</br>




<script type="text/javascript">
jQuery( window ).load( function() {
var $table2 = jQuery( "#table-2" );

// Initialize DataTable
$table2.DataTable( {
"sDom": "tip",
"bStateSave": false,
"iDisplayLength": 8,
"aoColumns": [
    { "bSortable": false },
    null,
    null,
    null,
    null
],
"bStateSave": true
});

// Highlighted rows
$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
var $this = $(el),
    $p = $this.closest('tr');

$( el ).on( 'change', function() {
    var is_checked = $this.is(':checked');
    
    $p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
} );
} );

// Replace Checboxes
$table2.find( ".pagination a" ).click( function( ev ) {
replaceCheckboxes();
} );
} );

// Sample Function to add new row
var giCount = 1;

function fnClickAddRow() {
jQuery('#table-2').dataTable().fnAddData( [ '<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4" ] );
replaceCheckboxes(); // because there is checkbox, replace it
giCount++;
}
</script>
                            <a href="/admin/product">
                                
                            <button   type="submitt"value="AddProduct"   name="addproduct" Category class="btn btn-default">Delete Product</button>
                            </a>
                            <a href="/admin/product">


							<button   type="submitt"value="DeleteProduct"   name="deleteproduct" Category class="btn btn-default">Add Product</button>
                          
							</a>

                            
</br>
</br>
</br>


<div>


<table class="table table-bordered table-striped datatable" id="productTable">

<thead>
<h3>Product table</h3>
<tr>

    <th>Refresh</th>
    <th>Product title</th>
    <th>product code</th>
    <th>Homepage Recomentation</th>
    <th>State</th>
    <th>Random value</th>
    <th>Minimum Risk Control</th>
    <th>Maximum Risk Control</th>
    <th>Operate</th>
</tr>
</thead>

<tbody id="productTbody">



</tbody>


</table>
</div>



<div>

<form style="display:none;" role="form" id="product_form" class="form-horizontal form-groups-bordered">
           
           @csrf

<div   class="panel panel-primary" data-collapsed="0">
    
    <div class="panel-heading">
        <div class="panel-title">
          Input Product Details 
        </div>
        
        <div class="panel-options">
            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
        </div>
    </div>
<div class="panel-body">
            
           

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label green-text">Product Name</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="productname" id="productname" placeholder="please enter product name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label green-text">Product Code</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name= "productcode"id="productcode" placeholder="please enter product code">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-1" class="col-sm-3 control-label green-text">Home Page Recomentation</label>
								<!-- <label class="col-sm-6 control-label">Home Page Recomentation</label> -->
                                <div class="col-sm-5">
								
									<select class="form-control" id ="homepage" name="homepage">
										<option>Recomented</option>
										<option>Cancelled</option>
										
									</select>

							</div>
                </div>
                 <div class="col-md-6">
                    <label for="field-1" class="col-sm-3 control-label green-text">Product Icon</label>
                    
                    <div class="col-sm-5">
                        <input type="file" class="form-control"  name= "product_icon"id="product_icon" placeholder="please add product Icon">
                    </div>
                </div>
            </div>
                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-12" class="col-sm-3 control-label green-text">Minimum risk control fluctuation</label>
                    
                  
                        <input type="text" class="form-control" name="minimumrisk"id="minimumrisk" placeholder="please enter details of minimum risk control fluctuation">
              
                </div>
                <div class="col-md-6">
                    <label for="field-12" class="col-sm-3 control-label green-text">Maximum risk control fluctuation</label>
                    
                    
                        <input type="text" class="form-control" name="maximumrisk"  id="maximumrisk" placeholder="please enter details of maximun risk control fluctuation">
                   
                </div>
</div>

           
                
                <div class="form-group">
                    <label for="field-3" class="col-sm-3 control-label green-text">Random fluctuation range</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="randomrange" id="randomrange" placeholder="please enter details of random fluctuation range">
                    </div>
                </div>

              
                    
                      
                <div class="form-group">
                    
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label green-text">Time play interval【1】</label>
                    <input type="text" class="form-control" name = "time1" id="time1" placeholder="please enter details of time play interval">

							</div>
                          
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label green-text">Time play interval【2】</label>

                    <input type="text" class="form-control" name = "time2" id="time2" placeholder="please enter details of time play interval">
                                
							</div>
                           
                    
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label green-text">Time play interval【3】</label>
                    <input type="text" class="form-control" name = "time3" id="time3" placeholder="please enter details of time play interval">
							</div>
                           
                    
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label green-text">Time play interval【4】</label>
                    <input type="text" class="form-control" name = "time4" id="time4" placeholder="please enter details of time play interval">
                                
					</div>
               </div>
              


              
                <div class="form-group">
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Profit and loss ratio [1]</label>
                    
                  
                        <input type="text" class="form-control" name ="profit1"  id="profit1" placeholder="please enter details of profit and loss ratio">
                    
                </div>

         
                <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label green-text">Profit and loss ratio [2]</label>
                    
                   
                        <input type="text" class="form-control" name ="profit2"  id="profit2" placeholder="please enter details of profit and loss ratio">
                   
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Profit and loss ratio [3]</label>
                    
                   
                        <input type="text" class="form-control" name ="profit3"  id="profit3" placeholder="please enter details of profit and loss ratio">
                   
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Profit and loss ratio [4]</label>
                    
                  
                        <input type="text" class="form-control" name ="profit4"  id="profit4" placeholder="please enter details of profit and loss ratio">
              </div>
         </div>

                <div class="form-group">
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Loss ratio [1]</label>
                    
                   
                        <input type="text" class="form-control" name ="loss1"  id="loss1" placeholder="please enter details of loss ratio">
                  
                </div>
                
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Loss ratio [2]</label>
                    
                   
                        <input type="text" class="form-control" name ="loss2"  id="loss2" placeholder="please enter details of loss ratio">
                    
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Loss ratio [3]</label>
                    
                
                        <input type="text" class="form-control" name ="loss3"  id="loss3" placeholder="please enter details of loss ratio">
                    
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label green-text">Loss ratio [4]</label>
                    
             
                        <input type="text" class="form-control" name ="loss4"  id="loss4" placeholder="please enter details of loss ratio">
                    </div>
                </div>
                
                
                
                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-ta" class="col-sm-6 control-label green-text">Earnings floating ratio range</label>
                    
                  
                    <input type="text" class="form-control" name ="earningratio"  id="earningratio" placeholder="please enter details of Earning ratio">
                   
                </div>
                
                <div class="col-md-6">
                    <label for="field-ta" class="col-sm-6 control-label green-text"> Floating ratio range under loss</label>
                    
               
                    <input type="text" class="form-control" name ="floatingratio"  id="floatingratio" placeholder="please enter details of Floating ratio">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-3">
                    
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Monday</label>
                    
                    <input type="text" class="form-control" name ="monday"  id="monday" placeholder="please enter details of monday">
                    
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Tuesday</label>
                    
                    
                    <input type="text" class="form-control" name ="tuesday"  id="tuesday" placeholder="please enter details of tuesday">
                   
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Wednesday</label>
                    
                 
                    <input type="text" class="form-control" name ="wednesday"  id="wednesday" placeholder="please enter details of wednesday">
                  
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Thursday</label>
                    
                 
                    <input type="text" class="form-control" name ="thursday"  id="thursday" placeholder="please enter details of thursday">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Friday</label>
                    
                
                    <input type="text" class="form-control" name ="friday"  id="friday" placeholder="please enter details of friday">
                  
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Satarday</label>
                    
                   
                    <input type="text" class="form-control" name ="satarday"  id="satarday" placeholder="please enter details of satarday">
                   
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label green-text"> Market Opening time Sunday</label>
                    
                   
                    <input type="text" class="form-control" name ="sunday"  id="sunday" placeholder="please enter details of sunday">
                    </div>
                </div>
                

                <div class="form-group">
								<label for="field-ta" class="col-sm-3 control-label green-text">Product note</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" name ="productnote"  id="productnote" placeholder="Textarea"></textarea>
								</div>
							</div>
							
              
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">

                    <input type="hidden" id="productHiddenId" name="productHiddenId">
            
                    <button type="submit" value="Add" id="addProductButton" class="btn btn-success">Save</button>
                    <button type="submit"   value="Update" id="updateProductButton"class="btn btn-orange">Edit</button>
                    <button type="submit"   value="Delete" id="deleteProductButton"class="btn btn-danger">Delete</button>
                    <button type="button" value="Add" id="newProductButton" class="btn btn-blue">New</button>
                    </div>
                </div>
          
            
        </div>
</div>
  </form>
</div>
<br />

<!-- <a href="javascript: fnClickAddRow();" class="btn btn-primary">
<i class="entypo-plus"></i>
Add Row
</a> -->



<br />
<br />
</body>
</html>
<script src="{{asset('assets/backend/dist/js/pages/productlist.js')}}"></script>

@endsection