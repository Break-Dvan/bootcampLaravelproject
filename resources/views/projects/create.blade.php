<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New project') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('projects.store') }}"method="post">
                    @csrf
                    <x-text-input type="text" name="name" field="name" placeholder="Project..." class="w-full" autocomplete="off" :value="@old('name')"></x-text-input>
                    <x-textarea name="description" rows="5" field="description" placeholder="Start typing here..." class="w-full" autocomplete="off" :value="@old('description')"></x-textarea>
                    <x-button>Save Project</x-button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
