

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




<!-- 
                <li class="has-sub">
					<a href="/admin/order">
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
                   	
				</li> -->
				
                <li class="active opened active has-sub">
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Order Management</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="/admin/order">
								<span class="title">Transaction Flow</span>
							</a>
						</li>
						<li>
							<a href="/admin/order_log">
								<span class="title">Closing log</span>
							</a>
						</li>
					</ul>
				</li>
                
				
				
				
				
				
				</li>
			</ul>
			
		</div>

	</div>



</div>
</div>

</body>
</html>
<script src="{{asset('assets/backend/dist/js/pages/product.js')}}"></script>