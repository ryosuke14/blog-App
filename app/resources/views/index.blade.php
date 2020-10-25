@extends('layouts.base')

@section('title')
おっくんお政治チャンネルHOME 
@endsection

@section('content')
<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">２０代の３人が作り上げる政治に特化したチャンネル!!</span>
    <span class="site-heading-lower">おっくんの政治チャンネル</span>
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

  <div class="container">
    <p class="col-md-10 offset-md-1" style="font-size: 1rem; color:#C0C0C0; line-height:2.0; text-align: center; padding-top: 30px; font-weight: bold;">
      このチャンネルでは２０代の３人が政治や最新のニュースなどをできるだけわかりやすく噛み砕き、考察していきます。
      取り上げて欲しい話題などございましたらYouTube・Twitterへコメントをお願い致します！
      これからもYouTube・Twitterでたくさん発信していくので要望などございましたらお気軽にお問い合わせをお願い致します！
    </p>
 </div>



  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro-1.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">okkun channel</span>
            <span class="section-heading-lower">Shin Miura</span>
          </h2>
          <p class="mb-3">政治や最新のニュースの正確な情報は、ただ待っているだけでは収集出来ない状況が今の日本だと思います。　このチャンネルを通じて多くの人へ正確な情報を伝えていきます！
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="https://www.youtube.com/channel/UCPxnT20QYztJkGSmE1liRSA?view_as=subscriber" target="_blank">YOUTUBEへGO!!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro-2.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">okkun channel</span>
            <span class="section-heading-lower">Takeru Fuse</span>
          </h2>
          <p class="mb-3">政治のニュースは難しいという先入観をもっている人も多く、もっと身近に感じてもらえる環境をこのチャンネルを通じて
            発信して行きます！
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="https://twitter.com/CQ5SXmczvr8BzkE"　target="_blank">TWITTERへGO！!</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro-4.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">okkun channel</span>
            <span class="section-heading-lower">Ryosuke Yazawa</span>
          </h2>
          <p class="mb-3">政治や最新のニュースをもっと多角的に見る必要があると思っています。日頃、目にするニュースは偏った報道・ねじ曲がった事実は多く存在しる現状です。このチャンネルでは様々なニュースを多方面から考察して多くの人へ発信していこうと思います！
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="{{ route('prepare') }}">BlogへGO!!</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Message</span>
              <span class="section-heading-lower">To Us</span>
            </h2>
            <p class="mb-0">取り上げて欲しいニュースや時事ネタなどメッセ―ジお待ちしております！！</p>
            <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="{{ route('contact') }}">Message form</a>
          </div>
          </div>
        </div>
      </div>
    </div>

    
  </section>

  @endsection