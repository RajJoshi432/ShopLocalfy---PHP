<?php
// admin/add-trader.php
// require_once '../includes/auth-check.php';
// require_once '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Add Trader</title>
  <link rel="stylesheet" href="../assets/css/style.css"/>
  <link rel="stylesheet" href="../assets/css/dashboard.css"/>
  <link rel="stylesheet" href="../assets/css/responsive.css"/>
  <link rel="stylesheet" href="../assets/css/add-trader.css"/>
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
        <h1 class="page-title">Add Trader</h1>
        <p class="page-subtitle">Register and approve a new trader account</p>
      </div>
      <div class="form-card">
        <div class="section-gap">
          <div class="form-section-title">Account Details</div>
          <div class="form-row">
            <div class="form-group"><label for="first_name">Full Name</label><input type="text" id="first_name" placeholder=""/></div>
            <div class="form-group"><label for="last_name">Last Name</label><input type="text" id="last_name" placeholder=""/></div>
          </div>
          <div class="form-row">
            <div class="form-group"><label for="email">Email Address</label><input type="email" id="email" placeholder=""/></div>
            <div class="form-group"><label for="phone">Phone Number</label><input type="tel" id="phone" placeholder=""/></div>
          </div>
        </div>
        <div class="section-gap">
          <div class="form-section-title">Trader Verification</div>
          <div class="form-row">
            <div class="form-group"><label for="pan">PAN Number</label><input type="text" id="pan" placeholder=""/><span class="form-hint">Must match official business registration</span></div>
            <div class="form-group"><label for="department">Department</label><input type="text" id="department" placeholder=""/></div>
          </div>
        </div>
        <div class="section-gap">
          <div class="form-section-title">Shop Details</div>
          <div class="form-row">
            <div class="form-group"><label for="shop_name">Shop Name</label><input type="text" id="shop_name" placeholder=""/></div>
            <div class="form-group"><label for="location">Location</label><input type="text" id="location" placeholder=""/></div>
          </div>
          <div class="form-row single">
            <div class="form-group"><label for="description">Shop Description</label><textarea id="description" placeholder="Brief description of the shop..."></textarea></div>
          </div>
        </div>
        <div class="section-gap">
          <div class="form-section-title">Approve Status</div>
          <div class="form-row">
            <div class="form-group">
              <label for="status">Status</label>
              <select id="status"><option value="approved">Approved</option><option value="pending">Pending</option><option value="discarded">Discarded</option></select>
            </div>
          </div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" onclick="window.location='create-trader.php'"><i class="fa-solid fa-check"></i> Approve and create trader</button>
          <button class="btn btn-secondary" onclick="window.location='pending-requests.php'"><i class="fa-solid fa-clock"></i> Save as pending</button>
          <button class="btn btn-danger" onclick="openDiscard()"><i class="fa-solid fa-trash"></i> Discard</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-overlay" id="discardModal">
  <div class="modal">
    <div class="modal-icon"><i class="fa-solid fa-xmark"></i></div>
    <div class="modal-title">Discard this form?</div>
    <div class="modal-text">All entered information will be lost. This action cannot be undone.</div>
    <div class="modal-note">Any unsaved data for (trader name and shop name) will be permanently removed.</div>
    <div class="modal-actions">
      <button class="btn btn-cancel" onclick="closeDiscard()">Cancel</button>
      <button class="btn btn-danger" onclick="window.location='dashboard.php'">Yes, deny</button>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/add-trader.js"></script>
</body>
</html>
