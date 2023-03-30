

<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css-table-18/css/style.css">

	</head>
	<body>
   
	<section class="ftco-section" style="background-color: black;">
  <td class="border-bottom-0"><a href="http://127.0.0.1:8000/dashboard1"  style="background-color: #DFAF2C;" class="btn btn-primary">Retour</a></td>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" style="color: white;">Table Des Utilisateur Connecter</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary" style="background-color: #DFAF2C;">
					      <tr>
                <th scop="col">#</th>
              <th scop="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Typle utisateur</th>
              <th scope="col"> created_at </th>
              <th scope="col"> updated_at </th>
					      </tr>
					    </thead>
              @forelse ($User as $key=>$data)
        <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->role}}  </td>
            <td> {{$data->created_at}}</td>
            <td> {{$data->updated_at}}</td>

        </tr>
        @empty
            aucune donnée trouvée
        @endforelse
					    <tbody>
					      
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="css-table-18/js/jquery.min.js"></script>
  <script src="css-table-18/js/popper.js"></script>
  <script src="css-table-18/js/bootstrap.min.js"></script>
  <script src="css-table-18/js/main.js"></script>

	</body>
</html>



