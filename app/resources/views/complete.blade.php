@extends('layouts.base')

@section('content')

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
     <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="{{ route('index') }}">おっくんの政治チャンネル</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route('index') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="https://www.youtube.com/channel/UCPxnT20QYztJkGSmE1liRSA?view_as=subscriber"　target="_blank">youtube</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="https://twitter.com/CQ5SXmczvr8BzkE"　target="_blank">Twitter</a>
          </li>
          <li class="nav-item px-lg-4">
             <a class="nav-link text-uppercase text-expanded" href="{{ route('prepare') }}">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
  <p class="complete">{{('お問い合わせを受け付けました！')}}</p>
  <p class="complete"><a href="{{ route('index') }}">homeへ</a> </p>
  <hr>
  <style>
      .complete {
          text-align: center;
          color: white;
          font-size: 2rem;
      }
  </style>
@endsection