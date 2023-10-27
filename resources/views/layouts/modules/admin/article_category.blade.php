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





  
<h2>Add Article Category</h2>
<br />


<div class="row">
<div class="col-md-6">
    
    <div class="panel panel-primary" data-collapsed="0">
    
        <div class="panel-heading">
            <div class="panel-title">
              Input Article Category Details 
            </div>
            
            <div class="panel-options">
                <!-- <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> -->
            </div>
        </div>
        
        <div class="panel-body">
            
            <form role="form" id="category_form" class="form-horizontal form-groups-bordered">
           
              @csrf

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Category Name</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="categoryname" id="categoryname" placeholder="please enter category name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label">Sort by category</label>
                    
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name= "order"id="order" placeholder="please enter category order">
                    </div>
                </div>
             
                 
           
                
               
 
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">

                    <input type="hidden" id="categoryHiddenId" name="categoryHiddenId">
            
                    <button type="submit" value="Add" id="addCategoryButton" class="btn btn-success">Save</button>
                    <button type="submit"   value="Edit" id="updateCategoryButton"class="btn btn-orange">Edit</button>
                    <button type="submit"   value="Delete" id="deleteCategoryButton"class="btn btn-danger">Delete</button>
                    <button type="button" value="Add" id="newCategoryButton" class="btn btn-blue">New</button>
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
   
    <th>Category Order</th>
    <th>Category Name</th>
   
 
    <th>Actions</th>
</tr>
</thead>

<tbody id="categoryTbody">



</tbody>
</table>




</body>
</html>
<script src="{{asset('assets/backend/dist/js/pages/category.js')}}"></script>
@endsection