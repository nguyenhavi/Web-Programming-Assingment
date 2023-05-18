<?php require_once 'start.php'; ?>
<?php if ($user && $user->isLoggedIn() && $user->hasPermission('admin')): ?>
    <?php Redirect::to('admin-product.php'); ?>
<?php elseif ($user && $user->isLoggedIn() && $user->hasPermission('user')): ?>
    <?php Redirect::to('index.php'); ?>
<?php else: ?>
    <?php require_once FRONTEND_INCLUDE . 'header.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'navbar.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'messages.php'; ?>
    <?php require_once BACKEND_AUTH . 'login.php'; ?>
    <?php require_once FRONTEND_PAGE . 'login.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'footer.php'; ?>
<?php endif; ?>
