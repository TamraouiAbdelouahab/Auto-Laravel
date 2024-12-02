
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex mx-3">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <?php if(Auth::check()): ?>
              <a class ="nav-link" href="<?php echo e(Route('article.index')); ?>">Articles</a>
            <?php else: ?>
            <a class="nav-link" href="<?php echo e(Route('indexpublic')); ?>">Articles</a>
            <?php endif; ?>
          </li>
          <?php if(auth()->guard()->check()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(Route('article.create')); ?>">Ajouter un article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(Route('dashboard')); ?>">Dashboard</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
      <?php if(auth()->guard()->check()): ?>
      <div class="nav-item">
        <form action="<?php echo e(Route('logout')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
      <?php endif; ?>
      <?php if(!Auth::check()): ?>
      <div class="nav-item">
        <a href="<?php echo e(Route('loginform')); ?>" class="btn btn-danger">Login</a>
      </div>
      <?php endif; ?>
      
</nav>



<?php /**PATH C:\Users\Solicode\Desktop\SoliCode\AutoFormation\Auto-Laravel\Prototype_Routage_Controller\resources\views/components/navbar.blade.php ENDPATH**/ ?>