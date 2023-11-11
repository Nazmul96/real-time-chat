<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Real time chating system</title>
    <style>
    body {
      background-color: #f8f9fa;
    }
    .chat-container {
      background-color: #393a3d;
      max-width: 600px;
      margin: 50px auto;
      border: 1px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
    }
    .chat-box {
      height: 300px;
      overflow-y: scroll;
    }
    .message {
      padding: 10px;
      margin: 5px;
      border-radius: 5px;
    }
    .user-message {
      background-color: #d4edda;
      float: left;
      clear: both;
    }
    .other-message {
      background-color: #fff;
      float: right;
      clear: both;
    }
    .seen-indicator {
      color: #888;
      font-size: 12px;
    }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 align="center">Real Time Chating system</h2>
    <h5 align="center">{{auth()->user()->name}}</h5>
    <div class="chat-container">
        <div class="chat-box" id="chatBox">
            <div class="message user-message"><span>dfgd</span><span class="seen-indicator"> (Seen)</span></div>
            <div class="message other-message"><span>dfgd dfge efer ferfert</span><span class="seen-indicator"> (Seen)</span></div>
        </div>
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Type your message..." id="messageInput">
        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
    </div>

</div>
<script>
    function sendMessage() {
    const messageInput = document.getElementById("messageInput").value;
    if (messageInput.trim() !== "") {
      const chatBox = document.getElementById("chatBox");
      const messageDiv = document.createElement("div");
      messageDiv.className = "message user-message";
      messageDiv.innerHTML = `<span>${messageInput}</span><span class="seen-indicator"> (Seen)</span>`;
      chatBox.appendChild(messageDiv);
      document.getElementById("messageInput").value = "";
    }
  }
</script>
</body>
</html>