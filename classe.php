<?php require_once('./inc/head.php') ?>
<?php require_once('./functions/crud_functions.php') ?>
<?php require_once('./data/data.php') ?>
<body class="classe-body">
    <?php require_once('./inc/navbar.php') ?>
    <div class="grid-card items-y-center">
        <br>
        <h1>Classes</h1>

        <?php 

            if (isset($_GET['classe']))
            {
                //print_r(get_datas_with_manual_request ($datas_to_connect, 'SELECT * FROM `students` INNER JOIN classes ON students.classe = classes.name WHERE name = "'.$_GET['classe'].'"'));

                $students_tab = get_datas_with_manual_request ($datas_to_connect, 'SELECT * FROM `students` INNER JOIN classes ON students.classe = classes.name WHERE name = "'.$_GET['classe'].'"');


                foreach ($students_tab as $student_tab)

                {
                    //print_r($student_tab);
                    echo '<a href="./student.php?student='.$student_tab['nom'].'" class="no-a-style">
                    <div class="card-btn">
                        <div class="card-btn__img">
                            <img src="./assets/upload-img/students/'.$student_tab['image'].'" alt="">
                        </div>
                        <div class="card-btn__txt">
                            <p class="txt-md">'.$student_tab['nom'].'</p>
                        </div>
                    </div>
                </a>';
                }
            }
        ?>
    </div>
</body>

<?php require_once('./inc/footer.php') ?>
</html>