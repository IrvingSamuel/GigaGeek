<?php

require 'config.php';

if (!empty($_SESSION['user_id'])) {
    // Recupera o valor do cookie
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = null;
}

?>

<store-header class="header header--bordered" role="banner">
    <div class="container">
        <div class="header__wrapper">
            <!-- LEFT PART -->
            <nav class="header__inline-navigation" role="navigation">
                <link
                    href="cdn/shop/t/10/assets/menu-desktop05b0.css"
                    rel="stylesheet"
                    type="text/css"
                    media="all"
                />
            
                <desktop-navigation>
                    <ul
                        class="header__linklist list--unstyled hidden-pocket hidden-lap"
                        role="list"
                    >
                        <li class="header__linklist-item">
                            <style>
                                a.header__linklist-link.link--animated {
                                    display: flex;
                                    align-items: center;
                                }
                            </style>
                        <a class="header__linklist-link link--animated" href="collection" style="font-weight: bold; font-size: 25px;">
                            CAMISAS
                        </a>

                        </li>
                    </ul>
                </desktop-navigation>
                <div class="header__icon-list">
                    <button
                        is="toggle-button"
                        class="header__icon-wrapper tap-area hidden-desk"
                        aria-controls="mobile-menu-drawer"
                        aria-expanded="false"
                    >
                        <span class="visually-hidden">Navegação</span>
                        <svg
                            focusable="false"
                            width="18"
                            height="14"
                            class="icon icon--header-hamburger"
                            viewBox="0 0 18 14"
                        >
                            <path
                                d="M0 1h18M0 13h18H0zm0-6h18H0z"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.1"
                            ></path>
                        </svg>
                    </button>
                </div>
            </nav>


            <!-- LOGO PART -->
            <h1 class="header__logo">
                <a class="header__logo-link" href="https://gigageek.takesagencia.com.br/"
                    ><span class="visually-hidden">Debug Style</span>
                    <img
                        loading="eager"
                        class="header__logo-image"
                        width="580"
                        height="120"
                        src="https://gigageek.takesagencia.com.br/cdn/shop/files/Debug_Style_1_380x2e79.png"
                        alt=""
                /></a>
            </h1>
            <!-- SECONDARY LINKS PART -->
            <div class="header__secondary-links">
                <div class="header__icon-list">
                    <button
                        is="toggle-button"
                        class="header__icon-wrapper tap-area hidden-phone"
                        aria-controls="newsletter-popup"
                        aria-expanded="false"
                    >
                        <span class="visually-hidden">Lista de e-mails</span
                        ><svg
                            focusable="false"
                            width="20"
                            height="16"
                            class="icon icon--header-email"
                            viewBox="0 0 20 16"
                        >
                            <path
                                d="M19 4l-9 5-9-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.1"
                            ></path>
                            <path
                                stroke="currentColor"
                                fill="none"
                                stroke-width="1.1"
                                d="M1 1h18v14H1z"
                            ></path>
                        </svg></button
                    >
                    <?php
                        if($user_id != null){
                            $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id"));
                            $user_name = $row['nome'];
                    ?>
                    <img src="https://gigageek.takesagencia.com.br/assets/img/avatar.svg" style="border-radius: 50%; width: 40px;">
                    <a href="#" class="header__logo-link"><?php echo $user_name ;?></a>
                    <a href="https://gigageek.takesagencia.com.br/auth/logout" class="header__logo-link">Logout</a>
                    <?php 
                        }else{
                    ?>
                    <a href="https://gigageek.takesagencia.com.br/auth/login" class="header__logo-link">Login</a>
                    <a href="https://gigageek.takesagencia.com.br/auth/register" class="header__logo-link">Registro</a>
                    <?php 
                        }
                    ?>
                    <a href="cart.html" is="toggle-link"
                  aria-controls="mini-cart" aria-expanded="false"
                  class="header__icon-wrapper tap-area" aria-label="Carrinho"
                  data-no-instant><svg focusable="false"
                    width="20" height="19" class="icon icon--header-tote-bag"
                    viewBox="0 0 20 19">
                    <path d="M3 7H17L18 18H2L3 7Z" fill="none"
                      stroke="currentColor" stroke-width="1.1"></path>
                    <path
                      d="M13 4V4C13 2.34315 11.6569 1 10 1V1C8.34315 1 7 2.34315 7 4V4"
                      fill="none"
                      stroke="currentColor" stroke-width="1.1"></path>
                  </svg>
                </a>
                </div>
            </div>
        </div>
    </div>
</store-header>
