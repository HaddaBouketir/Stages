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
<div class="container">
    <div class="row justify-content-center">
        <h1 class="hero"><i class="fa fa-graduation-cap"> Students </i>
            <a type="button" href="{{ route('students.create')}}" class="btn  margin-tb"><i class="fa fa-plus-circle">Add Student</i></h1></a>َ
            <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">full Name</th>
                    <th scope="col">email</th>
                    <th scope="col">cv</th>
                    <th scope="col">company</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody >

                @foreach($students as $student)
                <tr>
                <th scope="row">{{$student->id}}</th>
                <td> <img src= "/images/{{ $student->image }}" width="100px"></td>
                <td>{{$student->name}}</td>
                <td>{{$student->prenom}}</td>  
                <td>{{$student->email}}</td>             
                <td>{{$student->cv}}</td>
               <td >{{$student->compan->name}}</td>
            <td >

                <a  class=" btn " href="{{route('students.edit',$student)}}" style="margin-left: 10px; margin-top:px;"><i class="fa  fa-wrench"> Edit</i></a>
                <form action="{{route('students.destroy',$student)}}" method="post" style="margin-left: 90px; margin-top:-37px;"  >
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