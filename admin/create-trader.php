<?php
// admin/create-trader.php
// require_once '../includes/auth-check.php';
// require_once '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Trader Created</title>
  <link rel="stylesheet" href="../assets/css/style.css"/>
  <link rel="stylesheet" href="../assets/css/dashboard.css"/>
  <link rel="stylesheet" href="../assets/css/responsive.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    .success-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 32px 28px;
      box-shadow: var(--shadow);
    }
    .success-icon {
      font-size: 36px;
      color: var(--green);
      margin-bottom: 10px;
    }
    .success-title {
      font-size: 16px;
      font-weight: 700;
      color: var(--text);
      margin-bottom: 6px;
    }
    .success-desc {
      font-size: 13px;
      color: var(--text-muted);
      margin-bottom: 16px;
    }
    .success-email {
      font-size: 13px;
      color: var(--text-muted);
      margin-bottom: 24px;
    }
    .success-email strong { color: var(--text); }
    .info-row {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 12px;
      margin-bottom: 28px;
    }
    .info-box {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .info-label {
      font-size: 11px;
      font-weight: 600;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: .05em;
    }
    .info-value {
      padding: 8px 10px;
      border: 1px solid var(--border);
      border-radius: 7px;
      font-size: 13px;
      color: var(--text-muted);
      background: var(--bg);
      font-style: italic;
    }
    .action-btns {
      display: flex;
      gap: 12px;
      justify-content: center;
      padding-top: 20px;
      border-top: 1px solid var(--border);
    }
    .btn { padding: 9px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; border: 1px solid var(--border); background: var(--bg); color: var(--text); transition: all .15s; }
    .btn:hover { background: var(--primary); color: #fff; border-color: var(--primary); }
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>
<div class="layout-wrapper">
  <?php include '../includes/sidebar.php'; ?>
  <div class="main-content">
    <?php include '../includes/topbar.php'; ?>
    <div class="page-body">
      <div class="page-heading">
        <nav class="breadcrumb-sub">Admin / Traders / Trader created</nav>
      </div>

      <div class="success-card">
        <div class="success-icon"><i class="fa-solid fa-check-double"></i></div>
        <div class="success-title">Trader approved and created</div>
        <div class="success-desc">The trader account has been created and an email verification has been sent to the trader.</div>
        <div class="success-email">
          Verification email sent to <strong>ram.shrestha@mail.com</strong>. Trader can now log in once verified.
        </div>

        <div class="info-row">
          <div class="info-box">
            <span class="info-label">Trader Name</span>
            <span class="info-value">—</span>
          </div>
          <div class="info-box">
            <span class="info-label">Shop</span>
            <span class="info-value">—</span>
          </div>
          <div class="info-box">
            <span class="info-label">Pan Number</span>
            <span class="info-value">—</span>
          </div>
          <div class="info-box">
            <span class="info-label">Email</span>
            <span class="info-value">—</span>
          </div>
          <div class="info-box">
            <span class="info-label">Location</span>
            <span class="info-value">—</span>
          </div>
        </div>

        <div class="action-btns">
          <button class="btn" onclick="window.location='approve-trader.php'">
            <i class="fa-solid fa-user"></i> View Trader Profile
          </button>
          <button class="btn" onclick="window.location='add-trader.php'">
            <i class="fa-solid fa-plus"></i> Add another trader
          </button>
          <button class="btn" onclick="window.location='dashboard.php'">
            <i class="fa-solid fa-gauge-high"></i> Go to dashboard
          </button>
        </div>
      </div>

    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
</body>
</html>