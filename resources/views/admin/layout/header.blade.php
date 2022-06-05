<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NTAF National Tharu Artist Forum</title>

    <link rel="stylesheet" href="{{ asset('admin-frontend/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body>
    <div class="artist__header ">

        <img class="artist__profile__img" src="{{ asset('admin-frontend/image/bb.jpg') }}" alt="img">
        <div class="artist__header--nav">

            <div class="art__header px-5">

                <div class="container-fluid ">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="header__logo">
                                <a href="{{ url('/') }}"> <img src=" {{ asset('admin-frontend/logo-artist.png') }}" alt="logo"></a>

                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <nav class="navbar navbar-expand-lg mt-3">
                                <div class="container-fluid">

                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page"
                                                    href="{{ url('/') }}">Artists List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page"
                                                    href="{{ url('add-category') }}">Add Category</a>
                                            </li>

                                            <li class="nav-item">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Profile
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Full Name</a></li>
                                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                                        <li><a class="dropdown-item" href="#">LogOut</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <x-app-layout>

                                                </x-app-layout>
                                            </li>


                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>