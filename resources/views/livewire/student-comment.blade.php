<div>
    hello {{$student->name}}<br>

    ovo je rand iz grade 1: {{$comment1->grade1}}<br> 
    ovo je rand iz grade 2: {{$comment2->grade2}}<br>

    <div style="text-align: center">
        <button wire:click="newComment({{$Intro1}})">Probam coment spintax sad</button>
        <h1> ggrade| {{$Intro1}} |:{{$commentZZ}} </h1>
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
                    
                        <label for="Intro1" >Introduction: {{$Intro1}}</label>
                        <div><input type="range" name="Introduction" min="0" max="5" step="1" value="{{$student->Introduction}}" wire:model.debounce="Intro1" /></div><br>
                    
                    
                    
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
