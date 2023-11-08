<?php

namespace App\Livewire\Pages;

use Livewire\Component;

use App\Models\Task;

class TaskIndex extends Component
{

    public $layout = 'views.layouts.app';
    
    public function render()
    {

        $user_id = auth()->user()->id;

        $tasks = Task::where(['user_id' => $user_id])->orderBy('due_date', 'ASC')->paginate(7);

        return view('livewire.pages.task-index', [
            'tasks' => $tasks
        ]);
    }
}
