<x-app-layout>


	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="ClientCss/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="ClientCss/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('ClientCss/images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="ClientCss/images/registration-form-1.jpg" alt="">
				</div>
				<form  action="{{ url('clients') }}" method="post">
				{!! csrf_field() !!}
					<h3>Reservation Taxi</h3>
					<div class="form-group">
						<input type="text" placeholder="Nom" class="form-control" name="nom" required>
						
						<select id="trajet" placeholder="Trajet" class="form-control" name="trajet" disabled required>
                        </select>
					</div>
					<div class="form-wrapper">
						
						<label for="region">Région </label>
                        <select id="region" class="form-control" name="region" required>
                            <option value="">........................................choisir...................................</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->nomRegion }}</option>
                            @endforeach
                        </select>
						
					</div>
					<div class="form-wrapper">
						
						<input type="number" placeholder="Tarif" class="form-control" id="tarif" name="tarif"  required>
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Telephone" class="form-control" name="telephone" required>
						
					</div>
					<div class="form-wrapper">
						<input type="date" placeholder="Date" class="form-control" name="date" required>
						
					</div>
					
					
					<div class="form-wrapper">
					
					<button>Confirmer
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Fonction pour remplir le select avec les itinéraires
function remplirSelectItineraires(regionId) {
    $.ajax({
        url: '/trajet/' + regionId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#trajet').empty(); // Vider le select avant de le remplir
            $.each(data, function(index, trajet) {
                $('#trajet').append('<option value="' + trajet.id + '">' + trajet.nomTrajet + '</option>');
            });
            var trajetId = $('#trajet').val();
            // Activer le select après avoir fini de le remplir
            $.ajax({
                url: '/getTarif/' + trajetId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#tarif').val(data.tarif);
                    $('#tarif').prop('disabled', true);
                },
                error: function() {
                    console.log('Une erreur s\'est produite lors de la récupération du tarif de l\'itinéraire.');
            }
            
    });
            $('#trajet').prop('disabled', false);
        },
        error: function() {
            console.log('Une erreur s\'est produite lors de la récupération des itinéraires.');
        }
    });
}


// Appeler la fonction remplirSelecttrajets lorsque la région est sélectionnée
$('#region').change(function() {
    var regionId = $(this).val();
    remplirSelectItineraires(regionId);
});

</script>
   
    
<!--==============================footer=================================-->
		
		

	</body>
</html>
    
  
   
</x-app-layout>

