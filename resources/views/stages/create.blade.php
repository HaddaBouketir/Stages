@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet" >
    <link rel="stylesheet" href="/site css/company.css">
</head>
<body>
<div class="Container">
    <div class="NAVBAR">
            <div class="row justify-content-center">
         <h1 class="hero"><i class="fa  fa-plus" > Post Internship </i></h1>
                <form action="{{ route('stages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="name"><i class="fa fa-graduation-cap"> Name </i></label>
                <input type="text" name="name" value="{{ old('name') }}" > <br><br>
                @error('name')
                <small  class="form-text text-error text-danger">{{ $message }}</small>
                @enderror
                <label for="name" ><i class="fa fa-file-excel-o"> Internship Subject</i></label> 
                <input type="text" name="type"  value="{{ old('type') }}" ><br><br>
                <label for="name" ><i class="fa fa-calendar"> Start-Date </i></label> 
                <input type="text" name="start"  value="{{ old('start') }}"> <br><br>
                <label for="name" ><i class="fa fa-calendar"> Finish-Date </i></label> 
                <input type="text" name="finish"  value="{{ old('finish') }}">
                <br><br>
              
                <h3 style="margin-left: 20px;">Select your Company</h3>
                <select name="compan_id" class="form-select"  >
                    @foreach ($compans as $compan)
                    <option style="background:#d9ba85;"  value="{{ $compan->id}}">{{$compan->name}}</option>
                    @endforeach
                    </select>
        <br>
           
                   
    <button type="submit" style="margin-left: 20px;"class="btn " ><i class="fa  fa-bookmark" > Post</i></button>
</form>
</div>
@endsection

</body>