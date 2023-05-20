@extends('entreprise.master')
@section( 'content')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet" >
    <link rel="stylesheet" href="site css/company.css">
</head>
<body>
 
<div class="container" >
    <div class="row justify-content-center">
        <h1 class="hero"><i class="fa fa-comments"> message</i></h1>َ
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">subject</th>
                    <th scope="col">message</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody >

                @foreach($messages as $message)
                <tr>
                <th scope="row">{{$message->id}}</th>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
            <td>
            <form action="{{route('messages.destroy',$message)}}" method="post"  >
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit"><i class="fa fa-trash"> Delete</i></button>
            </form>
            </td>
        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection