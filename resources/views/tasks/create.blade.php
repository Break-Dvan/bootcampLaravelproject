<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nieuwe taak') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('tasks.store') }}"method="post">
                    @csrf
                    <x-text-input type="text" name="name" field="name" placeholder="Task..." class="w-full" autocomplete="off"  :value="@old('name')"></x-text-input>
                    <x-text-input type="text" name="days" field="days" placeholder="Days..." class="w-full" autocomplete="off"  :value="@old('days')"></x-text-input>
                    <x-text-input type="text" name="hours" field="hours" placeholder="Hours..." class="w-full" autocomplete="off"  :value="@old('hours')"></x-text-input>
                    <input type="hidden" name="project_id" class="form-control" placeholder="Project_id" value="{{ $project_id }}">
                    <x-button>Save Task</x-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
