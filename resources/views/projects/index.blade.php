@extends( 'layouts.master' )

@section('content')
    Hier komen mijn projecten:

    @foreach( $projects as $project)
        <h2>{{$project->title}}</h2>
    @endforeach

@endsection


@section('scripts')
<script>
    console.log('dit is een index');
</script>
@endsection