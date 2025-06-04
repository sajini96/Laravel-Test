<x-layout>
    <x-slot:heading>Task List</x-slot:heading>
    
    <div class="overflow-x-auto">
    <table class="min-w-full table-auto text-sm text-left text-gray-700 border border-gray-200 rounded-md">
        <thead class="bg-gray-100 text-xs uppercase font-semibold text-gray-600">
            <tr>
                <th class="px-4 py-2 border-b">Task</th>
                <th class="px-4 py-2 border-b">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($tasks as $task)
                <tr>
                    <td class="px-4 py-2">{{ $task->title }}</td>
                    <td class="px-4 py-2">
                        @if ($task->is_completed == 0)
                        <x-button href="/tasks/{{ $task->id }}/edit">Edit Task</x-button>&nbsp;&nbsp;&nbsp;
                        <a class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-green-700 leading-5 rounded-md hover:bg-green-700 focus:outline-none focus:ring ring-green-300 focus:border-green-500 active:bg-green-800 transition ease-in-out duration-150 dark:bg-green-700 dark:border-green-600 dark:text-white dark:focus:border-green-400 dark:active:bg-green-800" href="/tasks/{{ $task->id }}/statusupdate">Complete Task</a>&nbsp;&nbsp;&nbsp;
                        <form method="POST" action="/tasks/{{ $task->id }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-red-700 leading-5 rounded-md hover:bg-red-700 focus:outline-none focus:ring ring-red-300 focus:border-red-500 active:bg-red-800 transition ease-in-out duration-150 dark:bg-red-700 dark:border-red-600 dark:text-white dark:focus:border-red-400 dark:active:bg-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        @else
                        <span class="text-green-600 font-semibold">Completed</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</x-layout>
