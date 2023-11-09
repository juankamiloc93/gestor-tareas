<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nueva tarea') }}
        </h2>
    </x-slot> 
    <div class="flex justify-center mt-12">
        <div class="w-4/5 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <livewire:forms.task-form/>  
        </div>   
    </div>  
</x-app-layout>

