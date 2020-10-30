<div>
    hello {{$student->name}}<br>

    ovo je rand iz grade 1: {{$comment1->grade1}}<br> 
    ovo je rand iz grade 2: {{$comment2->grade2}}<br>

    <div style="text-align: center">
        <button wire:click="newComment({{$grade1}})">Probam coment spintax sad</button>
        <h1> ggrade| {{$grade1}} |:{{ (new App\Models\Spintax)->process($commentZZ) }}</h1>
    </div>

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

                    <!--radiobutton -->
                    <!-- <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <div class="col-md-6">  -->
                    <div>                
                        <label for="gender" class="col-md-2 control-label">Gender:  </label>                                                                                 
                        <input id="female" type="radio" name="gender" value="Female" {{$student->gender == 'Female' ? 'checked' : ''}}> Female
                        <input id="male" type="radio" name="gender" value="Male" {{$student->gender == 'Male' ? 'checked' :''}} > Male
                    </div>    
                    
                    <!--######################################################################-->	
                    <!-- OPET JEBENO PROBAM WIRE SLIDER -->

                    <!-- 2 check boxa mi trebaju jedan da preuzmem kontrolu nad svima i 1 za randomnes -->
                    <!-- ovo je da dodamo znake uzvika !!! -->
                    controll all-> 
                    <input wire:model="ctrlAllChbx" type="checkbox"><br />
                    <!-- ovo je da dodamo znake uzvika !!! -->
                    randomnes all-> 
                    <input wire:model="randAllChbx" type="checkbox"><br />


                    <!-- slider 0 GRADE IN GENERAL -->
                    <div>
                    <div><label for="grade1" >GRADE your student in general from 1-5: {{$grade1}}</label></div>
                        <input type="range" name="grade" min="1" max="5" step="1" value="{{$student->grade}}" wire:model="grade1" />
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
                    


                    <!-- about student - about_student -->
                    <br>
                    <br>
                    <div class="form-group col-md-12">
                        <label for="about_student">Add some notes about this student(optional):</label>
                        <div class="form-group col-md-12"><textarea type="text" id="about_student" name="about_student" style="width:600px ; height:200px">{{$student->about_student}}</textarea></div>
                        <br>
                    </div>              

                </form>

            </div>

        </div>

</div>
