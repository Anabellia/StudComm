@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    
    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->
    <div class="content">
        <div class="title mx-auto ">
        <b><h2>My Students</h2></b>
        </div>    
        <!-- ovo je message kad napravish novog studenta -->
        <p class="mssg">{{ session('mssg')}}</p>

        <div class="wrapper student-index">
            @foreach($students as $student)     
                <div>
                    <a href="/students/{{$student->id}}"><b>{{$student->name}} </b><br></a>
                    <br>      
                </div>
            @endforeach
        </div>    
    </div
</div>

@endsection
            


 