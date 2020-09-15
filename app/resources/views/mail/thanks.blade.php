
<!DOCTYPE html>
<html lang="ja">
<style>
  body {
    background-color: #fffacd;
  }
  h1 {
    font-size: 13px;
    color: #ff6666;
  }
  #button {
    width: 260px;
    text-align: center;
  }
  #button a {
    padding: 10px 20px;
    display: block;
    border: 1px solid #2a88bd;
    background-color: #FFFFFF;
    color: #2a88bd;
    text-decoration: none;
    box-shadow: 2px 2px 3px #f5deb3;
  }
  #button a:hover {
    background-color: #2a88bd;
    color: #FFFFFF;
  }
</style>
<body>
<p>{{ $contact->name }} 様</p>

<p>お問合せありがとうございます。</p>
<p>以下の内容でお問合せを受け付けました。</p>
<div> {{ $contact->text }} </div>

<p id="button">
  <a href="https://www.youtube.com/channel/UCPxnT20QYztJkGSmE1liRSA?view_as=subscriber">おっくんチャンネルYouTube</a>
</p>
<p id="button">
  <a href="https://twitter.com/CQ5SXmczvr8BzkE">おっくんチャンネルTwitter</a>
</p>
<p id="button">
  <a href="">おっくんチャンネルブログ</a>
</p>

</body>
</html>