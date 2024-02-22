@extends("layout")

@php
    $pageName = "material";
@endphp

@section('content')

<h3>{{ $students[0]->materialName }}</h3>


<div class="col-sm-10">
    <label for="materialName" class="col-sm-2 col-form-label">Grade</label>
    <select class="form-control" id="materialName" name="gradeId" style="background-color: white;">        
        @foreach ($students as $oneStudent)                
            <option value="{{ $oneStudent->studentID }}">{{ $oneStudent->fullName }}</option>
        @endforeach
    </select> 
</div>  
        <br>
    
    <div class="col-sm-10">
        <label for="materialName" class="col-sm-2 col-form-label">Degree</label>        
        <div class="form-group">
            <input type="text" name="degree" class="form-control" placeholder="dgree">
        </div>
    </div>

@endsection

