<!DOCTYPE html>
<html>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
li{
  list-style: none;
}
a{
  text-decoration: none;
  color: black;
}

body{
  background: #f5f5f5;
}

header{
  text-align: center;
  padding: 20px 0;
}

.header-tag{
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.header-tag li{
  padding: 0 25px;
}

.main-top img{
  background-repeat: no-repeat;
  background-size: cover;
  height: 400px;
}
.main-top h3{
  color: white;
}

.top-phara{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,25%);
  text-align: center;
  font-family: "Indie Flower", cursive;
  font-size: 60px;
  width: 80%;
}

.list{
  margin: 70px auto ;
  width: 90%;
}

.flex-list{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.es1{
  font-size: 14px;
  font-family: "Indie Flower", cursive;
  color: #b31566;
  padding: 10px 0;
}
.list h5{
  color:#707070;
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.list-contents{
  width: 65%;
}

.contents{
  position: relative;
  margin-bottom: 30px;
}
.contents img{
  object-fit: cover;
  border-radius: 15px 15px 0 0;
  height: 30vh;
  width: 17vw;
}
.contents p{
  color: white;
  background-color:#b31566 ;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 15px 0 0 0;
  padding: 10px 20px;
}

.contents-phara{
  background-color: white;
  width: 17vw;
  padding: 17px;
  box-sizing: border-box;
  color: #707070;
  border-radius:0 0 15px 15px ;
}
.contents-phara h4{
  line-height: 1.7;
}
.contents-phara h6{
  padding-top: 25px;
  font-size: 12px;
  font-weight: lighter;
}

footer{
  background-color: white;
  height: 60px;
  text-align: center;
  line-height: 60px;
}
footer h6{
  color: #707070;
  font-size: 14px;
}

.sidebar{
  width: 30%;
}

.sidebar-top{
  border-radius:15px ;
}

.sidebar-middle{
  padding: 30px 20px;
  background-color: white;
  border-radius: 15px;
  margin-top: 30px;
}

.sidebar-middle img{
  height: auto;
  width: 100%;
}

.middle-img{
  width: 150px;
  height: 150px;
  background: #b31566;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

.sidebar-middle h3 {
  text-align: center;
  margin: 20px 0;
  font-size: 22px;
  color: #707070;
}

.sidebar-middle p {
  width: 23vw;
  line-height: 1.7;
}

.sidebar-bottom{
  background-color: white;
  border-radius: 15px;
  padding: 30px 20px;
  margin-top: 30px;
}
.sidebar-bottom h3{
  color:#707070;
  font-size: 22px;
  margin-bottom: 20px;
}

.category-link{
  padding: 10px 0;
  border-bottom: 1px solid #f5f5f5;
  position: relative;
}
.category-link img{
  position: absolute;
  top: 15px;
  right: 10px;
  width: 20px;
  height: 20px;
}

.single-container{
  margin: 20px 13vw 40px;
  display: block;
  background-color: white;
  border-radius: 15px ;
}

.single-header{
  padding:40px 20px;
}

.single-category-tag a{
  color: white;
  background-color:#b31566 ;
  padding: 5px 20px;
  border-radius: 15px;
}

.single-title{
  margin-top: 30px;
  font-size: 30px;
  font-weight: bold;
  text-align: center;
}

.single-img img{
  height: auto;
  width: 100%;
  border-radius: 10px;
}

.main-text{
  padding: 40px 15px 60px;
}
    </style>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="article-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png"></a>
      <ul class="header-tag">
        <li><a href="<?php echo get_category_link( 2 ); ?>">HTML</li>
        <li><a href="<?php echo get_category_link(  3); ?>">CSS</a></li>
        <li><a href="<?php echo get_category_link( 4 ); ?>">JavaScript</a></li>
        <li><a href="<?php echo get_category_link( 5 ); ?>">PHP</a></li>
        <li><a href="<?php echo get_category_link( 1 ); ?>">MySQL</a></li>      
      </ul>
    </header>
