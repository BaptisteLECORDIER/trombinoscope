<?php require_once('./inc/head.php') ?>
<?php require_once('./functions/crud_functions.php') ?>
<?php require_once('./data/data.php') ?>
<body class="student-body">
    <?php require_once('./inc/navbar.php') ?>
    <div class="grid-card items-y-center">
    <br>
    
    <?php 

            if (isset($_GET['student']))
            {
                //print_r(get_datas_with_manual_request ($datas_to_connect, 'SELECT * FROM `students` INNER JOIN classes ON students.classe = classes.name WHERE name = "'.$_GET['classe'].'"'));

                $student_tab = get_datas_with_manual_request ($datas_to_connect, 'SELECT * FROM `students` WHERE nom = "'.$_GET['student'].'"');
                
                echo "<h1>".$student_tab[0]['nom']."</h1>";
                
                    //print_r($student_tab);
                    echo '<a href="./student.php?student='.$student_tab[0]['nom'].'" class="no-a-style">
                    <div class="card-btn">
                        <div class="card-btn__img">
                            <img src="./assets/upload-img/students/'.$student_tab[0]['image'].'" alt="">
                        </div>
                        <div class="card-btn__txt">
                            <p class="txt-md">'.$student_tab[0]['nom'].'</p>
                        </div>
                    </div>
                </a>';
                
            }
    ?>
    </div>
</body>

<?php require_once('./inc/footer.php') ?>
</html>