
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
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Mwmber Management</span>
					</a>
					
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Member List</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Level settings</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Member relationship</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Wallet management</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">User wallet</span>
							</a>
						</li>
						
					</ul>
				</li>
                



				
                <li class="active opened active has-sub">
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Financial Management</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Running water record</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Running water record</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Recharge record</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Withdrawals record</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Yu,e Bio Financial</span>
							</a>
						</li>
						
					</ul>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Yu,e Bio Settlement</span>
							</a>
						</li>
						
					</ul>
					
				</li>
                
				
				
				
				
				
				</li>
			</ul>
			
		</div>

	</div>

<hr />

    
<div class="main-content">
				
		


                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                
                   
                
                </div>
                      
        
<h2>Add User</h2>
<br />


<div class="row">
<div class="col-md-12">
    
    <div class="panel panel-primary" data-collapsed="0">
    
        <div class="panel-heading">
            <div class="panel-title">
              Input User Details 
            </div>
            
            <div class="panel-options">
                <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
            </div>
        </div>
        
        <div class="panel-body">
            
            <form role="form" id="user_form" class="form-horizontal form-groups-bordered">
           
              @csrf

                <div class="form-group">
                <div class="col-md-3">
                    <label for="field-1" class="col-sm-6 control-label">User Account</label>
                    
                   
                        <input type="text" class="form-control" name="useraccount" id="useraccount" placeholder="please enter user accound">
                  
                </div>
                
                <div class="col-md-3">
                    <label for="field-2" class="col-sm-6 control-label">Name</label>
                    
                   
                        <input type="text" class="form-control" name= "name"id="name" placeholder="please enter your name">
                    
                </div>

                <div class="col-md-3">
                    <label for="field-2" class="col-sm-6 control-label">User ID</label>
                    
                   
                        <input type="text" class="form-control" name= "userid"id="userid" placeholder="please enter your name">
                    
                </div>
                <div class="col-md-3">
                    
                    <label for="field-2" class="col-sm-12 control-label">Login Password</label>
                
                        <input type="password" class="form-control"  name= "login_pword" id="login_pword" placeholder="please enter login password">
                    
                </div>
              </div>



                <div class="form-group">
                <div class="col-md-3">
                    <label for="field-1" class="col-sm-12 control-label">Transaction Password</label>
                    
                  
                        <input type="password" class="form-control"  name= "transaction_pword"id="transaction_pword" placeholder="please enter transaction password">
                
                </div>
                <div class="col-md-3">
           
                    <label for="field-3" class="col-sm-6 control-label">Balance</label>
                    
                  
                        <input type="text" class="form-control" name="balance"id="balance" placeholder="please enter your balance">
              
                </div>
                <div class="col-md-3">
								<label class="col-sm-6 control-label">Member</label>
								
								
									<select class="form-control" id ="member" name="member">
										<option>Ordinary</option>
										<option>VIP 8</option>
										
									</select>
							
							</div>
							

</div>
                
              
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">

                    <input type="hidden" id="userHiddenId" name="userHiddenId">
            
                    <button type="submit" value="Add" id="addUserButton" class="btn btn-success">Save</button>
                    <button type="submit"   value="Edit" id="updateUserButton"class="btn btn-orange">Edit</button>
                    <button type="submit"   value="Delete" id="deleteUserButton"class="btn btn-danger">Delete</button>
                    <button type="button" value="New" id="newUserButton" class="btn btn-blue">New</button>
                    </div>
                </div>
            </form>
            
        </div>
    
    </div>

</div>
</div>



<h3>User Table</h3>





<table class="table table-bordered table-striped datatable" id="userTable">
<thead>
<tr>
    <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </th>
    <th>Sl No</th>
    <th>User Name</th>
    <th>Usert Account</th>
 
    <th>Actions</th>
</tr>
</thead>

<tbody id="userTbody">



</tbody>
</table>


<script src="{{asset('assets/backend/dist/js/pages/user.js')}}"></script>

@endsection