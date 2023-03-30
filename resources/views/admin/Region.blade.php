

@extends('layoutsAdmin.admin')

@section('content')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <td class="border-bottom-0"><a href="http://127.0.0.1:8000/dashboard1"  style="background-color: #DFAF2C;" class="btn btn-primary">Retour</a></td>
    <div class="card col-md-8 offset-2 mt-3">
        <form action="/store" method="post">
            @csrf
            
            <div class="card-header text-center bg-dark text-white">FORMULAIRE REGIONS</div>
            <div class="form-group">
                <label for="" >REGION</label>
                <select name="nomRegion" id="" class="form-control" required>
                    <option value="">----Faites Votre Choix----</option>
                    <option value="Dakar">Dakar</option>
                    <option value="Thies">Diourbel</option>
                    <option value="Fatick">Fatick</option>
                    <option value="Kaolack">Kaolack</option>  
                    <option value="Dakar">Louga</option>
                    <option value="Thies">Matam</option>
                    <option value="StLouis">StLouis</option>
                    <option value="Tamba">Tambacounda</option>
                    <option value="Fatick">Thiès</option>
                    <option value="Kaolack">Ziguinchor</option>
                    <option value="StLouis">Kaffrine</option>
                    <option value="Tamba">Kédougou</option>
                    <option value="Tamba">Sédhiou</option>
                    
                   
                  

                </select>
            </div>
            <button type="submit" class="btn btn-dark offset-5 mt-2">Enregistrer</button>
        </form>
    <div>
@endsection