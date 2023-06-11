@extends( 'layout.app' )

@section('titlePage')
    DC Comics | Home
@endsection

@section( 'content' )

<h1>Pagina Home</h1>




@foreach ( $comics as $comic)

<li>{{ $comic['title'] }}</li>

@endforeach


@endsection