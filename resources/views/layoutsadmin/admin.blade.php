
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Portail de reservation  de voitures | Tableau de bord administrateur</title>




	<!-- Font awesome -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="taxi/layoutsadmin/admin/css/style.css">

</head>

<body>
@include('admin/includes/header')

	<div class="ts-main-content">
@include('admin/includes/leftbar')

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">


@yield('content')


			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="taxi/layoutsadmin/js/jquery.min.js"></script>
	<script src="taxi/layoutsadmin/js/bootstrap-select.min.js"></script>
	<script src="taxi/layoutsadmin/js/bootstrap.min.js"></script>
	<script src="taxi/layoutsadmin/js/jquery.dataTables.min.js"></script>
	<script src="taxi/layoutsadmin/js/dataTables.bootstrap.min.js"></script>
	<script src="taxi/layoutsadmin/js/Chart.min.js"></script>
	<script src="taxi/layoutsadmin/js/fileinput.js"></script>
	<script src="taxi/layoutsadmin/js/chartData.js"></script>
	<script src="taxi/layoutsadmin/js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
