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

    <h1 class="hero" ><i class="fa fa-graduation-cap"> Hello {{ Auth::user()->name }} </i></h1>

    <div class="colonne">
    <i class="fa fa-search" > </i>
    <h3 style="color:white;"><a href="{{url('/sech')}}"style="color:white;"> Search</a></h3>
    </div>
    <div class="colonne"style=" margin-left: 600px;margin-top:-150px;">
    <i class="fa  fa-building-o" > </i>
    <h3 style="color:white;"><a href="{{ route('jobs.create') }}"style="color:white;"> Applay for a job</a></h3>
    </div>
    <div class="colonne"style=" margin-left: 900px;margin-top:-150px;">
    <i class="fa  fa-comments" > </i>
    <h3 style="color:white;"><a href="{{ route('messages.create') }}}"style="color:white;"> Messages</a></h3>
    </div>
    <h1 class="hero"><i class="fa fa-eye"> Show Internship Posts </i></h1>
    @foreach($stages as $stage)
                <div class="slider">
                  <div>
                    <img src="/images/show.png"  width="400px" height="300px">

                    </div>
                    <div>
                    <h1 class="card-title"><i class="fa fa-building">  {{$stage->compan->name}}</i></h1>
                    <h2 class="card-title"><i class="fa fa-envelope">  {{$stage->compan->email}}</i></h2>
            <h1 class="text-muted" style="color:black;"><i class="fa fa-info"> Details </i></h1>          
              <i class="fa fa-graduation-cap">  Name :   {{$stage->name}}</i><br>
              <i class="fa fa-file-excel-o"> Internship Subject :  {{$stage->type}}</i><br>
              <i class="fa fa-calendar"> Start-Date :  {{$stage->start}}</i><br>
              <i class="fa fa-calendar"> Finish-Date :  {{$stage->finish}}</i>
                          
                          
             <a href="{{route('stages.show',$stage)}}" class="btn"
             style="background:grey;color: white;font-size: 15px;
                              border-radius:30px;margin-left:200px;margin-top:-50px;">
                               <i class="fa fa-eye"> View</i> </a>
                               </div>
                @endforeach
         
</div>

            @endsection
