<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Aurora borealis</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
   <header>
        <div class="header">
            <h1 class="header__h1">Aurora borealis</h1>
            <p class="header_subtitle">Welcome to aurora borealis fan</p>
       </div>
       <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
   </header> 
   <main>
        <?php get_template_part( 'parts/form' ); ?>
        <div class="post">