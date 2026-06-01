<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>注文状況</title>
<style>
body { margin:0; font-family:sans-serif; background-color:#e6b98a; display:flex; flex-direction:column; min-height:100vh }
.header { height:60px; background-color:#e0663f; flex-shrink:0 }
.footer { height:60px; background-color:#e0663f; flex-shrink:0; display:flex; justify-content:center; align-items:center }
.container { flex:1; padding:10px }
h2 { margin:15px 0 }
.menu-btn { width:100%; box-sizing:border-box; padding:35px 20px; margin-bottom:10px; background:#d8cc8c; border:1px solid #b8aa66; text-align:center; font-size:20px; cursor:pointer; transition:0.2s }
.menu-btn:hover { background:#cfc27f }
.menu-btn:active { transform:scale(0.98) }
.back-btn { margin-top:20px; width:120px; padding:12px; background:#35c3e6; color:white; border:1px solid #666; font-size:20px; cursor:pointer }
.footer-home-btn { width:45px; height:45px; border:none; border-radius:50%; background:white; color:#e0663f; font-size:26px; cursor:pointer; display:flex; justify-content:center; align-items:center; transition:0.2s }
.footer-home-btn:hover { background:#f2f2f2 }
.footer-home-btn:active { transform:scale(0.95) }
</style>
</head>
<body>
<div class="header"></div>
<div class="container">
    <h2>注文状況</h2>
    <div class="menu-btn" onclick="location.href='{{ url('/prototype/order-status') }}'">注文状況</div>
    <div class="menu-btn" onclick="location.href='{{ url('/prototype/order-history') }}'">注文履歴</div>
    <button class="back-btn" onclick="location.href='{{ url('/prototype/home') }}'">戻る</button>
</div>
<div class="footer">
    <button class="footer-home-btn" onclick="location.href='{{ url('/prototype/home') }}'">🏠</button>
</div>
</body>
</html>
