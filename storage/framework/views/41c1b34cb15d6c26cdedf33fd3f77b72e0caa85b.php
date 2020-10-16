
<?php $__env->startSection('content'); ?>

    <div class="container-fluid mt-2  h-75 d-inline-block ">
        <div class="row ">
            <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>

                <h4 class="text-white">Spisak Vasih kurseva</h4>

            </div>
        </div>


        <div class="row mt-3">

            <div class="col-xl-4 col-12 col-md-4">
                <div class="card mb-2 mt-2">
                    <div class="card-header text-center" style='background-color:#4f4d49';> <a class="text-white" href="single_course">Pogledaj vise </a>  </div>
                    <div class="card-body text-center" style='background-color:#058205';><h4 class="text-white"> FIZIKA</h4> </div>
                    <div class="card-footer text-center" style='background-color:#4f4d49';> <a class="text-white" href="all_students"> ucenici na kursu</a>  </div>


                </div>



            </div>



        </div>


auto
      <?php $__currentLoopData = $automobili; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <?php echo e($auto); ?>


          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>







    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/nenad.blade.php ENDPATH**/ ?>