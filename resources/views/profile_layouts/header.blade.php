<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
</head>
<body style="background-color: #f5efe6;">
    <header>
        @include("profile_layouts.navbar")
    </header>
    <main>