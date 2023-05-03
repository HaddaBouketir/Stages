@extends('students.master')
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
    <h1 class="hero"><i class="fa fa-mobile">  Apply for a job </i>
    <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group" style="height: 550px;">
                <label for="name"><i class="fa fa-mobile"> Name   </i></label>
                <input type="text" name="name" value="" ><br>
                <label for="name" ><i class="fa fa-money"> Family Name</i></label>
                <input type="text" name="prenom"  value="" ><br>
                <label for="name" ><i class="fa fa-text-height"> Age </i></label>
                <input type="text" name="email"  value=""><br>
                <label for="name" ><i class="fa fa-text-width"> E-mail </i></label>
                <input type="text" name="cv"  value=""><br>
                <label for="name" ><i class="fa fa-text-width"> Adresse </i></label>
                <input type="text" name="cv"  value=""><br>
                
                <select class="form-select">
                 
                    <option >Famele</option>
                    <option >Male</option>
                    </select>
<br><br>
<label>Add CV:</label>
    <input type="file" name="image" class="form-control" style="width:400px;" placeholder="Uplode your cv" >
    </div>
    <br>
    <button type="submit" class="btn " ><i class="fa  fa-bookmark" > Save</i></button>
</form>
</div>
@endsection

 