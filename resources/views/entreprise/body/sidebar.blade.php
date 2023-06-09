<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="site css/company.css">
</head>
<body>
<div class="deznav" style=" background: rgba(12, 11, 9, 0.6); " >
    <div class="deznav-scroll">
        <div class="main-profile">
        <div class="image-bx">
                <img src="images/logo.jpg" >
              
            </div>
    
        </div>
        <ul class="metismenu" id="menu" >
            <li class="nav-label first" >Main Menu</li>
            <li class="nav-label">company</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa fa-plus" style=" color: #cda45e;font-size: 30px;font-weight: bold;"></i>
                    <span class="nav-text" style="color:white;">Internship</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('stages.create') }}" style="color:white;">Post internship</a></li>
                </ul>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-building" style=" color: #cda45e;font-size: 30px;font-weight: bold;"></i>
                    <span class="nav-text" style="color:white;">Condidate Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a a href="{{ route('jobs.index') }}" style="color:white;">View jobs offers</a></li>
                </ul>
            </li>
            <li class="nav-label" >Communication</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-comments" style=" color: #cda45e;font-size: 30px;font-weight: bold;"></i>
                    <span class="nav-text" style="color:white;">Communication</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('messages.index') }}" style="color:white;">Messages</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright" style="color:white;">
            <p><strong> © 2022 All Rights Reserved</strong></p>
            <p class="fs-12">Made with <span class="heart"></span> by Hanane</p>
        </div>
    </div>
</div>