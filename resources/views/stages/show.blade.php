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
    <h1 class="hero"><i class="fa fa-eye"> Show Internship </i></h1>
            <div class="row justify-content-center">
            <div class="col-md-4" >
                <img src="/images/show.png" class="img-show" width="400px">
                <div class="product-name" style="margin-left:-350px; margin-top:-30px;">
                <i class="fa fa-building">  {{$stage->compan->name}}</i><br>
                <i class="fa fa-envelope">  {{$stage->compan->email}}</i>
                </div>  </div>     
            <div class="card">
            <div class="product-name" ><h1> Details  </h1></div>
              <i class="fa fa-graduation-cap">  Name :   {{$stage->name}}</i><br>
              <i class="fa fa-file-excel-o"> Internship Subject :  {{$stage->type}}</i><br>
              <i class="fa fa-calendar"> Start-Date :  {{$stage->start}}</i><br>
              <i class="fa fa-calendar"> Finish-Date :  {{$stage->finish}}</i><br>
</div>
</div>
@endsection

   
            
             
          
