<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nueva tarea') }}
        </h2>
    </x-slot>  
    <livewire:forms.task-form/>  
</x-app-layout>

