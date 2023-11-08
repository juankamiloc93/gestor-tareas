<form class="pt-5" wire:submit.prevent="submitForm">
    <div class="pb-5 w-full flex flex-col items-center">
        <label class="w-3/5" for="title">Título</label>
        <input class="w-3/5 rounded-xl" id="title" type="text" wire:model="title"/>
        @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="pb-5 w-full flex flex-col items-center">
        <label class="w-3/5" for="description">Descripción</label>
        <textarea class="w-3/5 rounded-xl" id="description" wire:model="description"></textarea>
        @error('description') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="pb-5 w-full flex flex-col items-center">
        <label class="w-3/5" for="due_date">Fecha de vencimiento</label>
        <input class="w-3/5 rounded-xl" type="date" id="due_date" wire:model="dueDate"/>
        @error('dueDate') <span class="error">{{ $message }}</span> @enderror
    </div>
    
    <div class="flex justify-center">
        <button class="m-5 w-3/5 bg-green-500 hover:bg-green-700 py-2 px-4 rounded-xl text-white" type="submit">
            Crear
        </button>
    </div>
    
</form>