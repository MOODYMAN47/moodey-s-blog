<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="{{ asset('../fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/templatemo-xtra-blog.css') }}" rel="stylesheet">

</head>
<body>
@include('layouts.sidebar')
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <!-- Video player 1422x800 -->
                    <video width="954" height="535" controls class="tm-mb-40">`
                        <source src="{{ asset('video/wheat-field.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title">Single Post of Xtra Blog HTML Template</h2>
                            <p class="tm-mb-40">June 16, 2020 posted by Admin Nat</p
