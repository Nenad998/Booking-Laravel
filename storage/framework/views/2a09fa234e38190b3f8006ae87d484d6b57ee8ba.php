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
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="add_house_name"> <?php echo e($message); ?> </div>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            <div class="wrapper_add">
                <div class="title_add">
                    <h1>Dodaj sobu</h1>
                </div>
                <div class="contact-form_add">

                    <form action="/add_room_post/<?php echo e($house->id); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="input-fields_add">

                            <input type="text" class="input" placeholder="Unesi naziv" name="name">

                            <textarea class="input" placeholder="Unesi opis" name="description" rows="5" cols="50"></textarea>


                            <input type="number" class="input" placeholder="Unesi cenu" name="price">

                            <input type="text" class="input" placeholder="Unesi opremu" name="equipment">

                            <input type="text" class="input" placeholder="Unesi broj kreveta" name="beds">

                            <input type="text" class="input" placeholder="Unesi telefon" name="contact">


                            <h5 class="text-add">Ubaci sliku</h5>
                            <img id="img" src="#" alt="" />

                            <input type="file" multiple class="input" onchange="readURL(this);" name="image[]">



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







<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Room/add.blade.php ENDPATH**/ ?>