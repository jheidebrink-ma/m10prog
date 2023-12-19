@extends( 'layouts.master' )

@section('content')
    Hier komen mijn projecten:
    <ul class="w-full">
        @foreach( $projects as $project)
            <li class="w-full">
                <h2>{{$project->title}}</h2>
                <a href="{{route('project.show', $project)}}"
                   class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded">Bekijk project</a>
            </li>
        @endforeach
    </ul>

@endsection


@section('scripts')
    <script>
        console.log('dit is een index');
    </script>
@endsection