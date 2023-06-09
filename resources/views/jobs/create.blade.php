@extends('etudiant.master')
@section( 'content')
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
         <h1 class="hero"><i class="fa  fa-plus" > applay for job </i></h1>
                <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="name"><i class="fa fa-graduation-cap">  Name </i></label>
                <input type="text" name="name" value="{{ old('name') }}" ><br><br>
                @error('name')
                <small  class="form-text text-error text-danger">{{ $message }}</small>
                @enderror
                <label for="name" ><i class="fa fa-graduation-cap"> Family Name</i></label>
                <input type="text" name="prenom"  value="{{ old('prenom') }}" ><br><br>
                <label for="name" ><i class="fa fa-graduation-cap"> Age</i></label>
                <input type="text" name="age"  value="{{ old('age') }}" ><br><br>
                <label for="name" ><i class="fa fa-graduation-cap"> gender</i></label>
                <input type="text" name="gender"  value="{{ old('gender') }}" ><br><br>
                <label for="name" ><i class="fa fa-envelope"> E-mail </i></label>
                <input type="text" name="email"  value="{{ old('email') }}"><br><br>
                <label for="name" ><i class="fa fa-info-circle"> adresse </i></label>
                <input type="text" name="adresse"  value="{{ old('adresse') }}"><br><br>
        
<br>
<strong>Image:</strong>
    <input type="file" name="cv" class="form-control" placeholder="image" >
    

    <br>
    <button type="submit" class="btn " ><i class="fa  fa-bookmark" > Save</i></button>
</form>
</div>
@endsection

</body>