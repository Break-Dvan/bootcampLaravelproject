<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $project->created_at->diffForHumans() }}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>Updated at: </strong> {{ $project->updated_at->diffForHumans() }}
                </p>
                <a href="{{ route('projects.edit', $project->id)  }}" class="btn-link ml-auto">Edit Project</a>
                <a href="/tasks/create/{{ $project->id  }}" class="btn-link ml-auto">+ Task</a>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-4xl text-blue-400">
                    {{ $project->name }}
                </h2>
                <p class="mt-6 whitespace-pre-wrap">{{ $project->description }}</p>
            </div>
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>days</th>
                    <th>hours</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
                @foreach($project->tasks as $task)

                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->days }}</td>
                        <td>{{ $task->hours }}</td>
                        <td>{{ date_format($task->created_at, 'jS M Y') }}</td>
                        <td>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">

                                <a href="{{ route('tasks.show', $task->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>

                                <a href="{{ route('tasks.edit', $task->id) }}" title="edit">
                                    <i class="fas fa-edit  fa-lg"></i>
                                </a>
                                <a href="{{ route('tasks.show', $task->id) }}" title="tasks">
                                    <i class="fas fa-file-alt fa-lg"></i>
                                </a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" title="delete task {{$task->name}}" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>

                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</x-app-layout>


