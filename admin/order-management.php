<?php
// admin/order-management.php
// require_once '../includes/auth-check.php';
// require_once '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Order Management</title>
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

      <!-- Page title row -->
      <div class="page-subtitle-row">
        <div>
          <h1 class="page-title">Order Management</h1>
          <p class="page-subtitle">Total orders overview</p>
        </div>
        <span class="total-orders-badge">
          <i class="fa-solid fa-box-open" style="margin-right:4px;"></i>Total Orders: —
        </span>
      </div>

      <!-- Filters -->
      <div class="order-filters">
        <div class="filter-search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search by order ID or customer…"/>
        </div>
        <select class="filter-select">
          <option value="">All Statuses</option>
          <option value="pending">Pending</option>
          <option value="processing">Processing</option>
          <option value="completed">Completed</option>
          <option value="cancelled">Cancelled</option>
        </select>
        <select class="filter-select">
          <option value="">All Time</option>
          <option value="today">Today</option>
          <option value="week">This Week</option>
          <option value="month">This Month</option>
        </select>
      </div>

      <!-- Sample order card — replace with PHP loop from DB -->
      <div class="order-card">
        <div class="order-header">
          <div>
            <div class="order-id"><i class="fa-solid fa-hashtag" style="font-size:11px;margin-right:3px;color:var(--muted);"></i>ORD-00001</div>
            <div class="order-meta"><i class="fa-regular fa-user" style="margin-right:5px;"></i>Customer Name &nbsp;·&nbsp; <i class="fa-regular fa-clock" style="margin-right:3px;"></i>May 11, 2026</div>
          </div>
          <div class="order-right">
            <div class="order-amount">$—</div>
            <span class="order-status status-pending"><i class="fa-solid fa-clock"></i> Pending</span>
          </div>
        </div>
        <div class="order-body">
          <div class="order-product">
            <div class="product-img"><i class="fa-solid fa-image"></i></div>
            <span class="product-name">Product Name</span>
            <span class="product-qty">Qty: —</span>
          </div>
          <div class="order-product">
            <div class="product-img"><i class="fa-solid fa-image"></i></div>
            <span class="product-name">Product Name</span>
            <span class="product-qty">Qty: —</span>
          </div>
        </div>
        <div class="order-footer">
          <button class="btn-order-action btn-update-status">
            <i class="fa-solid fa-pen-to-square"></i> Update Status
          </button>
          <button class="btn-order-action btn-view-order">
            <i class="fa-solid fa-eye"></i> View Details
          </button>
        </div>
      </div>

      <!-- Empty / end-of-list state -->
      <div class="card">
        <div class="empty-state">
          <div class="empty-state-icon">
            <i class="fa-solid fa-inbox"></i>
          </div>
          <div class="empty-state-title">No more orders to display</div>
          <p class="empty-text">Orders will appear here once customers place them.</p>
        </div>
      </div>

    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
</body>
</html>