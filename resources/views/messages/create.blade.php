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
            <div class="row justify-content-center">
                <h1 class="hero"><i class="fa  fa-plus" > Send message </i></h1>
                <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form">
                @csrf
                <div class="form-group" style="height:500px;">
                <label for="name" ><i class="fa fa-user">  Name </i> </label>
                <input type="text" name="name" value="{{ old('name') }}" ><br><br>
              
                <label for="name" ><i class="fa fa-envelope"> E-mail</i></label> 
                <input type="text" name="email"  value="{{ old('email') }}" ><br><br>
                <label for="name" ><i class="fa fa-file"> Subject</i></label> 
                <input type="text" name="subject"  value="{{ old('subject') }}" ><br><br>
                <label for="name" ><i class="fa fa-comments"> message</i></label> 
                <input type="text" name="message"  value="{{ old('message') }}" ><br><br>
 
     
           
 <button style="margin-left: 20px;" type="submit" class="btn " ><i class="fa  fa-bookmark" > Send</i></button>
</form>
</div>
@endsection