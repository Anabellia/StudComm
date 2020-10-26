<div>
    hello {{$student->name}}<br>

    hey be evo mene randoma iz db he he ovo je rand iz grade 1: {{$comment1->grade1}}<br>

    hey be evo mene randoma iz db he he ovo je rand iz grade 2: {{$comment2->grade2}}<br>
    hey be evo mene randoma iz db he he ovo je rand iz grade 3: {{$comment2->grade3}}<br>
    hey be evo mene randoma iz db he he ovo je rand iz grade 4: {{$comment2->grade4}}<br>
    hey be evo mene randoma iz db he he ovo je rand iz grade 5: {{$comment2->grade5}}<br>

    <div style="text-align: center">
        <button wire:click="increment">Probam coment spintax sad</button>
        <h1>{{$comment2->grade2}} ggrade:{{$student->grade}}</h1>
    </div>


    <!-- OVE "PUSH" PROBAM DA SACUVAM JQUERY DA RADI ZAJEDNO SA LIVEWIRE -->
    


<!-- ovo dole sam cut iz edit -->
    @include('sliders.editSlidersScripts')


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


            <!-- ja pobriso defoult gluposti i dodao samo ovo -->
            <div class="wrapper create-students">

                <h1>Edit student</h1>

                
                
                <form action="/students/{{$student->id}}" method="POST">
                    @csrf           
                    @method('PATCH')
                    
                    <!-- OPET JEBENO PROBAM WIRE SLIDER -->
                    <div>
                        <label for="Intro1" >Introduction: {{ $Intro1 }}</label>
                        <div><input type="range" id="Intro1" name="Introduction" min="0" max="5" step="1" value="{{$student->Introduction}}" wire:range="Intro1" /><br></div>
                    </div>
                   
                    
                    <a href="/students" class="btnStack">Back to all students</a>
                    <!-- submit button -->
                    <input type="submit" value="Edit student"> <br> <br><br>

                    <!-- name of the student -->
                    <label for="name" >Student name:</label>
                    <input type="text" id="name" name="name" value="{{$student->name}}"></input>
                    <br>

                    <!--radiobutton -->
                    <!-- <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <div class="col-md-6">  -->
                                        <label for="gender" class="col-md-2 control-label">Gender:  </label>                                           
                                            <input id="female" type="radio" name="gender" value="Female" {{$student->gender == 'Female' ? 'checked' : ''}}> Female
                                            <input id="male" type="radio" name="gender" value="Male" {{$student->gender == 'Male' ? 'checked' :''}} > Male
                    
                    
        			@include('sliders.editSlidersDivs')
                    

                    <!-- about student - about_student -->
                    <br>
                    <br>
                    <div class="form-group col-md-12">
                        <label for="about_student">Add some notes about this student(optional):</label>
                        <div class="form-group col-md-12"><textarea type="text" id="about_student" name="about_student" style="width:400px">{{$student->about_student}}</textarea></div>
                        <br>
                    </div>

                    
                    


                </form>
                <!-- Gore imas prvi push "PUSH" PROBAM DA SACUVAM JQUERY DA RADI ZAJEDNO SA LIVEWIRE -->
                
                <!-- i na kraju ovog blade filea pre /body taga imash  @/stack/('/scripts/'/)koji refresh ceo page -->
                



            </div>

        </div>

</div>
