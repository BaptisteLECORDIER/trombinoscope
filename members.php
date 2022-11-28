<?php require_once('./inc/head.php') ?>
<?php require_once('./data/data.php') ?>
<?php require_once('./functions/crud_functions.php') ?>
<body class="members-body">
    <?php require_once('./inc/navbar.php') ?>
    



<div class="grid-card items-y-center">
    <br>
        <h1>Classes</h1>
        <div class="search-bar search-bar-cross-not-visible page1">
        <label for=""></label>
        <input id="searchbar-card-item" class="search-bar__input" placeholder="Rechercher" type="text">
        <div class="btn-search-bar-cross"><button class="btn btn-search-bar"><img src="./assets/img/cross.svg" alt=""></button></div>
        <div><button id="btn-search" class="btn btn-search-bar"><img src="./assets/img/maginfying-glass.svg" alt=""></button></div>
        </div>

        <?php 
            $members_tab = get_datas_from_db ($datas_to_connect, 'students');
            foreach ($members_tab as $member_tab)

            {
                echo '<a href="./student.php?student='.$member_tab['nom'].'" class="no-a-style">
                <div class="card-btn">
                    <div class="card-btn__img">
                        <img src="./assets/upload-img/students/'.$member_tab['image'].'" alt="">
                    </div>
                    <div class="card-btn__txt">
                        <p class="txt-md">'.$member_tab['nom'].'</p>
                    </div>
                </div>
            </a>';
            }
        ?>


        
        
            
    </div>

</body>

<?php require_once('./inc/footer.php') ?>
</html>