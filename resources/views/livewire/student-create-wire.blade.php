<div>
    <!--     aaaaa -->
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui.min.css') }}" >


	<!-- <script>
		$( function() {
			$( "#slider-range-max" ).slider({
			range: "max",
			min: 0,
			max: 5,
			//defoult
			value: 2,
			slide: function( event, ui ) {
				$( "#amount" ).val( ui.value );
			}
			});
			$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
		} );
	</script> -->
   

<!--     aaaaa -->



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->
    <div class="wrapper create-students">
    
        <h1>Create new student</h1>
        <form action="/students" method="POST">
            @csrf           

            <!-- name of the student -->
            <div>
            <label for="name">Student name(required):</label>
            <input type="text" id="name" name="name" autocomplete="off"></input>            
            <p style="color:red;">@error('name') {{$message}}@enderror</p1> 
            </div>


            <!--radiobutton -->
            <!-- <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}"> -->
            <div>
                <label for="gender" class="col-md-2 control-label">Gender(required): </label>
                <!-- <div class="col-md-6"> -->   
                    <div>            
                        <input id="female" type="radio" name="gender" value="Female"> Female 
                        <input id="male" type="radio" name="gender" value="Male"> Male 
                    </div>                   
                <p style="color:red;">@error('gender') {{$message}}@enderror</p1>   
            </div>       

                       


            <!--######################################################################-->	
                    <!-- OPET JEBENO PROBAM WIRE SLIDER -->

                    <!-- slider 0 GRADE IN GENERAL -->
                    <div>
                    <div><label for="grade1" >GRADE your student in general from 1-5: {{$grade1}}</label></div>
                        <input type="range" name="grade" min="0" max="3" step="1" value="{{$grade1}}" wire:model="grade1" />
                    </div><br>

                    <!-- submit button -->
                    <input type="submit" value="Submit new student">  <br><br>
                    
                    <!--(Introduction petljaus) -->
                    <div>
                        <label for="intro1" >Introduction: {{$intro1}}</label>
                        <input type="range" name="Introduction" min="0" max="3" step="1" value="{{$intro1}}" wire:model="intro1" />
                    </div><br>

                    <!--(Behavior petljaus) -->
                    <div>
                        <label for="beha1" >Behavior: {{$beha1}}</label>
                        <input type="range" name="Behavior" min="0" max="3" step="1" value="{{$beha1}}" wire:model="beha1" />
                    </div><br>


                    <!--Student Speaking  -->                                    
                    <div>
                        <label for="speak1" >Speaking: {{$speak1}}</label>
                        <input type="range" name="Speaking" min="0" max="3" step="1" value="{{$speak1}}" wire:model="speak1" />
                    </div><br>
        
            	    <!-- slider  for Reading-->
                    <div>
                        <label for="read1" >Reading: {{$read1}}</label>
                        <input type="range" name="Reading" min="0" max="3" step="1" value="{{$read1}}" wire:model="read1" />
                    </div><br>
    
    
            	    <!--Student Writing  -->
                    <div>
                        <label for="writ1" >Writing: {{$writ1}}</label>
                        <input type="range" name="Writing" min="0" max="3" step="1" value="{{$writ1}}" wire:model="writ1" />
                    </div><br>


                    <!--Student Listening  -->
                    <div>
                        <label for="list1" >Listening: {{$list1}}</label>
                        <input type="range" name="Listening" min="0" max="3" step="1" value="{{$list1}}" wire:model="list1" />
                    </div><br>


                    <!--Student Comprehension  -->
                    <div>
                        <label for="compr1" >Comprehension: {{$compr1}}</label>
                        <input type="range" name="Comprehension" min="0" max="3" step="1" value="{{$compr1}}" wire:model="compr1" />
                    </div><br>


                    <!--Student Subject  -->
                    <div>
                        <label for="subj1" >Subject: {{$subj1}}</label>
                        <input type="range" name="Subject" min="0" max="3" step="1" value="{{$subj1}}" wire:model="subj1" />
                    </div><br>


                    <!--Student Conclusion  -->
                    <div>
                        <label for="conc1" >Conclusion: {{$conc1}}</label>
                        <input type="range" name="Conclusion" min="0" max="3" step="1" value="{{$conc1}}" wire:model="conc1" />
                    </div><br>

                    <!--######################################################################-->	
           

            <!--about student - about_student -->
            <br>
            <label for="about_student">Add some notes about this student(optional):</label>
            <input type="text" id="about_student" name="about_student"></input>
            <br>

            
        </form>

    </div>

</div>
</div>
