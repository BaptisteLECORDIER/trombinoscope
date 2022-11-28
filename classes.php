<?php require_once('./inc/head.php') ?>
<?php require_once('./data/data.php') ?>
<?php require_once('./functions/crud_functions.php') ?>
<body class="classes-body">
    <?php require_once('./inc/navbar.php') ?>
    <div class="grid-card items-y-center">
        <h1>Classes</h1>
        <div class="search-bar search-bar-cross-not-visible page1">
        <label for=""></label>
        <input id="searchbar-card-item" class="search-bar__input" placeholder="Rechercher" type="text">
        <div class="btn-search-bar-cross"><button class="btn btn-search-bar"><img src="./assets/img/cross.svg" alt=""></button></div>
        <div><button id="btn-search" class="btn btn-search-bar"><img src="./assets/img/maginfying-glass.svg" alt=""></button></div>
        </div>

        <script>

        // setInterval(function() 

        // {
        //     const xhttp = new XMLHttpRequest();
        //     xhttp.onload = function() {
        //         document.querySelector('#classes').innerHTML = this.responseText;
        //     };
        //     xhttp.open("GET", "inc/classes-inc.php");
        //     xhttp.send();
        // }, 100);

        // </script>

        <div id="classes">
            <?php
            $classes_tab = get_datas_from_db ($datas_to_connect, 'classes');
            foreach ($classes_tab as $classe_tab)

            {
                echo '<a href="./classe.php?classe='.$classe_tab['name'].'" class="no-a-style">
                <div class="card-btn">
                    <div class="card-btn__img">
                        <img src="./assets/upload-img/class/'.$classe_tab['name-image'].'" alt="">
                    </div>
                    <div class="card-btn__txt">
                        <p class="txt-md">'.$classe_tab['name'].'</p>
                    </div>
                </div>
            </a><br>';
            }
            ?>
        </div>


        
        
            
    </div>
</body>

<?php require_once('./inc/footer.php') ?>
</html>