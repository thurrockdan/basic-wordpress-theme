<?php
/* Index page. */
get_template_part( 'header' );
?>
<div class="container-fluid">
    <header role="banner">


    </header>

    <nav role="navigation">
        <?php get_template_part('nav'); ?>
    </nav>

    <section role="marquee">

        <?php get_template_part('slider'); ?>

    </section>

    <main role="main">

        <article role="article" id="content" tabindex="-1">

            <?php get_template_part('loop'); ?>

        </article>

    </main>

    <aside role="complementary">
        <?php get_template_part('sidebar'); ?>
    </aside>

</div>

    <footer role="contentinfo">

        Copyright &copy; 2015 Website Name

    </footer>
<?php
get_template_part('footer');
?>