
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
				
</br>


<!-- Raw Links -->



<!-- Raw Links -->





<h3>Product List</h3>

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

<table class="table table-bordered table-striped datatable" id="productTable">
<thead>
<tr>
    <!-- <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </th> -->
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

<!-- <tr>
    <td>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </td>
    <td>1</td>
    <td>central bank digital currency</td>
    <td>etc_usdt</td>
    <td> <a href="#" class="btn btn-danger">
          
           Cancel
        </a>
        <a href="#" class="btn btn-success">
          
          Recomond
       </a></td>
    <td>open market</td>
    <td>0.008</td>
    <td>0.0001</td>
    <td>0.0067</td>
  
    <td>
        <a href="#" class="btn btn-success "> -->
            <!-- <i class="entypo-pencil"></i> -->
            <!-- Turnon
        </a>
        
        <a href="#" class="btn btn-danger ">
       
            Close the market
        </a>
        <a href="#" class="btn btn-orange ">
            <i class="entypo-pencil"></i>
           Edit 
        </a>
        <a href="#" class="btn btn-danger">
            <i class="entypo-cancel"></i>
           Delete
        </a>
        <a href="#" class="btn btn-blue ">
          
           Show profit
        </a>
        <a href="#" class="btn btn-warning">
           
           Obvious loss
        </a>
    </td>
</tr>


</tbody> -->
</table>

<br />

<!-- <a href="javascript: fnClickAddRow();" class="btn btn-primary">
<i class="entypo-plus"></i>
Add Row
</a> -->



<br />
<br />



@endsection