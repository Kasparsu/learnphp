<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body class="mytheme">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
            <?php the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_footer()?>
</body>
</html>