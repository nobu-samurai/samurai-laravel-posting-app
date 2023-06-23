<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>投稿一覧</title>
</head>

<body>
  <header>
    <nav>
      <div><a href="{{ route('posts.index') }}">投稿アプリ</a></div>
    </nav>
  </header>

  <main>
    <article>
      <div>
        <h1>投稿一覧</h1>
        @if (session('flash_message'))
          <p>{{ session('flash_message') }}</p>
        @endif
      </div>
    </article>
  </main>

  <footer>
    <p>&copy; 投稿アプリ All rights reserved.</p>
  </footer>

</body>

</html>
