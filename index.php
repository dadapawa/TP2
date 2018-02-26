<!doctype html>
<html class="no-js" lang="">
<?php include_once 'includes/head.php'; ?>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header> <?php include_once 'includes/header.php'; ?> </header>

        <main>
        <div class="section_principale">
            <article>
                <?php  

                    if(isset($_GET['page']))
                    {
                        if($_GET['page'] == 'accueil')
                        {
                            include_once 'includes/accueil.php';
                        }
                        elseif($_GET['page'] == 'inscription')
                        {
                            include_once 'includes/inscription.php';
                        }
                        elseif($_GET['page'] == 'presentation')
                        {
                            include_once 'includes/presentation.php';
                        }
                    }
                    else
                    {
                        include_once 'includes/accueil.php';
                    }

                ?>
            </article>
            <aside> <?php include_once 'includes/news.php'; ?> </aside>
        </div>
        </main>

        <footer> <?php include_once 'includes/footer.php'; ?> </footer>

    <?php include_once 'includes/javascript.php'; ?>

    </body>
</html>
