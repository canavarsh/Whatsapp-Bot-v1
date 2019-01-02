<html>
<head>
    <meta charset="UTF-8">
    <title>WhatsApp</title>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/default.css">
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name="theme-color" content="#005e54"/>
</head>
<body>


<div id="chat" onclick="loadChatbox();load('index.php')">Chat</div>

<div class="chatbox" id="chatbox">
	<span class="chat-text"></span>
	<div style="width: 350px; height: 450px; overflow: hidden; margin: auto; padding: 0;">
	<iframe id="frame" scrolling="no" frameborder="0" width="350px" height="450px" style="border:0; margin:0; padding: 0;"></iframe>
</div>

<div id="close-chat" onclick="closeChatbox()">&times;</div>
<div id="minim-chat" onclick="minimChatbox()"><span class="minim-button">&minus;</span></div>
<div id="maxi-chat" onclick="loadChatbox()"><span class="maxi-button">&plus;</span></div>
</div>


<script>
//<![CDATA[
function loadChatbox(){var e=document.getElementById("minim-chat");e.style.display="block";var e=document.getElementById("maxi-chat");e.style.display="none";var e=document.getElementById("chatbox");e.style.margin="0";}
function closeChatbox(){var e=document.getElementById("chatbox");e.style.margin="0 0 -1500px 0";}
function minimChatbox(){var e=document.getElementById("minim-chat");e.style.display="none";var e=document.getElementById("maxi-chat");e.style.display="block";var e=document.getElementById("chatbox");e.style.margin="0 0 -450px 0";}
//]]>
</script>

<script type="text/javascript">

function load(file){
document.getElementById('frame').src=file;
} 
</script>

<script type="text/javascript">
function kapat(){
document.getElementById('frame').src=file;
} 
</script>





</body>
</html>