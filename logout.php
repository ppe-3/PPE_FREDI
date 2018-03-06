<?php
session_start();
session_unset();
session_destroy();
$submit = isset($_POST['submit']) ? $_POST['submit'] : '';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        echo' <script type="text/javascript">
            alert("Deconnexion reussite ");
            </script>';
        ?>
    <center>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form1" method="post">


                <p><input type="submit" name="submit" value="OK" /></p>


            </form>
    </center>
        <?php
        if($submit)
        {
        header('Location: index.php');
        }
        ?>
        </body>
        </html>
