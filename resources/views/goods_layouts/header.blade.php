<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <style>
        .nav-link.active {
            border-radius: 5px;
            border-bottom: 5px solid;
        }
    </style>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: 'Hanuman', sans-serif;
        }
    </style>
</head>

<body style="background-color: #f5efe6;">
    <header>
        @include("goods_layouts.navbar")
    </header>
    <main>