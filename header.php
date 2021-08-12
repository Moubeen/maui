<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maui
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- styles  -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header" id="header">
  <div class="container">

    <div class="header__logo"><?php the_custom_logo(); ?></div>

    <div class="header__menu">
      <ul id="primary-menu" class="search-dropdown">
        <li class="menu-item">
          <a onclick="openDropDown()">search</a>
          <div class="dropdown">
            <ul class="search">
              <form action="">
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
              </form>
            </ul>
          </div>
        </li>
      </ul>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
      ?>
    </div>

    <div class="header__button"><a href="tel:808-870-8888" class="btn__primary--call">CALL US 808-870-8888</a></div>

    <div class="toggler" onclick="openMenu()"><img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'><path stroke='rgba%280, 0, 0,1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>"alt="image"></div>
  
  </div>
</header>
