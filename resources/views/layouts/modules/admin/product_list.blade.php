
@extends('layouts.backend_dashboard')

@section('content')


    <!-- Message Notifications -->
   

    <!-- Task Notifications -->
    <!-- <li class="notifications dropdown">

       

       
           

    </li> -->

<!-- </ul> -->

</div>


<!-- Raw Links -->
<div class="col-md-6 col-sm-4 clearfix hidden-xs">

<ul class="list-inline links-list pull-right">

    <!-- Language Selector -->
    <li class="dropdown language-selector">

        Language: &nbsp;
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
            <img src="assets/images/flags/flag-uk.png" width="16" height="16" />
        </a>

        <ul class="dropdown-menu pull-right">
            <li>
                <a href="#">
                    <img src="assets/images/flags/flag-de.png" width="16" height="16" />
                    <span>Deutsch</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <img src="assets/images/flags/flag-uk.png" width="16" height="16" />
                    <span>English</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/images/flags/flag-fr.png" width="16" height="16" />
                    <span>François</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/images/flags/flag-al.png" width="16" height="16" />
                    <span>Shqip</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/images/flags/flag-es.png" width="16" height="16" />
                    <span>Español</span>
                </a>
            </li>
        </ul>

    </li>

    <li class="sep"></li>

    
    <li>
        <a href="#" data-toggle="chat" data-collapse-sidebar="1">
            <i class="entypo-chat"></i>
            Chat

            <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
        </a>
    </li>

    <li class="sep"></li>

    <li>
        <a href="extra-login.html">
            Log Out <i class="entypo-logout right"></i>
        </a>
    </li>
</ul>

</div>

</div>

<hr />

    <ol class="breadcrumb bc-3" >
                <li>
        <a href="index.html"><i class="fa-home"></i>Home</a>
    </li>
            <li>

                    <a href="tables-main.html">Product</a>
            </li>
        <li class="active">

                    <strong>User</strong>
            </li>
            </ol>
    



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

<table class="table table-bordered table-striped datatable" id="table-2">
<thead>
<tr>
    <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-1">
        </div>
    </th>
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

<tbody>

<tr>
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
        <a href="#" class="btn btn-success ">
            <!-- <i class="entypo-pencil"></i> -->
            Turnon
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


</tbody>
</table>

<br />

<!-- <a href="javascript: fnClickAddRow();" class="btn btn-primary">
<i class="entypo-plus"></i>
Add Row
</a> -->



<br />
<br />



@endsection