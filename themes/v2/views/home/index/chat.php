<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
  <script src="/themes/v2/static/home/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
  var exampleSocket = new WebSocket("ws://120.77.44.227:9501");
  exampleSocket.onopen = function (event) {
    exampleSocket.send("亲爱的服务器！我连上你啦！"); 
  };
  exampleSocket.onmessage = function (event) {
    console.log(event.data);
    $('#pa').append('<p>'+event.data+'&nbsp;'+'<?=date('Y-m-d H:i:s',time())?>'+'</p>');
    div = document.getElementById('pa');
    div.scrollTop = div.scrollHeight; 
  }
  </script>
</head>
<body>
<div style="margin: 0 auto;width: 800px">
<div>
请输入昵称：<input type="text" name="" id="name">
<h2>欢迎来到Tivon的聊天室！</h2>
<p><span>Tip:based on php-swoole.</span></p>
<div style="height: 200px;width: 300px;border: solid;border-width:1px; color: gray;overflow-y: auto;width: 600px;height: 400px" id="pa">
  
</div>
<br>
<input  type="text" id="content">
<button  onclick="exampleSocket.send( document.getElementById('content').value+' '+$('#name').val() );$('#content').val('')">发送</button>
</div>
</div>
</body>
</html>