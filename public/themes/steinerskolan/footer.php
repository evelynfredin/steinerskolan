<script src="<?= get_theme_file_uri('assets/app.js') ?>" async></script>
<script src="<?= get_theme_file_uri('assets/script.js') ?>" async></script>

<?php wp_footer(); ?>
<?php $menu = wp_get_nav_menu_items('footer-menu'); 

?>
<img src="<?php the_field('footer_logo', 'option') ?>" alt="Rudolf Steinerskolan" class="md:h-[55px] h-[40px] w-auto">
  <?php if (get_field('subheader_1', 'option')) : ?>
                    <p class="text-2xl font-black md:text-4xl mb-8"><?php the_field('subheader_1', 'option'); ?></p>
                <?php endif; ?>
                <?php if (get_field('details_1', 'option')) : ?>
                    <p class=""><?php the_field('details_1', 'option'); ?></p>
                <?php endif; ?>

                <?php if (get_field('subheader_2', 'option')) : ?>
                    <p class="text-2xl font-black md:text-4xl mb-8"><?php the_field('subheader_2', 'option'); ?></p>
                <?php endif; ?>
                <?php if (get_field('details_2', 'option')) : ?>
                    <p class=""><?php the_field('details_2', 'option'); ?></p>
                <?php endif; ?>

                <a href="<?php get_field('facebook_link', 'option')?>"><img src="" alt="facebook logo" srcset=""></a>
                <a href="<?php get_field('instagram_link', 'option')?>"><img src="" alt="instagram logo" srcset=""></a>


 <?php foreach ($menu as $menuItem) : ?>
    <li>
        <a class="" href="<?= $menuItem->url ?>">
            <?= $menuItem->title; ?>
        </a>
    </li>
<?php endforeach; ?>


</body>

</html>
