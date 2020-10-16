<?php $__env->startSection('content'); ?>

    <div class="contact_main_add">
        <div class="contact_section_add">



            <div class="wrapper_add">
                <div class="title_add">
                    <h1>Uredi kucu</h1>
                </div>
                <div class="contact-form_add">


                    <form action="<?php echo e(route('admin.store_edit',$house->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="input-fields_add">

                            <input type="text" class="input" value="<?php echo e($house->name); ?>" name="name">

                            <textarea class="input"  name="description" rows="5" cols="50"><?php echo e($house->description); ?></textarea>


                            <input type="text" class="input" value="<?php echo e($house->address); ?>" name="address">

                            <h5 class="text-add">Ubaci sliku</h5>
                            <img id="img" src="#" alt="" />

                            <input type="file"  class="input" onchange="readURL(this);" name="image">

                            <button type="submit" class="btn-add">Uredi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        /* function for display image behide submit button */

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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Admin/edit_house.blade.php ENDPATH**/ ?>