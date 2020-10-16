<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset=utf-8 />

    <link rel="stylesheet" href="/css/main.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<?php echo $__env->yieldContent('title'); ?></head>
<body>
<header>
    <div class="search-admin">
        <form action="/houses" id="search-form">
            <input id="inp-search" type="text"
                   placeholder=" Pretraži..."
                   name="search">
        </form>

    </div>

    <div>
        <ul class="nav__links-admin">
            <?php if(!Auth::user()): ?>   <li><a href="/login">Uloguj se</a></li>
            <li><a href="/register">Registruj se</a></li>  <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>   <li> <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Odjavi se
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                </form>  </li>
            <li><a href="/all_reservations/">Sve rezervacije</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <p class="menu">Menu</p>

</header> <hr>

<div class="overlay">
    <a class="close">&times;</a>
    <div class="overlay__content">
        <a href="/all_reservations/">Sve rezervacije</a><hr>


        <?php if(auth()->guard()->check()): ?>   <li> <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Odjavi se
            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            </form>  </li>  <?php endif; ?>

    </div>
</div>

<script type="text/javascript" src="/js/mobile.js"></script>

<?php echo $__env->make('flash.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


</body>
</html>
<?php /**PATH D:\wamp\www\project\resources\views/layouts/admin.blade.php ENDPATH**/ ?>