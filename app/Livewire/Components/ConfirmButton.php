<?php

namespace App\Livewire\Components;

use Livewire\Component;

use App\Models\Task;

class ConfirmButton extends Component
{

    public int $taskId;

    public function click() {

        $task = Task::where(['id' => $this->taskId])->first();

        $task->completated = 1;
        $task->save();

        return $this->redirect('/task-index');
    }

    public function render()
    {
        return view('livewire.components.confirm-button');
    }
}
