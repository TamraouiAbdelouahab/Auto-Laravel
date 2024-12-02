<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        un article
     <?php $__env->endSlot(); ?>
        <div class="p-5">
            <?php
            $colors = ['bg-primary','bg-secondary','bg-success','bg-danger','bg-warning' , 'bg-info' ,'bg-dark'];
            ?>
                <a href="#" class="card text-white <?php echo e($colors[rand(0,6)]); ?> m-auto" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($article->title); ?></h5>
                        <p class="card-text"><?php echo e($article->content); ?></p>
                    </div>
                </a>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary mx-2 text-white" href="<?php echo e(Route('article.edit',$article)); ?>">Modifier</a>
                    <form action="<?php echo e(Route('article.destroy',$article)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger mx-2 text-white">Supprimer</button>
                    </form>
                </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Solicode\Desktop\SoliCode\AutoFormation\Auto-Laravel\Prototype_Routage_Controller\resources\views/articles/show.blade.php ENDPATH**/ ?>