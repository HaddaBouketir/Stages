<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="site css/company.css">
</head>
<body>
<div class="header" style=" background: rgba(12, 11, 9, 0.6); ">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="input-group search-area right d-lg-inline-flex d-none" >
                        <input  type="text" class="form-control" placeholder="Find something here...">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-search"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right main-notification" style="color:white;">
                    <li class="nav-item dropdown notification_dropdown"style="color:white;">
                        <a class="nav-link bell dz-theme-mode" href="#"style="color:white;">
                            <i id="icon-light" class="fa fa-sun-o"style="color:white;"></i>
                            <i id="icon-dark" class="fa fa-moon-o"style="color:white;"></i>
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link"style="color: white;font-size:20px;" href="{{ route('stages.create') }}"> <i class="fa fa-plus">{{ __('') }}</i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link"style="color: white;font-size:20px;" href="{{ route('jobs.index') }}"> <i class="fa fa-building">{{ __('') }}</i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link"style="color: white;font-size:20px;" href="{{ route('messages.index') }}"> <i class="fa fa-comments">{{ __('') }}</i></a>
                        </li>
                   
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="images/user-icon-image-18.jpg" width="20" alt="">
                            <div class="header-info">
                                <span style="color:white;">Hananebktr</span>
                                <small style="color:white;">Super Admin</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="page-login.html" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2"> <a href="{{ url('/') }}"> Logout</a></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>