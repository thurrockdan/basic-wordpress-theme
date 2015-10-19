<ul>
    <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
</ul>

<h2>Here is a subtitle</h2>
<p>Here is some content for the sidebar</p>

<h2>Archives</h2>
<ul>
    <?php wp_get_archives('type=monthly'); ?>
</ul>
<?php endif; ?>