<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>
                    <?php $__currentLoopData = $jourSemaines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jourSemaine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="list-unstyled list-hours text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            <?php echo e($jourSemaine -> jour); ?>

                            <span class="ml-auto"><?php echo e($jourSemaine -> heure); ?></span>
                        </li>
                    </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <p class="address mb-5">
                        <em>
                            <strong><?php echo e($codePostale); ?></strong>
                            <br>
                            <?php echo e($adresse); ?>

                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em><?php echo e($appel); ?></em>
                        </small>
                        <br>
                        <?php echo e($numero); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/ba3line/Documents/Ismail/Coding-school/laravelDossier/exo-integration-devoir/resources/views/partials/store/s1store.blade.php ENDPATH**/ ?>