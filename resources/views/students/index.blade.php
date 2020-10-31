@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    
    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->    
    
    <div class="content">
        <div class="title mx-auto ">
        <b><h2>My Students</h2></b>
        
        </div>
        
        
        <br />    
        <div class="text m-b-md">You can 
        
            <a href="{{ route('students.create') }}"><button> Create new student</button>Or choose one from the list</a> <br><br>
        </div>
        <!-- ovo je message kad napravish novog studenta -->
        <p class="mssg">{{ session('mssg')}}</p>

        <!-- ///////////////////////////////////////////////////// -->

        <table class="table table-hover">

    <thead>

      <th>Student Name</th>

      <th>Details </th>

      <th>Make Comements</th>

    </thead>

    <tbody>
@foreach($students as $student)

        <tr>

          <td><b>{{$student->name}}</b> </td>

          <td></form><a href="/students/{{$student->id}}"><button>View Student details</button></a>  </td>

          <td></form><a href="/students/{{$student->id}}/edit"><button>Make comments / Edit student</button></a>  </td>


        </tr>
@endforeach

    </tbody>

</table>

        <!-- ///////////////////////////////////////////////////// -->


            
    </div
</div>

@endsection
            


 