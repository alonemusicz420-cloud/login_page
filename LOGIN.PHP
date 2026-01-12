<?php
$msg = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST["username"];
    $p = $_POST["password"];

    if ($u == "ash" && $p == "1234") {
        $success = true;
        $msg = "<div id='status' style='margin-top:18px;color:#00ff9c;letter-spacing:2px;'>Access granted ✓</div>";
    } else {
        $msg = "<div id='status' style='margin-top:18px;color:#ff4c4c;letter-spacing:2px;'>Wrong credentials ✕</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body style="
margin:0;
height:100vh;
background:black;
display:flex;
align-items:center;
justify-content:center;
font-family:Segoe UI, sans-serif;
color:white;
">

<div style="
width:350px;
padding:40px;
border:1px solid white;
border-radius:12px;
text-align:center;
box-shadow:0 0 25px rgba(255,255,255,0.15);
">

<h1 style="margin-bottom:30px;letter-spacing:3px;font-weight:400;">LOGIN</h1>

<form method="POST" onsubmit="showLoading()">

<input type="text" name="username" placeholder="Username" required
style="width:100%;padding:12px;margin-bottom:15px;background:transparent;border:1px solid white;border-radius:6px;color:white;font-size:15px;outline:none;">

<input type="password" name="password" placeholder="Password" required
style="width:100%;padding:12px;margin-bottom:20px;background:transparent;border:1px solid white;border-radius:6px;color:white;font-size:15px;outline:none;">

<button
onmouseover="this.style.background='#00ff9c'; this.style.boxShadow='0 0 12px #00ff9c';"
onmouseout="this.style.background='white'; this.style.boxShadow='none';"
style="width:100%;padding:12px;border:none;border-radius:6px;background:white;color:black;font-weight:bold;cursor:pointer;transition:0.3s;">
ENTER
</button>

</form>

<div id="loading" style="display:none;margin-top:15px;color:#aaa;">Authenticating...</div>

<?php echo $msg; ?>

</div>

<script>
function showLoading(){
    document.getElementById("loading").style.display="block";
}
<?php if($success){ ?>
setTimeout(function(){
    window.location.href = "dashboard.php";
}, 1500);
<?php } ?>
</script>

</body>
</html>
