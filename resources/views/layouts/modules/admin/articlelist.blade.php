
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
					<a href="/admin/categorylist">
						<i class="entypo-gauge"></i>
						<span class="title">Article Configuaration</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="/admin/categorylist">
								<span class="title">Article List</span>
							</a>
						</li>
						<li class="active">
							<a href="/admin/articlelist">
								<span class="title">Article Classification</span>
							</a>
						</li>
						
					</ul>
				</li>
                




				
                <li class="active opened active has-sub">
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Site Message Management</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="#">
								<span class="title">Site Message List</span>
							</a>
						</li>
						
					</ul>
				</li>
                
				
				
				
				
				
			
			</ul>
			
		</div>

	</div>

<hr />

</br>
</br>
</br>



<!-- Raw Links -->



<!-- Raw Links -->

<div class="main-content">
				
</br>


<!-- Raw Links -->



<!-- Raw Links -->






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
					<li>
							<a href="/admin/article">
							<button   type="submitt"value="AddArticle"   name="addcategory" Category class="btn btn-default">Add Article</button>
							</a>
						</li>
                           





<table class="table table-bordered table-striped datatable" id="categoryTable">
<h3>Article List</h3>
<thead>
<tr>
    <!-- <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </th> -->
    <th>Refresh</th>
    <th>Article Name</th>
	<th>Article Classification</th>
    <th>Action</th>
   
</tr>
</thead>

<tbody id="categoryTbody">



</tbody>



</table>
</div>
</div>


<div>
<div class="row">
<div class="col-md-12">
    
    <div  class="panel panel-primary" data-collapsed="0">
    
        <div class="panel-heading">
            <div class="panel-title">
              Input Article 
            </div>
            
            <div class="panel-options">
                <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
            </div>
        </div>
        
        <div class="panel-body">
            
            <form role="form" id="article_form" class="form-horizontal form-groups-bordered">
           
              @csrf

                <div class="form-group">
                <div class="col-md-6">
                    <label for="field-1" class="col-sm-6 control-label green-text">Article classification</label>
					<select class="form-control" id="article_classification" name="article_classification">
                          <option value="">-Select Article Category-</option>
                          @foreach($categories as $ctgy)
                          <option value="{{ $ctgy->id }}">{{ $ctgy->categoryname }}</option>
                          @endforeach
                        </select>
                   
                       
                  
                </div>
                
                <div class="col-md-6">
                    <label for="field-2" class="col-sm-6 control-label green-text">Article name</label>
                    
                   
                        <input type="text" class="form-control" name= "article_name"id="article_name" placeholder="please enter your name">
                    
                </div>
</div>
				<div class="form-group">
                <div class="col-md-6">
                    <label for="field-2" class="col-sm-6 control-label green-text">Whether to display</label>
                    <select class="form-control" id ="member" name="member">
										<option>Show</option>
										<option>Hide</option>
										
									</select>
							
                   
                      
                    
                </div>
                <div class="col-md-6">
                    
                    <label for="field-2" class="col-sm-12 control-label green-text">key word</label>
                
                        <input type="password" class="form-control"  name= "login_pword" id="login_pword" placeholder="please enter login password">
                    
                </div>
              </div>
			  <div class="form-group">
								<label for="field-ta" class="col-sm-3 control-label green-text">Article content</label>
								
								<div class="col-sm-5">
									<textarea class="form-control" name ="productnote"  id="productnote" placeholder="Textarea"></textarea>
								</div>
			</div>
					      
                
             <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">

                    <input type="hidden" id="articleHiddenId" name="articleHiddenId">
            
                    <button type="submit" value="Add" id="addArticleButton" class="btn btn-success">Save</button>
                    <button type="submit"   value="Edit" id="updateArticleButton"class="btn btn-orange">Edit</button>
                    <button type="submit"   value="Delete" id="deleteArticleButton"class="btn btn-danger">Delete</button>
                    <button type="button" value="New" id="newArticleButton" class="btn btn-blue">New</button>
                    </div>
                </div>
            </form>
            
        </div>
    
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
<script src="{{asset('assets/backend/dist/js/pages/articlelist.js')}}"></script>

@endsection