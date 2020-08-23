@extends('layouts.base')

@section('title')
お問い合わせ
@endsection

@section('content')
<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">取り上げて欲しいニュースや時事ネタなどなんでも気軽にどうぞ！</span>
    <span class="site-heading-lower">お問い合わせページ</span>
</h1>

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
            <a class="nav-link text-uppercase text-expanded" href="https://www.youtube.com/channel/UCPxnT20QYztJkGSmE1liRSA?view_as=subscriber">youtube</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="https://twitter.com/CQ5SXmczvr8BzkE">Twitter</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
  <form action="{{ route('check') }}" method="post" style="text-align: center;">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="contact">件名</p>
                <textarea name="title" cols="50" rows="1" value="">{{ old('title') }}</textarea>
                @if ($errors->has('title'))
                <p class="error-message">{{ $errors->first('title') }}</p>
                @endif
            </div>
           
            <div class="col-12">
                <p class="contact">本文</p>
                <textarea name="text" cols="50" rows="20" value="">{{ old('text') }}</textarea>
                @if ($errors->has('text'))
                    <p class="error-message">{{ $errors->first('text') }}</p>
                @endif
            </div>
            <br>
            <div class="col-12">
                <input type="submit" value="確認する">
            </div>
        </div>
    </div>
  </form>
  <hr>
  <style>
      .contact {
          color: white;
      }
      
      .error-message {
        color: red;
      }
  </style>

@endsection