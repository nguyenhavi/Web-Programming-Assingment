<?php require_once 'start.php'; ?>
<?php if ($user && $user->isLoggedIn() && $user->hasPermission('user')): ?>
    <?php require_once FRONTEND_INCLUDE . 'header.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'navbar.php'; ?>
    <?php require_once BACKEND_AUTH . 'update-account.php'; ?>
    <?php require_once FRONTEND_PAGE . 'update-account.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'footer.php'; ?>
<?php else: ?>
    <?php Redirect::to('login.php'); ?>
<?php endif; ?>