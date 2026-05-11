<?php
// admin/customer-management.php
// require_once '../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopLocalfy – Customer Management</title>
  <link rel="stylesheet" href="../assets/css/style.css"/>
  <link rel="stylesheet" href="../assets/css/dashboard.css"/>
  <link rel="stylesheet" href="../assets/css/responsive.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    .search-input-wrap { position:relative;max-width:300px;margin-bottom:14px; }
    .search-input-wrap i { position:absolute;left:10px;top:50%;transform:translateY(-50%);color:var(--text-muted);font-size:13px; }
    .search-input-wrap input { width:100%;padding:8px 12px 8px 32px;border:1px solid var(--border);border-radius:8px;font-family:var(--font);font-size:13px;outline:none;background:var(--bg); }
    .search-input-wrap input:focus { border-color:var(--primary);background:#fff; }
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
        <h1 class="page-title">Customer Management</h1>
        <p class="page-subtitle">View, manage and email registered customers</p>
      </div>
      <div class="stat-cards" style="grid-template-columns:repeat(3,1fr);margin-bottom:22px;">
        <div class="stat-card"><div class="stat-icon"><i class="fa-solid fa-users"></i></div><div class="stat-info"><span class="stat-label">Total Customers</span><span class="stat-value">—</span></div></div>
        <div class="stat-card"><div class="stat-icon green"><i class="fa-solid fa-user-check"></i></div><div class="stat-info"><span class="stat-label">Active This Month</span><span class="stat-value">—</span></div></div>
        <div class="stat-card"><div class="stat-icon orange"><i class="fa-solid fa-flag"></i></div><div class="stat-info"><span class="stat-label">Flagged Accounts</span><span class="stat-value">—</span></div></div>
      </div>
      <div class="card">
        <div class="card-header"><span class="card-title">All Customers</span></div>
        <div class="card-body" style="padding:16px;">
          <div class="search-input-wrap">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search by name or email" id="customerSearch" onkeyup="filterTable()"/>
          </div>
          <table class="data-table" id="customerTable">
            <thead><tr><th>Customer Name</th><th>Email</th><th>Orders</th><th>Joined</th><th>Status</th></tr></thead>
            <tbody><tr class="empty-row"><td colspan="5"><span class="empty-text">No customers found</span></td></tr></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<script src="../assets/js/app.js"></script>
<script>
function filterTable(){
  const q=document.getElementById('customerSearch').value.toLowerCase();
  document.querySelectorAll('#customerTable tbody tr:not(.empty-row)').forEach(r=>{r.style.display=r.innerText.toLowerCase().includes(q)?'':'none';});
}
</script>
</body>
</html>