<?php $__env->startSection('title'); ?> <title>Ovo je strana</title><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php
    $images=json_decode($room->image);
        ?>


    <div class="slideshow-container">
        <p class="parag_admin"><?php echo e($room->description); ?></p>
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mySlides fade">
            <div class="numbertext"></div>
                <img class="house_img_admin" src="/images/<?php echo e($img); ?>" alt="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

<!-- kraj slidera -->

    <div class="products">
        <div id="products-container">
            <article class="product-university">
					<span>
						<i class="fa fa-university"></i>
					</span>
                <h4 class="university">Obuhvata</h4>

                <?php
                    $eqs=explode(',',$room->equipment);
                ?>
                <ul>
                    <?php $__currentLoopData = $eqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($eq); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>


            </article>

            <article class="product-bed">
					<span>
						<i class="fa fa-bed"></i>
					</span>
                <h4 class="bed">Broj kreveta</h4>
                <p><?php echo e($room->beds); ?></p>

            </article>

            <article class="product-money">
					<span>
						<i class="fa fa-money"></i>
					</span>
                <h4 class="money">Cena</h4>
                <p><?php echo e($room->price); ?></p>

            </article>

            <article class="product-phone">
					<span>
						<i class="fa fa-phone"></i>
					</span>
                <h4 class="phone">Kontakt</h4>
                <p><?php echo e($room->contact); ?></p>

            </article>
        </div>

    </div>



    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Admin/single_room.blade.php ENDPATH**/ ?>