
@extends('entreprise.master')
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
    <h1 class="hero" ><i class="fa fa-building"> Hello  </i></h1>

    <div class="colonne">
    <i class="fa fa-plus" > </i>
    <h3 style="color:white;"><a href="{{url('/sech')}}"style="color:white;"> Post</a></h3>
    </div>
    <div class="colonne"style=" margin-left: 600px;margin-top:-150px;">
    <i class="fa  fa-building-o" > </i>
    <h3 style="color:white;"><a href="{{url('/')}}"style="color:white;"> Condidate Management</a></h3>
    </div>
    <div class="colonne"style=" margin-left: 900px;margin-top:-150px;">
    <i class="fa  fa-comments" > </i>
    <h3 style="color:white;"><a href="{{url('/')}}"style="color:white;"> Messages</a></h3>
    </div>
    <h1 class="hero"><i class="fa fa-eye"> Condidate </i></h1>
    @foreach($students as $student)
                <div class="slider">
                  <div>
                  <img src= "/images/{{ $student->image }}" class="images-slider">

                    </div>
                    <div>
                    <h1 class="card-title"><i class="fa fa-building">  {{$student->compan->name}}</i></h1>
                    <h2 class="card-title"><i class="fa fa-envelope">  {{$student->compan->email}}</i></h2>        
              <i class="fa fa-graduation-cap">  Name :   {{$student->name}}</i><br>
              <i class="fa fa-file-excel-o"> Familly Name :  {{$student->prenom}}</i><br>
              <i class="fa fa-envelope"> E-mail:  {{$student->email}}</i><br>             
                               </div>
                @endforeach
         
</div>

            @endsection