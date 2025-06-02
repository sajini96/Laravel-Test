<x-layout>
    <x-slot:heading>Create Task</x-slot:heading>
    
    <form method="POST" action="/tasks">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Add a New Task</h2>
                
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-lable for="title">Task</x-form-lable>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" :value="old('title')" required></x-form-input>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>
                    
                </div>
            </div>
            
        </div>
        
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
    
</x-layout>