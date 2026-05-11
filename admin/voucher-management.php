<?php
// admin/voucher-management.php
// require_once '../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Voucher Management</title>
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
      <div class="page-heading">
        <h1 class="page-title">Voucher Management</h1>
        <p class="page-subtitle">Create and manage discount vouchers</p>
      </div>
      <div class="card">
        <div class="card-header"><span class="card-title">All Vouchers</span></div>
        <div class="card-body">
          <table class="data-table">
            <thead><tr><th>Code</th><th>Discount</th><th>Type</th><th>Expires</th><th>Status</th><th>Action</th></tr></thead>
            <tbody>
              <tr class="empty-row"><td colspan="6"><span class="empty-text">No vouchers found</span></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
</body>
</html>