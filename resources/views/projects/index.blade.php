@extends( 'layouts.master' )

@section('content')
    Hier komen mijn projecten:

    @foreach( $projects as $project)
        <h2>{{$project->title}}</h2>
    @endforeach

@endsection
