@extends('layouts.base')

@section('title')
確認ページ
@endsection

@section('content')
<h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3"></span>
  <span class="site-heading-lower">お問い合わせの確認</span>
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
<form action="{{ route('complete') }}" method="post">
  @csrf
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3 form-group col-form-label info">
        <label>件名</label>
        <div class="check">
          {{ $inputs['title'] }}
        </div>
        <input type="hidden" name="title" value="{{ $inputs['title'] }}" class="form-control">
      </div>
        <div class="col-6 offset-3 form-group col-form-label info">
        <label>本文</label>
        <div class="check">
          {{ $inputs['text'] }}
        </div>  
        <input type="hidden" name="text" value="{{ $inputs['text'] }}" class="form-control">
      </div>
      <div class="col-md-6 offset-md-3 form-group col-form-label">
        <button type="submit" name="action" value="back" class="form-control">
            <a href="javascript:history.back();">
                入力内容修正
            </a>
        </button>
      </div>
      <div class="col-md-6 offset-md-3 form-group col-form-label">
        <input type="submit" value="送信する" class="form-control">
      </div>
    </div>
  </div>
</form>
     <style>
       .info {
         color: white;
       }

       .check {
         font-size: 1rem;
       }
     </style>
@endsection