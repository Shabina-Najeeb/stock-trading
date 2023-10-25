@extends('layouts.backend_dashboard')

@section('content')
<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
        <!-- Raw Notifications -->
        <li class="notifications dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="entypo-attention"></i>
                <span class="badge badge-info">6</span>
            </a>

            <ul class="dropdown-menu">
                <li class="top">
                    <p class="small">
                        <a href="#" class="pull-right">Mark all Read</a>
                        You have <strong>3</strong> new notifications.
                    </p>
                </li>
                
                <li>
                    <ul class="dropdown-menu-list scroller">
                        <li class="unread notification-success">
                            <a href="#">
                                <i class="entypo-user-add pull-right"></i>
                                
                                <span class="line">
                                    <strong>New user registered</strong>
                                </span>
                                
                                <span class="line small">
                                    30 seconds ago
                                </span>
                            </a>
                        </li>
                        
                        <li class="unread notification-secondary">
                            <a href="#">
                                <i class="entypo-heart pull-right"></i>
                                
                                <span class="line">
                                    <strong>Someone special liked this</strong>
                                </span>
                                
                                <span class="line small">
                                    2 minutes ago
                                </span>
                            </a>
                        </li>
                        
                        <li class="notification-primary">
                            <a href="#">
                                <i class="entypo-user pull-right"></i>
                                
                                <span class="line">
                                    <strong>Privacy settings have been changed</strong>
                                </span>
                                
                                <span class="line small">
                                    3 hours ago
                                </span>
                            </a>
                        </li>
                        
                        <li class="notification-danger">
                            <a href="#">
                                <i class="entypo-cancel-circled pull-right"></i>
                                
                                <span class="line">
                                    John cancelled the event
                                </span>
                                
                                <span class="line small">
                                    9 hours ago
                                </span>
                            </a>
                        </li>
                        
                        <li class="notification-info">
                            <a href="#">
                                <i class="entypo-info pull-right"></i>
                                
                                <span class="line">
                                    The server is status is stable
                                </span>
                                
                                <span class="line small">
                                    yesterday at 10:30am
                                </span>
                            </a>
                        </li>
                        
                        <li class="notification-warning">
                            <a href="#">
                                <i class="entypo-rss pull-right"></i>
                                
                                <span class="line">
                                    New comments waiting approval
                                </span>
                                
                                <span class="line small">
                                    last week
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="external">
                    <a href="#">View all notifications</a>
                </li>
            </ul>

        </li>

        <!-- Message Notifications -->
        <li class="notifications dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="entypo-mail"></i>
                <span class="badge badge-secondary">10</span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <form class="top-dropdown-search">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search anything..." name="s" />
                        </div>
                        
                    </form>
                    
                    <ul class="dropdown-menu-list scroller">
                        <li class="active">
                            <a href="#">
                                <span class="image pull-right">
                                    <img src="{{asset('assets/backend/images/thumb-1@2x.png')}}" width="44" alt="" class="img-circle" />
                                </span>
                                
                                <span class="line">
                                    <strong>Luc Chartier</strong>
                                    - yesterday
                                </span>
                                
                                <span class="line desc small">
                                    This ain’t our first item, it is the best of the rest.
                                </span>
                            </a>
                        </li>
                        
                        <li class="active">
                            <a href="#">
                                <span class="image pull-right">
                                    <img src="{{asset('assets/backend/images/thumb-2@2x.png')}}" width="44" alt="" class="img-circle" />
                                </span>
                                
                                <span class="line">
                                    <strong>Salma Nyberg</strong>
                                    - 2 days ago
                                </span>
                                
                                <span class="line desc small">
                                    Oh he decisively impression attachment friendship so if everything. 
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <span class="image pull-right">
                                    <img src="assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />
                                </span>
                                
                                <span class="line">
                                    Hayden Cartwright
                                    - a week ago
                                </span>
                                
                                <span class="line desc small">
                                    Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <span class="image pull-right">
                                    <img src="{{asset('assets/backend/images/thumb-4@2x.png')}}" width="44" alt="" class="img-circle" />
                                </span>
                                
                                <span class="line">
                                    Sandra Eberhardt
                                    - 16 days ago
                                </span>
                                
                                <span class="line desc small">
                                    On so attention necessary at by provision otherwise existence direction.
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="external">
                    <a href="mailbox.html">All Messages</a>
                </li>
            </ul>

        </li>

        <!-- Task Notifications -->
        <li class="notifications dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="entypo-list"></i>
                <span class="badge badge-warning">1</span>
            </a>

            <ul class="dropdown-menu">
                <li class="top">
                    <p>You have 6 pending tasks</p>
                </li>
                
                <li>
                    <ul class="dropdown-menu-list scroller">
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Procurement</span>
                                    <span class="percent">27%</span>
                                </span>
                            
                                <span class="progress">
                                    <span style="width: 27%;" class="progress-bar progress-bar-success">
                                        <span class="sr-only">27% Complete</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">App Development</span>
                                    <span class="percent">83%</span>
                                </span>
                                
                                <span class="progress progress-striped">
                                    <span style="width: 83%;" class="progress-bar progress-bar-danger">
                                        <span class="sr-only">83% Complete</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">HTML Slicing</span>
                                    <span class="percent">91%</span>
                                </span>
                                
                                <span class="progress">
                                    <span style="width: 91%;" class="progress-bar progress-bar-success">
                                        <span class="sr-only">91% Complete</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Database Repair</span>
                                    <span class="percent">12%</span>
                                </span>
                                
                                <span class="progress progress-striped">
                                    <span style="width: 12%;" class="progress-bar progress-bar-warning">
                                        <span class="sr-only">12% Complete</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Backup Create Progress</span>
                                    <span class="percent">54%</span>
                                </span>
                                
                                <span class="progress progress-striped">
                                    <span style="width: 54%;" class="progress-bar progress-bar-info">
                                        <span class="sr-only">54% Complete</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
                                    <span class="desc">Upgrade Progress</span>
                                    <span class="percent">17%</span>
                                </span>
                                
                                <span class="progress progress-striped">
                                    <span style="width: 17%;" class="progress-bar progress-bar-important">
                                        <span class="sr-only">17% Complete</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="external">
                    <a href="#">See all tasks</a>
                </li>
            </ul>

        </li>

    </ul>

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
		
				<form role="form" id="form1" method="post" class="validate">
                <div class="well well-sm border-green">
			<h4>Note: For example, set a certain time to a certain time, such as: 14:20-15:30</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Guaranteed winning time period</label>
		
						<input type="text" class="form-control" name="guaranteed-time" id="guaranteed-time" data-validate="required" data-message-required="This is custom message for required field." placeholder="Please fill in the guaranteed winning time period" />
					</div>
		
                    <div class="well well-sm border-green">
			<h4>Note: For example, set a certain time to a certain time, such as: 18:10-18:30</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Steady loss time period</label>
						<input type="text" class="form-control" name="steady-time" id="steady-time" data-validate="email" placeholder="Please fill in the stable loss time period" />
					</div>
		
					<div class="form-group">
						<label class="control-label green-text">Total win ratio</label>
						<input type="text" class="form-control" name="win-ratio" id="win-ratio" data-validate="number,minlength[4]" placeholder="Please fill in the full win ratio" />
                        %
					</div>
		
					<div class="form-group">
						<label class="control-label green-text">Total loss ratio</label>
		
						<input type="text" class="form-control"  name="loss-ratio" id="loss-ratio" data-validate="maxlength[2]" placeholder="Please fill in the total loss ratio" />
                        %
					</div>
		
                    <div class="well well-sm border-green">
			<h4>Note: Set the member ID here (such as: 8888). Multiple users are separated by | symbols (such as: 8888|9999). After setting, all orders of this member will be in losses. Please operate with caution. If you want to stop this function, please leave it blank or fill in 0 and submit.</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Designated client losses</label>
		
						<input type="text" class="form-control" name="designated-client-losses" id="designated-client-losses" data-validate="number" placeholder="Please fill in the customer ID" />
					</div>

                    <div class="well well-sm border-green">
			<h4>Note: Set the member ID here (such as: 8888). Multiple users are separated by | symbols (such as: 8888|9999). After setting, all orders of this member will be profitable. Please operate with caution. If you want to stop this function, please leave it blank or fill in 0 and submit.</h4>
		</div>
		
					<div class="form-group">
						<label class="control-label green-text">Specify customer profit </label>
		
						<input type="text" class="form-control" name="customer-profit" id="customer-profit" data-validate="required,url" placeholder="Please fill in the customer ID" />
					</div>
		 
                    <div class="well well-sm border-green">
			<h4>Note: Orders reaching this amount will be affected by the following risk controls.</h4>
		</div>
					<div class="form-group">
						<label class="control-label green-text">Minimum risk control value</label>
		
						<input type="text" class="form-control" name="risk-control" id="risk-control" data-validate="required,creditcard" placeholder="Please enter the minimum risk control value" />
					</div>
                    <div class="well well-sm border-green">
			<h4>Instructions: Enter the amount range. Within the amount range, profits and losses will be made based on this probability. If it is not within this range, it will not be affected by risk control.
            Format: Interval start - Interval end: customer profit probability| Symbols must be English symbols, such as 0-100:50|100-200:30  
            </h4>
		</div>
                    
					<div class="form-group">
						<label class="control-label green-text">Risk control probability</label>
		
						<input type="text" class="form-control" name="risk-probability" id="risk-probability" data-validate="required,creditcard" placeholder="Please enter risk control probability" />
					</div>
		
					<div class="form-group">
						<button type="submit" class="btn btn-success">Save Settings</button>
						<!-- <button type="reset" class="btn">Reset</button> -->
					</div>
		
				</form>
		
			</div>
		
		</div>

</div>
</div>



<!-- <h3>Table without DataTable Header</h3>





<table class="table table-bordered table-striped datatable" id="productTable">
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

<tbody id="productTbody">



</tbody>
</table> -->


<script src="{{asset('assets/backend/dist/js/pages/user.js')}}"></script>

@endsection