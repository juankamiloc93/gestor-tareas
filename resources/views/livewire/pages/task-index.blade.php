<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Tareas') }}
    </h2>
</x-slot>
<div class="flex flex-col items-center">
    <table class="table-fixed border-collapse border border-slate-400 w-4/5 mt-12">
        <thead>
            <tr class="border border-slate-300 bg-cyan-900 text-white h-12">
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de vencimento</th>                
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr class="border border-slate-300 h-12 text-center bg-white">
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->due_date}}</td>             
                <td>
                    <livewire:components.confirm-button
                        :taskId="$task->id"
                    />
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="w-4/5">
        {{$tasks->links()}}
    </div>
    
</div>

