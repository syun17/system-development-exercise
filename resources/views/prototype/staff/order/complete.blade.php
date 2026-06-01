<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">

  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

  <title>注文完了</title>

  <link rel="stylesheet"
    href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

  <header>

  </header>

  <nav class="tabs">
    <button>料理</button>
    <button>ドリンク</button>
    <button>サービス</button>
    <button>店舗限定</button>
  </nav>

  <div class="thanks-message">

    注文が<br>
    完了しました

  </div>

  <footer>

  </footer>

</div>

<script>

setTimeout(() => {

  window.location.href = "{{ url('/prototype/orderHome') }}";

}, 1000);

</script>

    window.location.href = '{{ route('prototype.staff.order.home') }}';
</html>