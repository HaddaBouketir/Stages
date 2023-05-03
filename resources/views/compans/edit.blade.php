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
            <div class="row justify-content-center">
                <h1 class="hero"><i class="fa fa-spinner"> Update compan</i></h1>
                <form action="{{ route('compans.update',$compan) }}" method="POST" enctype="multipart/form">
                    @method('put')
                @csrf
                <div class="form-group"style="height:400px;">
                <label for="name"><i class="fa fa-building"> Company Name </i>  </label>
             
                <input type="text" name="name"  value="{{$compan->name}}" ><br><br>
                @error('name')
                <small  class="form-text text-error text-danger">{{ $message }}</small>
                @enderror
                <label for="name"><i class="fa fa-envelope"> Company E-mail </i></label>
             
                <input type="text" name="email"  value="{{$compan->email}}" ><br><br>
            
        
            <button type="submit"style="margin-left: 20px;" class="btn " ><i class="fa fa-wrench" aria-hidden="true"> Update</i></button>
</form>
</div>
@endsection
</body>
    