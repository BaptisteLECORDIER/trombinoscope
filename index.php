<?php require_once('./inc/head.php') ?>
<?php require_once('./functions/crud_functions.php') ?>
<?php require_once('./data/data.php') ?>

<body class="index-body">
    <?php require_once('./inc/navbar.php') ?>
    <main class="items-in-middle">
        <div class="card-index items-y-center">
            <h1 class="txt-md">Bienvenue sur votre trombinoscope</h1>
            <a class="no-a-style" href="./classes.php">
                <button class="btn btn-arrow btn-primary btn-rad">
                    <p class="txt-md">En voir plus</p> 
                    <div class="btn__arrow"><img src="./assets/img/arrow-right-white.svg" alt=""></div>
                </button>
            </a>
            
        </div>
    </main>
</body>

<?php require_once('./inc/footer.php') ?>
</html>