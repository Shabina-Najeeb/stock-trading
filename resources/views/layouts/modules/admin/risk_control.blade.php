
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
<div class="col-md-6 col-sm-4 clearfix hidden-xs">

   

</div>
<!-- <ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Forms</a>
							</li>
						<li class="active">
		
									<strong>Data Validation</strong>
							</li>
							</ol> -->
					
		<h2>Risk Control Management</h2>
		<br />
		
		<div class="panel panel-primary">
		
			<!-- <div class="panel-heading">
				<div class="panel-title">All fields have validation rules <small><code>data-validate="rule1,rule2,...,ruleN"</code></small></div>
		
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div> -->
		
			<div class="panel-body">
		
				<form role="form" id="risk_form" method="post" class="validate">
                @csrf
                <div class="well well-sm border-green">
			<h4>Note: For example, set a certain time to a certain time, such as: 14:20-15:30</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Guaranteed winning time period</label>
		
						<input type="text" class="form-control" name="guaranteed_time" id="guaranteed_time" data-validate="required" data-message-required="This is custom message for required field." placeholder="Please fill in the guaranteed winning time period" />
					</div>
		
                    <div class="well well-sm border-green">
			<h4>Note: For example, set a certain time to a certain time, such as: 18:10-18:30</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Steady loss time period</label>
						<input type="text" class="form-control" name="steady_time" id="steady_time" data-validate="email" placeholder="Please fill in the stable loss time period" />
					</div>
		
					<div class="form-group">
						<label class="control-label green-text">Total win ratio</label>
						<input type="text" class="form-control" name="win_ratio" id="win_ratio" data-validate="number,minlength[4]" placeholder="Please fill in the full win ratio" />
                        %
					</div>
		
					<div class="form-group">
						<label class="control-label green-text">Total loss ratio</label>
		
						<input type="text" class="form-control"  name="loss_ratio" id="loss_ratio" data-validate="maxlength[2]" placeholder="Please fill in the total loss ratio" />
                        %
					</div>
		
                    <div class="well well-sm border-green">
			<h4>Note: Set the member ID here (such as: 8888). Multiple users are separated by | symbols (such as: 8888|9999). After setting, all orders of this member will be in losses. Please operate with caution. If you want to stop this function, please leave it blank or fill in 0 and submit.</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Designated client losses</label>
		
						<input type="text" class="form-control" name="designated_client_losses" id="designated_client_losses" data-validate="number" placeholder="Please fill in the customer ID" />
					</div>

                    <div class="well well-sm border-green">
			<h4>Note: Set the member ID here (such as: 8888). Multiple users are separated by | symbols (such as: 8888|9999). After setting, all orders of this member will be profitable. Please operate with caution. If you want to stop this function, please leave it blank or fill in 0 and submit.</h4>
		</div>
		
					<div class="form-group">
						<label class="control-label green-text">Specify customer profit </label>
		
						<input type="text" class="form-control" name="customer_profit" id="customer_profit" data-validate="required,url" placeholder="Please fill in the customer ID" />
					</div>
		 
                    <div class="well well-sm border-green">
			<h4>Note: Orders reaching this amount will be affected by the following risk controls.</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Minimum risk control value</label>
		
						<input type="text" class="form-control" name="risk_control" id="risk_control" data-validate="required,creditcard" placeholder="Please enter the minimum risk control value" />
					</div>
                    <div class="well well-sm border-green">
			<h4>Instructions: Enter the amount range. Within the amount range, profits and losses will be made based on this probability. If it is not within this range, it will not be affected by risk control.
            Format: Interval start - Interval end: customer profit probability| Symbols must be English symbols, such as 0-100:50|100-200:30  
            </h4>
		</div>
                    
					<div class="form-group">
						<label class="control-label green-text">Risk control probability</label>
		
						<input type="text" class="form-control" name="risk_probability" id="risk_probability" data-validate="required,creditcard" placeholder="Please enter risk control probability" />
					</div>
		
					<div class="form-group">
                    <input type="hidden" id="productHiddenId" name="productHiddenId">
						<button type="submit" value="Save" id="addRiskButton" class="btn btn-success">Save Settings</button>
                        <button type="submit"  value="Edit" id="updateRiskButton" class="btn btn-success">Edit</button>
                        <button type="submit"   value="Add" id="newRiskButton" class="btn btn-success">Add New</button>
                        <button type="button"  value="Delete" id="deleteRiskButton" class="btn btn-success">Delete </button>
						<!-- <button type="reset" class="btn">Reset</button> -->
					</div>
		
				</form>
		
			</div>
		
		</div>

</div>
</div>



<!-- <h3>Table without DataTable Header</h3>





<table class="table table-bordered table-striped datatable" id="riskTable">
<thead>
<tr>
    <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </th>
    <th>Sl No</th>
    <th>Winning Time period</th>
    <th>Loss time period</th>
 
    <th>Actions</th>
</tr>
</thead>

<tbody id="riskTbody">



</tbody>
</table> -->


<script src="{{asset('assets/backend/dist/js/pages/risk.js')}}"></script>

@endsection