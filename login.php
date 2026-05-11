<?php
// login.php
session_start();
if (isset($_SESSION['admin_id'])) {
    header('Location: admin/dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Login</title>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
 <style>
    :root {
      --bg: #f5f5f0;
      --surface: #ffffff;
      --border: #e0e0d8;
      --primary: #3a4a2e;
      --text-muted: #6b7560;
      --radius: 12px;
      --shadow: 0 2px 12px rgba(0,0,0,.06);
      --font: 'Sora', sans-serif;
    }
    .auth-wrap {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--bg);
    }
    .auth-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 36px 32px;
      width: 100%;
      max-width: 380px;
      box-shadow: var(--shadow);
    }
    .auth-logo {
      text-align: center;
      margin-bottom: 24px;
    }
    .auth-logo .brand-icon {
      margin: 0 auto 10px;
      width: 46px; height: 46px;
      font-size: 20px;
      background: var(--primary);
      color: #fff;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .auth-logo h1 { font-size: 18px; font-weight: 700; color: #1a2410; }
    .auth-logo p  { font-size: 13px; color: var(--text-muted); }
    .form-group { margin-bottom: 16px; }
    .form-group label { display: block; font-size: 12px; font-weight: 600; margin-bottom: 6px; color: #1a2410; }
    .form-group input {
      width: 100%;
      padding: 9px 12px;
      border: 1px solid var(--border);
      border-radius: 8px;
      font-family: var(--font);
      font-size: 13px;
      outline: none;
      transition: border-color .15s;
      background: #fafaf8;
    }
    .form-group input:focus { border-color: var(--primary); }
    .btn-login {
      width: 100%;
      padding: 10px;
      background: var(--primary);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 8px;
      transition: opacity .15s;
    }
    .btn-login:hover { opacity: .88; }
  </style>
</head>
<body>
<div class="auth-wrap">
  <div class="auth-card">
    <div class="auth-logo">
      <div class="brand-icon"><i class="fa-solid fa-location-dot"></i></div>
      <h1>ShopLocalfy</h1>
      <p>Admin Panel</p>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder=""/>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" placeholder=""/>
    </div>
    <button class="btn-login" onclick="window.location='admin/dashboard.php'">Sign In</button>
  </div>
</div>
<script src="assets/js/app.js"></script>
</body>
</html>