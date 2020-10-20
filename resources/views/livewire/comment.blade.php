 <div>
    <div style="text-align: center">
        <button wire:click="increment">PLUS +</button>
        <h1>{{ $comment }}</h1>
    </div>

    
        <!-- Ovo dole je od novog tutsa sa official livewire site -->
        <div>        
        <!-- ovaj menja text od name in a real time -->
        <input wire:model="name" type="text">
        Its a checkbox for loud-> 
        <input wire:model="loud" type="checkbox">

        <!-- Select one of those to be displajed after name-->
        <select wire:model="greeting">
            <option>ByeBye</option>
            <option>Goodbye</option>
            <option>Adios</option>
        </select>
        <!-- Multiple selections *shift click-->
        <select wire:model="tipla" multiple>
            <option>you were godd </option>
            <option>you were bad</option>
            <option>you where</option>
        </select>
         <p style="color:red;"> {{implode(", ", $tipla)}} {{$name}} {{$greeting}} @if($loud) !!! @endif</p>
        <form action="#" wire:submit.prevent="$set('name', 'Bingo2')">
            <button>Reset Name</button>
         </form>
    </div>

    <!-- Malo se nagomilalo pa sad opet krecem 4ti video ovde malo dole -->
    <div>
        <input wire:model="prezime" type="text">

        Hello {{$prezime}}
    
    
    
    
    
    </div>
</div>   