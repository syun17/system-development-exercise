<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>モバイルオーダー</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div class="container">

  <!-- ヘッダー -->
  <header>
    <div class="time">残り時間 60分</div>
  </header>

  <!-- タブ -->
  <nav class="tabs">

    <button class="tab active" onclick="showMenu('food', event)" aria-label="料理タブを表示">
      料理
    </button>

    <button class="tab" onclick="showMenu('drink', event)" aria-label="ドリンクタブを表示">
      ドリンク
    </button>

    <button class="tab" onclick="showMenu('service', event)" aria-label="サービスタブを表示">
      サービス
    </button>

    <button class="tab" onclick="showMenu('limited', event)" aria-label="店舗限定タブを表示">
      店舗限定
    </button>

  </nav>

  <!-- 商品一覧 -->
  <main id="menu-list">

  </main>

  <!-- フッター -->
  <footer>

    <button>注文履歴</button>

    <a href="call.html" class="button-link">店員呼出</a>

    <button>会計</button>

  </footer>

</div>

</body>
</html>