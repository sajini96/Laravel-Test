<x-layout>
    <x-slot:heading>Task List</x-slot:heading>
    
    <div class="space-y-4">
        @foreach ($tasks as $task)
        <div class="block px-4 py-3 border border-gray-200 rounded-lg">
            
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <div class="mt-2">
                        {{ $task->title }}
                    </div>
                </div>
                
                <div class="sm:col-span-2">
                    <div class="mt-2">
                        @if ($task->is_completed == 0)
                        <x-button href="/tasks/{{ $task->id }}/edit">Edit Task</x-button>&nbsp;&nbsp;&nbsp;
                        <x-button href="/tasks/{{ $task->id }}/statusupdate">Complete Task</x-button>&nbsp;&nbsp;&nbsp;
                        <form method="POST" action="/tasks/{{ $task->id }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 text-sm font-bold">Delete</button>
                        </form>
                        @else
                        <span class="text-green-600 font-semibold">Completed</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</x-layout>