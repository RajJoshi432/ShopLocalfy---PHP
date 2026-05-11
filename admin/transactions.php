<?php
// admin/transactions.php
// require_once '../includes/auth-check.php';
// require_once '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Transactions</title>
  <link rel="stylesheet" href="../assets/css/style.css"/>
  <link rel="stylesheet" href="../assets/css/dashboard.css"/>
  <link rel="stylesheet" href="../assets/css/responsive.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
<?php include '../includes/header.php'; ?>
<div class="layout-wrapper">
  <?php include '../includes/sidebar.php'; ?>
  <div class="main-content">
    <?php include '../includes/topbar.php'; ?>
    <div class="page-body">

      <div class="page-subtitle-row">
        <div>
          <h1 class="page-title">Transactions</h1>
          <p class="page-subtitle">All payment transactions overview</p>
        </div>
        <span class="total-txn-badge">Total Transactions: —</span>
      </div>

      <div class="txn-card">
        <div class="txn-header">
          <div class="txn-header-left">
            <div class="txn-id">TXN-serial no.</div>
            <div class="txn-meta">Order #ORD-serial no. &nbsp;·&nbsp; Date &amp; Time</div>
          </div>
          <div class="txn-header-right">
            <div class="txn-amount">$—</div>
            <span class="txn-status status-pending">
              <i class="fa-solid fa-clock"></i> Pending
            </span>
          </div>
        </div>

        <div class="txn-divider"></div>

        <div class="txn-body">
          <div class="txn-row">
            <div class="txn-icon"><i class="fa-solid fa-user"></i></div>
            <span class="txn-label">Customer</span>
            <span class="txn-value">Customer Name</span>
          </div>
          <div class="txn-row">
            <div class="txn-icon"><i class="fa-solid fa-credit-card"></i></div>
            <span class="txn-label">Payment Method</span>
            <span class="txn-value">— (e.g. Credit Card)</span>
          </div>
          <div class="txn-row">
            <div class="txn-icon"><i class="fa-solid fa-hashtag"></i></div>
            <span class="txn-label">Reference No.</span>
            <span class="txn-value">—</span>
          </div>
          <div class="txn-row">
            <div class="txn-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
            <span class="txn-label">Amount</span>
            <span class="txn-value">$—</span>
          </div>
        </div>
      </div>

      <div class="txn-empty-state">
        <i class="fa-solid fa-receipt txn-empty-icon"></i>
        <p class="txn-empty-text">No more transactions to display</p>
      </div>

    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
</body>
</html>