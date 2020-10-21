<div>
    hello {{$student->name}}

    @foreach($comment as $com)
        {{$com->grade2}}
    @endforeach



<!-- ovo dole sam cut iz edit -->
    @include('sliders.editSlidersScripts')


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


            <!-- ja pobriso defoult gluposti i dodao samo ovo -->
            <div class="wrapper create-students">

                <h1>Edit student</h1>
                <form action="/students/{{$student->id}}" method="POST">
                    @csrf           
                    @method('PATCH')
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

                    <!-- submit button -->
                    <input type="submit" value="Edit student">
                    


                </form>
                <a href="/students"><button>&lt; &lt; Back to all students</button></a> 



            </div>

        </div>

</div>
