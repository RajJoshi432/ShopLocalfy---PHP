<?php
// includes/auth-check.php would verify admin session here
// require_once '../includes/auth-check.php';
// require_once '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Admin Dashboard</title>
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
        <h1 class="page-title">Dashboard</h1>
        <p class="page-subtitle">Overview of platform activity</p>
      </div>

      <!-- Stat Cards -->
      <div class="stat-cards">
        <div class="stat-card">
          <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
          <div class="stat-info">
            <span class="stat-label">Total Users</span>
            <span class="stat-value">—</span>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon accent"><i class="fa-solid fa-store"></i></div>
          <div class="stat-info">
            <span class="stat-label">Active Traders</span>
            <span class="stat-value">—</span>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon green"><i class="fa-solid fa-bag-shopping"></i></div>
          <div class="stat-info">
            <span class="stat-label">Orders Today</span>
            <span class="stat-value">—</span>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon orange"><i class="fa-solid fa-star-half-stroke"></i></div>
          <div class="stat-info">
            <span class="stat-label">Pending Reviews</span>
            <span class="stat-value">—</span>
          </div>
        </div>
      </div>

      <!-- Middle Row -->
      <div class="dashboard-grid">

        <!-- Pending Trader Approvals -->
        <div class="card">
          <div class="card-header">
            <span class="card-title">Pending Trader Approvals</span>
            <a href="pending-requests.php" class="view-link">View All</a>
          </div>
          <div class="card-body">
            <table class="data-table">
              <thead>
                <tr>
                  <th>Trader Name</th>
                  <th>Shop</th>
                  <th>Submitted</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="empty-row"><td colspan="4"><span class="empty-text">No pending approvals</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Sales by Category -->
        <div class="card">
          <div class="card-header">
            <span class="card-title">Sales by Category</span>
            <span class="badge-week">This Week</span>
          </div>
          <div class="card-body">
            <ul class="category-list">
              <li><span>Electronics</span><span class="cat-value">—%</span></li>
              <li><span>Clothing</span><span class="cat-value">—%</span></li>
              <li><span>Food</span><span class="cat-value">—%</span></li>
              <li><span>Furniture</span><span class="cat-value">—%</span></li>
              <li><span>Books</span><span class="cat-value">—%</span></li>
            </ul>
          </div>
        </div>

      </div><!-- /.dashboard-grid -->

      <!-- Bottom Row -->
      <div class="dashboard-grid">

        <!-- Recent Flagged Reviews -->
        <div class="card">
          <div class="card-header">
            <span class="card-title">Recent Flagged Reviews</span>
            <a href="#" class="view-link manage-link">Manage</a>
          </div>
          <div class="card-body">
            <table class="data-table">
              <thead>
                <tr>
                  <th>Review</th>
                  <th>User</th>
                  <th>Reason</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="empty-row"><td colspan="4"><span class="empty-text">No flagged reviews</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Recent User Registrations -->
        <div class="card">
          <div class="card-header">
            <span class="card-title">Recent User Registrations</span>
            <a href="../admin/customer-management.php" class="view-link">View All</a>
          </div>
          <div class="card-body">
            <table class="data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joined</th>
                </tr>
              </thead>
              <tbody>
                <tr class="empty-row"><td colspan="3"><span class="empty-text">No recent registrations</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>

      </div><!-- /.dashboard-grid -->
    </div><!-- /.page-body -->
  </div><!-- /.main-content -->
</div><!-- /.layout-wrapper -->

<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/dashboard.js"></script>
</body>
</html>