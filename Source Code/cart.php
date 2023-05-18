<?php require_once 'start.php'; ?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'):?>
    <?php require_once BACKEND_AUTH . 'cart.php'; ?>
<?php elseif ($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
    <?php if ($user && $user->isLoggedIn() && $user->hasPermission('user')): ?>
        <?php require_once FRONTEND_INCLUDE . 'header.php'; ?>
        <?php require_once FRONTEND_INCLUDE . 'navbar.php'; ?>
        <?php require_once FRONTEND_PAGE . 'cart.php'; ?>
        <?php require_once FRONTEND_INCLUDE . 'footer.php'; ?>
    <?php else: ?>
        <?php Redirect::to('login.php'); ?>
    <?php endif; ?>
<?php endif; ?>