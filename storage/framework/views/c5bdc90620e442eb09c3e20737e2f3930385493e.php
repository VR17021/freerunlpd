<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="navbar-collapse offcanvas-colapse">
    <ul class="navbar-nav mr-auto">
    </ul>
    <?php if(auth()->guard()->guest()): ?>
    <a class="nav-link text-center text-light" href="/login">
      Login
    </a>
    <a class="nav-link text-center text-light" href="/register">
      Register
    </a>
    <?php else: ?>
    <a class="nav-link text-light">
        Hello, <?php echo e(Auth::user()->name); ?>

    </a>
        <a class="nav-link text-light" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
      <?php echo csrf_field(); ?>
    </form>
    <?php endif; ?>
  </div>
</nav>
