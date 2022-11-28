<?php require_once('./inc/head.php') ?>
<?php require_once('./functions/crud_functions.php') ?>
<?php require_once('./data/data.php') ?>
<body class="login-body">
    <?php require_once('./inc/navbar.php') ?>
    <div class="items-y-center">
        <div class="card-index items-y-center">
        <?php    
        
    ?>
            <h1 class="txt-md">Se connecter</h1>
            <form class="items-y-center" action="./controllers/form-controller.php" method="post">
                <div>
                    <label class="txt-md" for="username">Nom d'utilisateur</label><br>
                    <input placeholder="John Doe" type="text" name="username" <?php echo 'value ="'. return_cookie_if_exist_and_not_null('username_login').'"'; ?>>
                </div>
                <div>
                    <label class="txt-md" for="password">Mot de passe</label><br>
                    <input type="password" name="password">
                </div>
                
                <input type="submit" class="btn btn-primary btn-rad">
            </form>
            <div>
                <a class="txt-sm" href="./controllers/deconnection.php">Se déconnecter</a>
            </div>
            
        </div>
    </div>
    
</body>

<?php require_once('./inc/footer.php') ?>
</html>