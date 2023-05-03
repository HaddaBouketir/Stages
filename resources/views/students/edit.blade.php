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
    <h1 class="hero"><i class="fa fa-spinner"> Update  student</i></h1>
            <div class="row justify-content-center">
                <form action="{{ route('students.update',$student) }}" method="POST" enctype="multipart/form">
                    @method('put')
                @csrf
                <div class="form-group" style="height: 800px;">
                <label for="name" ><i class="fa fa-graduation-cap">  Name </i> </label>
                <input type="text" name="name"  value="{{$student->name}}" ><br><br>
                @error('name')
                <small  class="form-text text-error text-danger">{{ $message }}</small>
                @enderror
                <label for="name" ><i class="fa fa-graduation-cap">  Family Name</i> </label>
                <input type="text" name="prenom"  value="{{$student->prenom}}" ><br><br>
                <label for="name" ><i class="fa fa-envelope"> E-mail </i> </label>
                <input type="text" name="email"  value="{{$student->email}}"><br><br>
                <label for="name" ><i class="fa fa-info-circle"> CV</i>  </label>
                <input type="text" name="cv"  value="{{$student->cv}}"><br><br>
                
                <label><i class="fa fa-building"> company</i></label><br>
                <select  name="compan_id" class="form-select">
                @foreach ($compans as $compan)
             <?php if($student->compan_id == $compan->id){ ?>
                <option style="background: palevioletred;"   value="{{ $compan->id}}" selected>{{$compan->name}}</option>
                <?php }else { ?>
                <option value="{{ $compan->id}}">{{$compan->name}}</option>
                <?php } ?>
                @endforeach
                </select><br>
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image" >
                    <img src="/images/{{ $student->image }}" width="300px" style="margin-left: 25px;">
               
            
            <br><br>
            <button type="submit" class="btn " ><i class="fa fa-wrench" aria-hidden="true"> Update</i></button>
</form>
</div>
@endsection
