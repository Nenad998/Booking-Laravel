<?php $__env->startSection('content'); ?>


    <div class="contact_main_add">
        <div class="contact_section_add">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="add_house_name"> <?php echo e($message); ?> </div>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="add_house_address"> <?php echo e($message); ?> </div>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="wrapper_add">
                <div class="title_add">
                    <h1>Dodaj kucu</h1>
                </div>
                <div class="contact-form_add">


                    <form action="/house/store" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="input-fields_add">

                            <input type="text" class="input" placeholder="Unesi naziv" name="name">

                            <textarea class="input" placeholder="Unesi opis" name="description" rows="5" cols="50"></textarea>

                            <input type="text" class="input" placeholder="Unesi adresu" name="address">


                            <h5 class="text-add">Ubaci sliku</h5>

                            <img id="img" src="#" alt="" />

                            <input type="file" class="input" onchange="readURL(this);" name="image">

                            <button type="submit" class="btn-add">Dodaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   <script>

       function readURL(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('#img')
                       .attr('src', e.target.result)
                       .width(150)
                       .height(100);
               };

               reader.readAsDataURL(input.files[0]);
           }
       }

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Admin/add.blade.php ENDPATH**/ ?>