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

<div class="NAVBAR">
<div class="Container">
    <h1 class="hero"><i class="fa fa-spinner"> Update  stage</i></h1>
            <div class="row justify-content-center">
                <form action="{{ route('stages.update',$stage) }}" method="POST" enctype="multipart/form">
                    @method('put')
                @csrf
                <div class="form-group">
                <label for="name" ><i class="fa fa-graduation-cap"> Stage Name </i> </label>
                <input type="text" name="name"  value="{{$stage->name}}" ><br><br>
                @error('designation')
                <small  class="form-text text-error text-danger">{{ $message }}</small>
                @enderror
                <label for="name" ><i class="fa fa-file-excel-o"> Internship Subject</i> </label>
                <input type="text" name="type"  value="{{$stage->type}}" ><br><br>
                <label for="name" ><i class="fa fa-calendar"> Start-Date</i>  </label>
                <input type="text" name="start"  value="{{$stage->start}}"><br><br>
                <label for="name" ><i class="fa fa-calendar"> Finish-Date </i> </label>
                <input type="text" name="finish"  value="{{$stage->finish}}"><br><br>
                <label><i class="fa fa-building"> company</i></label><br><br>
                <select  name="compan_id" class="form-select">
                @foreach ($compans as $compan)
             <?php if($stage->compan_id == $compan->id){ ?>
                <option style="background: #d9ba85;"   value="{{ $compan->id}}" selected>{{$compan->name}}</option>
                <?php }else { ?>
                <option value="{{ $compan->id}}">{{$compan->name}}</option>
                <?php } ?>
                @endforeach
                </select>
              
<br>
            <button type="submit" style="margin-left: 20px;" class="btn " ><i class="fa fa-wrench" aria-hidden="true"> Update</i></button>
</form>
</div>
@endsection