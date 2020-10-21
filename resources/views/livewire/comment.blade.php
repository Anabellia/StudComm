 <div>
    <div style="text-align: center">
        <button wire:click="increment">PLUS +</button>
        <h1>{{ $commentG }}</h1>
    </div>

    <p style="color:red;"> {{implode(", ", $tipla)}} {{$name}} {{$greeting}} @if($loud) !!! @endif</p>

    
        <!-- Ovo dole je od novog tutsa sa official livewire site -->
        <div>        
        <!-- ovaj menja text od name in a real time -->
        ovde kucas ime koje se gore menja realtime: <input wire:model="name" type="text"><br /><br />


        <!-- ovo je da dodamo znake uzvika !!! -->
        Its a checkbox for loud-> 
        <input wire:model="loud" type="checkbox"><br /><br />

        <!-- Select one of those to be displajed after name-->
        <select wire:model="greeting">
            <option>ByeBye</option>
            <option>Goodbye</option>
            <option>Adios</option>
        </select><br /><br />
        <!-- Multiple selections *shift click-->
        <select wire:model="tipla" multiple><br /><br />
            <option>you were godd </option>
            <option>you were bad</option>
            <option>you where</option>
        </select><br /><br />
         
        <form action="#" wire:submit.prevent="$set('name', 'Bingo2')">
            <button>Reset Name</button><br /><br />
         </form>
    </div>

    <!-- Malo se nagomilalo pa sad opet krecem 4ti video ovde malo dole -->
    <div>
        ovo je novo sad:
        <input wire:model="prezime" type="text">

        Hello {{$prezime}}
    
    
    
    
    
    </div>
</div>   