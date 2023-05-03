@extends('layouts.app')
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
        <h1 class="hero"><i class="fa fa-graduation-cap"> Internspot </i>
            <a type="button" href="{{ route('stages.create')}}" class="btn  margin-tb"><i class="fa fa-plus-circle">Add Internship</i></h1></a>َ
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">type</th>
                    <th scope="col">start</th>
                    <th scope="col">finish</th>
                    <th scope="col">company</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody >

                @foreach($stages as $stage)
                <tr>
                <th scope="row">{{$stage->id}}</th>
                <td>{{$stage->name}}</td>
                <td>{{$stage->type}}</td>  
                <td>{{$stage->start}}</td>             
                <td>{{$stage->finish}}</td>
                <td >{{$stage->compan->name}}</td>
             
            <td >
                <a  class=" btn " href="{{route('stages.show',$stage)}}"><i class="fa fa-eye" > Show</i></a>
                <a  class=" btn " href="{{route('stages.edit',$stage)}}" style="margin-left: 10px; margin-top:px;"><i class="fa  fa-wrench"> Edit</i></a>
                <form action="{{route('stages.destroy',$stage)}}" method="post" style="margin-left: 180px; margin-top:-37px;"  >
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit"><i class="fa fa-trash"> Delete</i></button>
            </form>

            </td>
        </tr>
                @endforeach
            </tbody>
        </table>

@endsection