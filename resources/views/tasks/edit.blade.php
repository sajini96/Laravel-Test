<x-layout>
    <x-slot:heading>Edit Task : {{ $task->title }}</x-slot:heading>
    
    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PATCH')
        
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3  px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Shift Leader" required value="{{ $task->title }}">
                            </div>
                            @error('title')
                            <p class="text-sm text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="mt-6 flex items-center gap-x-6">
                <a href="tasks/{{ $task->id }}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <div>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
        </div>
    </form>
    
    
</x-layout>