<?php
// includes/sidebar.php
$current = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar" id="sidebar">
  <div class="sidebar-brand">
    <span class="brand-icon"><i class="fa-solid fa-location-dot"></i></span>
    <span class="brand-name">ShopLocalfy</span>
  </div>

  <nav class="sidebar-nav">

    <div class="nav-section-label">Menu</div>
    <ul>
      <li class="<?= $current === 'dashboard.php' ? 'active' : '' ?>">
        <a href="dashboard.php"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
      </li>
      <!-- <li class="<?= $current === 'analytics.php' ? 'active' : '' ?>">
        <a href="#"><i class="fa-solid fa-chart-line"></i> Analytics</a>
      </li>
      <li class="<?= $current === 'analysis.php' ? 'active' : '' ?>">
        <a href="#"><i class="fa-solid fa-magnifying-glass-chart"></i> Analysis</a>
      </li> -->
    </ul>

    <div class="nav-section-label">Management</div>
    <ul>
      <li class="<?= $current === 'pending-requests.php' ? 'active' : '' ?>">
        <a href="pending-requests.php"><i class="fa-solid fa-boxes-pending-requests.php"></i> Pending request</a>
      </li>
      <!-- <li class="<?= $current === 'customer-management.php' ? 'active' : '' ?>">
        <a href="customer-management.php"><i class="fa-solid fa-users"></i> Customers</a>
      </li> -->
      <li class="<?= $current === 'add-trader.php' ? 'active' : '' ?>">
        <a href="add-trader.php"><i class="fa-solid fa-add trader"></i> Add trader</a>
      </li>
    </ul>

    <div class="nav-section-label">Operations</div>
    <ul>
      <li class="<?= $current === 'voucher-management.php' ? 'active' : '' ?>">
        <a href="voucher-management.php"><i class="fa-solid fa-voucher management"></i> Voucher Management</a>
      </li>
      <li class="<?= $current === 'order-management.php' ? 'active' : '' ?>">
        <a href="order-management.php"><i class="fa-solid fa-order-management"></i> Order management</a>
      </li>
      <li class="<?= $current === 'approve-trader.php' ? 'active' : '' ?>">
        <a href="approve-trader.php"><i class="fa-solid fa-approve-trader"></i> Approve trader</a>
      </li>
      <li class="<?= $current === 'customer-management.php' ? 'active' : '' ?>">
        <a href="customer-management.php"><i class="fa-solid fa-customer-management"></i> Customer Management</a>
      </li>
      <li class="<?= $current === 'create-trader.php' ? 'active' : '' ?>">
        <a href="create-trader.php"><i class="fa-solid fa-create-trader"></i> Create trader</a>
      </li>
    </ul>

    <div class="nav-section-label">Notification</div>
    <ul>
      <li class="<?= $current === 'transactions.php' ? 'active' : '' ?>">
        <a href="transactions.php"><i class="fa-solid fa-transactions"></i> Transactions</a>
      </li>
    </ul>

    <div class="nav-section-label">Admin Profile</div>
    <ul>
      <li class="<?= $current === 'profile.php' ? 'active' : '' ?>">
        <a href="profile.php"><i class="fa-solid fa-circle-user"></i> Go to Oracle Apex</a>
      </li>
    </ul>

  </nav>
</aside>