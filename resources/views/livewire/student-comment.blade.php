<div>
    hello {{$student->name}}<br>

    ovo je rand iz grade 1: {{$comment1->grade1}}<br> 
    ovo je rand iz grade 2: {{$comment2->grade2}}<br>

    <div style="text-align: center">
        <button wire:click="newComment({{$intro1}})">Probam coment spintax sad</button>
        <h1> ggrade| {{$intro1}} |:{{ (new App\Models\Spintax)->process($commentZZ) }} </h1>
    </div>
    <!-- <span class="Spintax">{{ (new App\Models\Spintax)->process($commentZZ) }}</span> -->


    <!-- OVE "PUSH" PROBAM DA SACUVAM JQUERY DA RADI ZAJEDNO SA LIVEWIRE -->
    


<!-- ovo dole sam cut iz edit -->
    @include('sliders.editSlidersScripts')


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


            <!-- ja pobriso defoult gluposti i dodao samo ovo -->
            <div class="wrapper create-students">

                <h3>Edit student: {{$student->name}}</h3>

                
                
                <form action="/students/{{$student->id}}" method="POST">
                    @csrf           
                    @method('PATCH')

                    <a href="/students" class="btnStack">Back to all students</a>
                    <!-- submit button -->
                    <input type="submit" value="Edit student"> <br> <br><br>

                    <!-- name of the student -->
                    <label for="name" >Student name:</label>
                    <input type="text" id="name" name="name" value="{{$student->name}}"></input>
                    <br>
                    

                    <!--######################################################################-->	
                    <!-- OPET JEBENO PROBAM WIRE SLIDER -->


                    <!-- slider 0 GRADE IN GENERAL -->
                    <div>
                    <div><label for="grade1" >GRADE your student in general from 1-5: {{$grade1}}</label></div>
                        <input type="range" name="grade" min="0" max="5" step="1" value="{{$student->grade}}" wire:model="grade1" />
                    </div><br>
                    
                    <!--(Introduction petljaus) -->
                    <div>
                        <label for="intro1" >Introduction: {{$intro1}}</label>
                        <input type="range" name="Introduction" min="0" max="5" step="1" value="{{$student->Introduction}}" wire:model="intro1" />
                    </div><br>

                    <!--(Behavior petljaus) -->
                    <div>
                        <label for="beha1" >Behavior: {{$beha1}}</label>
                        <input type="range" name="Behavior" min="0" max="5" step="1" value="{{$student->Behavior}}" wire:model="beha1" />
                    </div><br>


            	    <!--Student Speaking  -->
                    <div>
                        <label for="speak1" >Speaking: {{$speak1}}</label>
                        <input type="range" name="Speaking" min="0" max="5" step="1" value="{{$student->Speaking}}" wire:model="speak1" />
                    </div><br>
    
    
            	    <!-- slider  for Reading-->
                    <div>
                        <label for="read1" >Reading: {{$read1}}</label>
                        <input type="range" name="Reading" min="0" max="5" step="1" value="{{$student->Reading}}" wire:model="read1" />
                    </div><br>
    
    
            	    <!--Student Writing  -->
                    <div>
                        <label for="writ1" >Writing: {{$writ1}}</label>
                        <input type="range" name="Writing" min="0" max="5" step="1" value="{{$student->Writing}}" wire:model="writ1" />
                    </div><br>


                    <!--Student Listening  -->
                    <div>
                        <label for="list1" >Listening: {{$list1}}</label>
                        <input type="range" name="Listening" min="0" max="5" step="1" value="{{$student->Listening}}" wire:model="list1" />
                    </div><br>


                    <!--Student Comprehension  -->
                    <div>
                        <label for="compr1" >Comprehension: {{$compr1}}</label>
                        <input type="range" name="Comprehension" min="0" max="5" step="1" value="{{$student->Comprehension}}" wire:model="compr1" />
                    </div><br>


                    <!--Student Subject  -->
                    <div>
                        <label for="subj1" >Subject: {{$subj1}}</label>
                        <input type="range" name="Subject" min="0" max="5" step="1" value="{{$student->Subject}}" wire:model="subj1" />
                    </div><br>


                    <!--Student Conclusion  -->
                    <div>
                        <label for="conc1" >Conclusion: {{$conc1}}</label>
                        <input type="range" name="Conclusion" min="0" max="5" step="1" value="{{$student->Conclusion}}" wire:model="conc1" />
                    </div><br>

                    <!--######################################################################-->	
                    
                    
                    

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
