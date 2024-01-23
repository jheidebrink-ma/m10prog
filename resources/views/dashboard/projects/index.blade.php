<x-``app-layout``>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('projects.create')}}"
                       class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right">
                        {{ __('New project') }}
                    </a>
                    @if (session('alert'))
                        <div class="p-2 bg-yellow border-2 rounded">
                            {{ session('alert') }}
                        </div>
                    @endif

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th>Titel</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($projects as $project)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td>
                                    {{ $project->title }}
                                </td>
                                <td>
                                    <a href="{{route('projects.edit', $project)}}" title="Wijzig"
                                       class="text-green">
                                        <svg class="w-3 h-3 text-green-500" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('projects.destroy', $project)}}" method="post">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <button type="verwijder" class="rounded-md bg-orange">
                                            Verwijder
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{$projects->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
