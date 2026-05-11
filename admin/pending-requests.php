<?php
// admin/pending-requests.php
// require_once '../includes/auth-check.php';
// require_once '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Pending Requests</title>
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

      <div class="page-heading" style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;">
        <div>
          <nav style="font-size:12px;color:var(--text-muted);margin-bottom:4px;">Admin / Traders / Saved as pending</nav>
          <h1 class="page-title">Pending Requests</h1>
        </div>
        <span class="status-badge-orange"><i class="fa-solid fa-clock"></i> Pending</span>
      </div>

      <div class="pending-card">
        <div class="pending-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
        <div class="pending-title">Trader saved as pending</div>
        <div class="pending-desc">The trader application has been saved. You can review and approve it later from the Traders management page.</div>
        <div class="pending-notice">No email has been sent yet. Trader will be notified only after approval.</div>

        <div class="info-grid">
          <div class="info-box"><span class="info-label">Trader Name</span><span class="info-value">—</span></div>
          <div class="info-box"><span class="info-label">Shop</span><span class="info-value">—</span></div>
          <div class="info-box"><span class="info-label">Email</span><span class="info-value">—</span></div>
          <div class="info-box"><span class="info-label">Current Status</span><span class="info-value info-value-orange"><i class="fa-solid fa-clock"></i> Pending</span></div>
        </div>

        <div class="action-btns">
          <button class="btn btn-green" onclick="window.location='create-trader.php'"><i class="fa-solid fa-check"></i> Approve now</button>
          <button class="btn btn-primary" onclick="window.location='add-trader.php'"><i class="fa-solid fa-pen"></i> Edit application</button>
          <button class="btn btn-outline" onclick="window.location='pending-requests.php'"><i class="fa-solid fa-list"></i> View all pending</button>
          <button class="btn btn-outline" onclick="window.location='dashboard.php'"><i class="fa-solid fa-gauge-high"></i> Go to Dashboard</button>
        </div>
      </div>

    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
</body>
</html>