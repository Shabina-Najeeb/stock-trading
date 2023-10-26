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

                <li class="has-sub">
					<a href="/admin/product">
						<i class="entypo-doc-text"></i>
						<span class="title">Product Management</span>
					</a>
                    <a href="/admin/productlist">
						<i class="entypo-doc-text"></i>
						<span class="title">Product List</span>
					</a>
                    <a href="/admin/risk">
						<i class="entypo-doc-text"></i>
						<span class="title">Risk Control Management</span>
					</a>
					
				</li>





                <li class="has-sub">
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Order Management</span>
					</a>
                    <ul>
					<li>
							<a href="#">
								<span class="title">Transaction Flow</span>
							</a>
						</li>
                        <li>
							<a href="#">
								<span class="title">Closing Log</span>
							</a>
						</li>
						
					
					</ul>
                   	
				</li>
				
                
				
				
				
				
				
				</li>
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		


<!-- Raw Links -->
<div class="col-md-6 col-sm-4 clearfix hidden-xs">

   

</div>





  
<h2>Add Product</h2>
<br />


<div class="row">
<div class="col-md-12">
    
    <div class="panel panel-primary" data-collapsed="0">
    
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
            
            <form role="form" id="product_form" class="form-horizontal form-groups-bordered">
           
              @csrf

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Product Name</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="productname" id="productname" placeholder="please enter product name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Product Code</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name= "productcode"id="productcode" placeholder="please enter product code">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-1" class="col-sm-3 control-label">Home Page Recomentation</label>
								<!-- <label class="col-sm-6 control-label">Home Page Recomentation</label> -->
                                <div class="col-sm-5">
								
									<select class="form-control" id ="homepage" name="homepage">
										<option>Recomented</option>
										<option>Cancelled</option>
										
									</select>

							</div>
                </div>
                 <div class="col-md-6">
                    <label for="field-1" class="col-sm-3 control-label">Product Icon</label>
                    
                    <div class="col-sm-5">
                        <input type="file" class="form-control"  name= "producticon"id="producticon" placeholder="please add product Icon">
                    </div>
                </div>
            </div>
                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-12" class="col-sm-3 control-label">Minimum risk control fluctuation</label>
                    
                  
                        <input type="text" class="form-control" name="minimumrisk"id="minimumrisk" placeholder="please enter details of minimum risk control fluctuation">
              
                </div>
                <div class="col-md-6">
                    <label for="field-12" class="col-sm-3 control-label">Maximum risk control fluctuation</label>
                    
                    
                        <input type="text" class="form-control" name="maximumrisk"  id="maximumrisk" placeholder="please enter details of maximun risk control fluctuation">
                   
                </div>
</div>

           
                
                <div class="form-group">
                    <label for="field-3" class="col-sm-3 control-label">Random fluctuation range</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="randomrange" id="randomrange" placeholder="please enter details of random fluctuation range">
                    </div>
                </div>

              
                    
                      
                <div class="form-group">
                    
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label">Time play interval【1】</label>
                    <input type="text" class="form-control" name = "time1" id="time1" placeholder="please enter details of time play interval">

							</div>
                          
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label">Time play interval【2】</label>

                    <input type="text" class="form-control" name = "time2" id="time2" placeholder="please enter details of time play interval">
                                
							</div>
                           
                    
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label">Time play interval【3】</label>
                    <input type="text" class="form-control" name = "time3" id="time3" placeholder="please enter details of time play interval">
							</div>
                           
                    
                    <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label">Time play interval【4】</label>
                    <input type="text" class="form-control" name = "time4" id="time4" placeholder="please enter details of time play interval">
                                
					</div>
               </div>
              


              
                <div class="form-group">
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Profit and loss ratio [1]</label>
                    
                  
                        <input type="text" class="form-control" name ="profit1"  id="profit1" placeholder="please enter details of profit and loss ratio">
                    
                </div>

         
                <div class="col-md-3">
                    <label for="field-3" class="col-sm-6 control-label">Profit and loss ratio [2]</label>
                    
                   
                        <input type="text" class="form-control" name ="profit2"  id="profit2" placeholder="please enter details of profit and loss ratio">
                   
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Profit and loss ratio [3]</label>
                    
                   
                        <input type="text" class="form-control" name ="profit3"  id="profit3" placeholder="please enter details of profit and loss ratio">
                   
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Profit and loss ratio [4]</label>
                    
                  
                        <input type="text" class="form-control" name ="profit4"  id="profit4" placeholder="please enter details of profit and loss ratio">
              </div>
         </div>

                <div class="form-group">
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Loss ratio [1]</label>
                    
                   
                        <input type="text" class="form-control" name ="loss1"  id="loss1" placeholder="please enter details of loss ratio">
                  
                </div>
                
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Loss ratio [2]</label>
                    
                   
                        <input type="text" class="form-control" name ="loss2"  id="loss2" placeholder="please enter details of loss ratio">
                    
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Loss ratio [3]</label>
                    
                
                        <input type="text" class="form-control" name ="loss3"  id="loss3" placeholder="please enter details of loss ratio">
                    
                </div>
                <div class="col-md-3">
                    
                    <label for="field-3" class="col-sm-6 control-label">Loss ratio [4]</label>
                    
             
                        <input type="text" class="form-control" name ="loss4"  id="loss4" placeholder="please enter details of loss ratio">
                    </div>
                </div>
                
                
                
                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-ta" class="col-sm-6 control-label">Earnings floating ratio range</label>
                    
                  
                    <input type="text" class="form-control" name ="earningratio"  id="earningratio" placeholder="please enter details of Earning ratio">
                   
                </div>
                
                <div class="col-md-6">
                    <label for="field-ta" class="col-sm-6 control-label"> Floating ratio range under loss</label>
                    
               
                    <input type="text" class="form-control" name ="floatingratio"  id="floatingratio" placeholder="please enter details of Floating ratio">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-3">
                    
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Monday</label>
                    
                    <input type="text" class="form-control" name ="monday"  id="monday" placeholder="please enter details of monday">
                    
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Tuesday</label>
                    
                    
                    <input type="text" class="form-control" name ="tuesday"  id="tuesday" placeholder="please enter details of tuesday">
                   
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Wednesday</label>
                    
                 
                    <input type="text" class="form-control" name ="wednesday"  id="wednesday" placeholder="please enter details of wednesday">
                  
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Thursday</label>
                    
                 
                    <input type="text" class="form-control" name ="thursday"  id="thursday" placeholder="please enter details of thursday">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Friday</label>
                    
                
                    <input type="text" class="form-control" name ="friday"  id="friday" placeholder="please enter details of friday">
                  
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Satarday</label>
                    
                   
                    <input type="text" class="form-control" name ="satarday"  id="satarday" placeholder="please enter details of satarday">
                   
                </div>
                <div class="col-md-3">
                    <label for="field-ta" class="col-sm-12 control-label"> Market Opening time Sunday</label>
                    
                   
                    <input type="text" class="form-control" name ="sunday"  id="sunday" placeholder="please enter details of sunday">
                    </div>
                </div>
                

                <div class="form-group">
								<label for="field-ta" class="col-sm-3 control-label">Product note</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" name ="productnote"  id="productnote" placeholder="Textarea"></textarea>
								</div>
							</div>
							
                <!-- <div class="form-group has-error">
                    <label for="field-4" class="col-sm-3 control-label">Error field</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="field-4" placeholder="Placeholder">
                    </div>
                </div> -->
                
                <!-- <div class="form-group has-warning">
                    <label for="field-5" class="col-sm-3 control-label">Warning field</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="field-5" placeholder="Placeholder">
                    </div>
                </div> -->
                
                <!-- <div class="form-group has-success">
                    <label for="field-6" class="col-sm-3 control-label">Success field</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="field-6" placeholder="Placeholder">
                    </div>
                </div>
                 -->
                <!-- <div class="form-group">
                    <label class="col-sm-3 control-label">Select List</label>
                    
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div> -->
                
                <!-- <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Checkbox 1
                            </label>
                        </div>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Checkbox 2
                            </label>
                        </div>
                    </div>
                </div> -->
                
                <!-- <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio Input 1
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Input 2
                            </label>
                        </div>
                    </div>
                </div> -->
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">

                    <input type="hidden" id="productHiddenId" name="productHiddenId">
            
                    <button type="submit" value="Add" id="addProductButton" class="btn btn-success">Save</button>
                    <button type="submit"   value="Edit" id="updateProductButton"class="btn btn-orange">Edit</button>
                    <button type="submit"   value="Delete" id="deleteProductButton"class="btn btn-danger">Delete</button>
                    <button type="button" value="Add" id="newProductButton" class="btn btn-blue">New</button>
                    </div>
                </div>
            </form>
            
        </div>
    
    </div>

</div>
</div>



<h3>Table without DataTable Header</h3>





<table class="table table-bordered table-striped datatable" id="productTable">
<thead>
<tr>
    <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </th>
    <th>Sl No</th>
    <th>Product Name</th>
    <th>Product Code</th>
 
    <th>Actions</th>
</tr>
</thead>

<tbody id="productTbody">



</tbody>
</table>




</body>
</html>
<script src="{{asset('assets/backend/dist/js/pages/product.js')}}"></script>
@endsection