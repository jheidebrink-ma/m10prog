<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Project aanmaken") }}

                    @if ($errors->any())
                        <div class="p-2 bg-yellow border-2 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('project.store')}}" method="post">
                        @csrf


                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Titel</label>
                            <div class="mt-2">
                                <input id="title" name="title" type="text" autocomplete="title"
                                       value="{{old('title')}}"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="intro"
                                   class="block text-sm font-medium leading-6 text-gray-900">Intro</label>
                            <div class="mt-2">
                                <textarea id="intro" name="intro" rows="2"
                                          class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                >{{old('intro')}}</textarea>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="description"
                                   class="block text-sm font-medium leading-6 text-gray-900">Omschrijving</label>
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="5"
                                          class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                >{{old('description')}}</textarea>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <div class="flex items-center mb-4">
                                <input @if(old('active')) checked @endif id="active-1" type="radio" value="1" name="active" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="active-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aktief</label>
                            </div>
                            <div class="flex items-center">
                                <input @if(!old('active')) checked @endif id="active-2" type="radio" value="0" name="active" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="active-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verborgen</label>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Save
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
