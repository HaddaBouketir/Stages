@extends('etudiant.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet" >
    <link rel="stylesheet" href="site css/company.css">
</head>
<body>
    <div class="NAVBAR">
<div class="container">
    <div class="row justify-content-center">
    <h1 class="hero"><i class="fa fa-"> Your ideal internship </i>
<form action="{{url('/search')}}" type="get">
    <div >
        <input type="search" class="search-form" id="search-box"  name="search" placeholder="Search for internship...">
     <a ><button class="btnn" type="submit" ><i class="fa fa-search"></i></button></a></h1>
    </div>
    @endsection