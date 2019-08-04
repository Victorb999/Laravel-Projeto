        
 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Novo</div>
               
                <div class="card-body">
                    <form method="POST" action="{{ route('validar.store') }}">
                    @csrf
                    <div id="app">
						<simpleform></simpleform>
					</div>
                   
                                <button type="submit" class="btn btn-danger col-12">
                                    Cadastrar
                                </button>                              
                          
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
