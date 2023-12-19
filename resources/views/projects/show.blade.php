@extends( 'layouts.master' )

@section('content')
    <h2>{{$project->title}}</h2>
    Dit is mijn project.
@endsection


@section('scripts')
<script>
    console.log('dit is een project pagina');
</script>
@endsection