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
<div class="container" >
    <div class="row justify-content-center">
        <h1 class="hero"><i class="fa fa-building"> Company</i>
            <a type="button" href="{{ route('compans.create')}}" class="btn "><i class="fa fa-plus-circle"> Add Company</i></a></h1>َ
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody >

                @foreach($compans as $compan)
                <tr>
                <th scope="row">{{$compan->id}}</th>
                <td>{{$compan->name}}</td>
                <td>{{$compan->email}}</td>
            <td>
                <a class="btn" href="{{route('compans.edit',$compan)}}"><i class="fa fa fa-wrench"> Edit</i></a>
                <form action="{{route('compans.destroy',$compan)}}" method="post" style="margin-left: 100px; margin-top:-37px;" >
                    @csrf
                    @method('DELETE')
                    <button class="btn " type="submit"><i class="fa fa-trash"> Delete</i></button>
            </form>
            </td>
        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
