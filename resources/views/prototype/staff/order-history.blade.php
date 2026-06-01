<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>注文履歴</title>
<style>
body{ margin:0; font-family:sans-serif; background-color:#e6b98a; display:flex; flex-direction:column; min-height:100vh }
.header, .footer{ height:60px; background-color:#e0663f; flex-shrink:0 }
.container{ flex:1; padding:10px }
h2{ margin:15px 0 }
.content{ margin-top:80px; display:flex; flex-direction:column; align-items:center }
.select-area{ display:flex; align-items:center; gap:10px }
.seat-select{ width:100px; height:35px; font-size:18px; border:2px solid #3aa0ff; background:white }
.btn-area{ margin-top:20px; display:flex; gap:15px }
.back-btn{ width:80px; padding:12px; background:#35c3e6; color:white; border:1px solid #666; font-size:18px }
.history-btn{ width:80px; padding:12px; background:red; color:white; border:none; font-size:18px; cursor:pointer }
.history-btn:disabled{ background:#aaa; cursor:not-allowed; opacity:0.6 }
</style>
</head>
<body>
<div class="header"></div>
<div class="container">
    <h2>注文履歴</h2>
    <div class="content">
        <div class="select-area">
            <select class="seat-select" id="seatSelect">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <span>席</span>
        </div>
        <div class="btn-area">
            <button class="back-btn" onclick="location.href='{{ url('/prototype/order-menu') }}'">戻る</button>
            <button class="history-btn" id="historyBtn" disabled>履歴</button>
        </div>
    </div>
</div>
<div class="footer"></div>
<script>
document.getElementById('seatSelect').addEventListener('change', function(){ const btn = document.getElementById('historyBtn'); btn.disabled = this.value === ''; });
</script>
</body>
</html>
