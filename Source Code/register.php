<?php require_once 'start.php'; ?>
<?php if ($user && $user->isLoggedIn() && $user->hasPermission('user')): ?>
    <?php Redirect::to('index.php'); ?>
<?php else: ?>
    <?php require_once FRONTEND_INCLUDE . 'header.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'navbar.php'; ?>
    <?php require_once BACKEND_AUTH . 'register.php'; ?>
    <?php require_once FRONTEND_PAGE . 'register.php'; ?>
    <?php require_once FRONTEND_INCLUDE . 'footer.php'; ?>
<?php endif; ?>