<div>

    <input wire:model="noName" type="text">
    <h2>Hey {{$noName}}!</h2>
    <br>

    <div>
        <label for="speak1" >Speaking: {{$speak1}}</label>
        <input type="range" name="Speaking" min="0" max="3" step="1" value="{{$student->Speaking}}" wire:model="speak1" />
    </div><br>
    

</div>
