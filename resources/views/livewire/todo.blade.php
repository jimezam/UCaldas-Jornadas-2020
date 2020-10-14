<div>
    @if(session()->has('information'))
    <div class="alert alert-info" role="alert">
        {{ session('information') }}
    </div>
    @endif
    
    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->description }}
                <button wire:click="removeTask({{ $task->id }})" 
                    class="btn btn-sm btn-outline-danger">x</button>
        </li>
        @endforeach
    </ul>

    <p><strong>> {{ $name }}</strong></p>
    <input wire:model="name" wire:keydown.enter="addTask" type="text" size="55">

    <button wire:click="addTask">Agregar</button>
    <button wire:click="removeAllTasks">Reiniciar</button>    
</div>
