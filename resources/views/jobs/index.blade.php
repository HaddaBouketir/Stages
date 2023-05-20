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
<h1 class="hero"><i class="fa fa-eye"> View job offers </i></h1>
    @foreach($jobs as $job)
                <div class="slider" style="width:700px;">
                <td> <img src= "/images/{{ $job->cv }}" class="image-m"  style=""></td>
            <div class="details" style="">
            <h1 class="card-title"><i class="fa fa-user"> {{$job->name}}</i></h1>
                    <h2 class="card-title"><i class="fa fa-user" > {{$job->prenom}}</i></h2><br>
            <h1 class="text-muted" style="color:black;"><i class="fa fa-info"> Details </i></h1>          
              <i class="fa fa-birthday-cake">  Age :   {{$job->age}}</i><br>
              <i class="fa fa-venus-mars"> Gender :  {{$job->gender}}</i><br>
              <i class="fa fa-envelope"> E-mail :  {{$job->email}}</i><br>
              <i class="fa fa-map-marker"> Adresse :  {{$job->adresse}}</i>
            </div>
              <form action="{{route('jobs.destroy',$job)}}" method="post"  >
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit" style="width:200px; background:grey;margin-top:100px;margin-left:450px;"><i class="fa fa-trash"> Delete</i></button>
            </form> 
                @endforeach
         
</div>
@endsection