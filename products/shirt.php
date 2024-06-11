<?php

require_once '../config.php';

if(!isset($_GET['id'])){
    header('location: index');
}else{
    $id = $_GET['id'];
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $camisa = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM camisas WHERE id = $id"));
    $nome = $camisa['nome'];
    $imagens = $camisa['imagens'];
    $img = explode(";", $imagens);
    $preco = $camisa['preco'];
    $descricao = $camisa['descricao'];
}

?>
<!doctype html>
<html class="no-js" lang="pt-BR" dir="ltr">

<!-- Mirrored from debugstyle.com/products/camiseta-assembly by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 02:40:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <!-- INICIO ADICIONE SEUS PIXELS AQUI -->
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "iybcn1ly1b");
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TCQHJRP2');</script>
    <!-- End Google Tag Manager -->

    <!-- FIM DO ADICIONE SEUS PIXELS AQUI -->

    <link rel="stylesheet" href="../../size-charts-relentless.herokuapp.com/css/size-charts-relentless.css" />


    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="../cdn/shop/files/DS_FAVICON_RETINA_96x96e80d.png?v=1694513011" type="image/png">
    <title>
        <?php echo $nome; ?>
    </title>
    <meta name="description"
        content="<?php echo $nome; ?>: Elegância e Paixão pela Programação em uma Única Peça. Garanta a Sua Hoje!">
    <link rel="canonical" href="camiseta-assembly.html">
    <link rel="preconnect" href="https://cdn.shopify.com/">
    <link rel="dns-prefetch" href="https://productreviews.shopifycdn.com/">
    <link rel="dns-prefetch" href="https://www.google-analytics.com/">
    <link rel="preconnect" href="https://fonts.shopifycdn.com/" crossorigin>
    <link rel="preload" as="style" href="../cdn/shop/t/10/assets/theme.mina7c8.css?v=76816455619470937531699758872">
    <link rel="preload" as="script" href="../cdn/shop/t/10/assets/vendorf680.js?v=162644391628613446311699758872" defer>
    <link rel="preload" as="script" href="../cdn/shop/t/10/assets/theme.mind833.js?v=145946009022533673601699758872"
        defer>
    <link rel="preload" as="fetch" href="camiseta-assembly.js" crossorigin>
    <link rel="preload" as="image" imagesizes="(max-width: 999px) calc(100vw - 48px), 640px" imagesrcset="//debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9_400x.jpg?v=1710905830 400w, //debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9_500x.jpg?v=1710905830 500w, //debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9_600x.jpg?v=1710905830 600w, //debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9_700x.jpg?v=1710905830 700w, //debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9_800x.jpg?v=1710905830 800w
">
    <link rel="preload" as="script" href="../cdn/shop/t/10/assets/flickity96ef.js?v=4101124369061427901699758872">
    <meta property="og:type" content="product">
    <meta property="og:title" content="<?php echo $nome; ?>">
    <meta property="product:price:amount" content="89,90">
    <meta property="product:price:currency" content="BRL">
    <meta property="og:image"
        content="http://debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9.jpg?v=1710905830">
    <meta property="og:image:secure_url"
        content="https://debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9.jpg?v=1710905830">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="820">
    <meta property="og:description"
        content="<?php echo $nome; ?>: Elegância e Paixão pela Programação em uma Única Peça. Garanta a Sua Hoje!">
    <meta property="og:url" content="https://debugstyle.com/products/camiseta-assembly">
    <meta property="og:site_name" content="Debug Style">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $nome; ?>">
    <meta name="twitter:description"
        content="Esta <?php echo $nome; ?> é um must-have para programadores apaixonados pelo Assembly. Com um design exclusivo que apresenta o nome &quot;Assembly,&quot; você pode exibir seu amor por essa linguagem de programação clássica em grande estilo. Feita com materiais de alta qualidade, esta camiseta combina conforto e elegância. Adicione um toque de autenticidade ao seu guarda-roupa de programador com esta peça única.
Principais Características:

Design exclusivo.
Confortável e durável.
Ideal para entusiastas do Assembly.
Seja notado por outros programadores.
Disponível em tamanhos variados.

Mostre ao mundo o seu compromisso com a programação Assembly com esta camiseta que é mais do que moda, é uma declaração de paixão. Peça a sua agora!">
    <meta name="twitter:image"
        content="https://debugstyle.com/cdn/shop/files/18b67293bb4c4a385f7f6c205e8714a9_1200x1200_crop_center.jpg?v=1710905830">
    <meta name="twitter:image:alt" content="">


    <link rel="preload"
        href="../cdn/fonts/archivo/archivo_n6.1c7c5a103e7ce5904146bdc8185bb04724ca217a8fa4.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=e1355e7bb0d4f843ac650b68c2cda4c0ba3e4caf90238d3ef0c08a54ffa5bf8d"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload"
        href="../cdn/fonts/helvetica/helvetica_n4.fe093fe9ca22a15354813c912484945a36b7914682b5.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=16de78cde66cd9aadf3724a9e9048e22f3ef4706fa94110d3d6d3f4fea8ee063"
        as="font" type="font/woff2" crossorigin>
    <style>
        /* Typography (heading) */
        @font-face {
            font-family: Archivo;
            font-weight: 600;
            font-style: normal;
            font-display: swap;
            src: url("../cdn/fonts/archivo/archivo_n6.1c7c5a103e7ce5904146bdc8185bb04724ca217a8fa4.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=e1355e7bb0d4f843ac650b68c2cda4c0ba3e4caf90238d3ef0c08a54ffa5bf8d") format("woff2"),
                url("../cdn/fonts/archivo/archivo_n6.73bf910681d1d187dcf6155c4f8a2c6fe79ac7be1ef7.woff?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=7239a8c18753653c8fd5628519dd4ca11f927a043e0ef191c6f0f7645cd02962") format("woff");
        }

        @font-face {
            font-family: Archivo;
            font-weight: 600;
            font-style: italic;
            font-display: swap;
            src: url("../cdn/fonts/archivo/archivo_i6.243682eac95afbeca7583f60c388b9a35a735280098a.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=3a56787a7837df62119bf70126bba63328da70188441acf9d7043da7192f7edc") format("woff2"),
                url("../cdn/fonts/archivo/archivo_i6.502cd191c9502df39e7033e0cdf815ae5008ab203c1b.woff?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=e8868247f4b46eccf45eebadcca86018db9a2f76293befa118d8c6a2c8d65b57") format("woff");
        }

        /* Typography (body) */
        @font-face {
            font-family: Helvetica;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("../cdn/fonts/helvetica/helvetica_n4.fe093fe9ca22a15354813c912484945a36b7914682b5.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=16de78cde66cd9aadf3724a9e9048e22f3ef4706fa94110d3d6d3f4fea8ee063") format("woff2"),
                url("../cdn/fonts/helvetica/helvetica_n4.8bddb85c18a0094c427a9bf65dee963ad88de4e8f87d.woff?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=f0820fc14e8424f61c3ebf31dacee19511aa83e2713f86f1a6f970083a35eb47") format("woff");
        }

        @font-face {
            font-family: Helvetica;
            font-weight: 400;
            font-style: oblique;
            font-display: swap;
            src: url("../cdn/fonts/helvetica/helvetica_o4.f9832a0fc1ee8fc5a359636e410d6941e1e4ca031aea.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=a00859dc9d281fd2de82b75768ce6252f228175e618e1a91fbc751bcfb00056a") format("woff2"),
                url("../cdn/fonts/helvetica/helvetica_o4.0063286aec443697ebae04eeb9c78b820f9f7805b7e2.woff?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=95b430b04df5683e44fef8ccc57bd15278249225c76fdce0d584290e02100701") format("woff");
        }

        @font-face {
            font-family: Helvetica;
            font-weight: 700;
            font-style: normal;
            font-display: swap;
            src: url("../cdn/fonts/helvetica/helvetica_n7.39bee04bd277a9c4e94e2fd42d53f4e3c0afb8a53f5a.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=aa35c064a90c299095b0cca45d9229ed2a75cb6a102ea0b1dded239a69e84188") format("woff2"),
                url("../cdn/fonts/helvetica/helvetica_n7.b95359461a6788d5549e702cb2123bc40c227e498c66.woff?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=be2d14642b52fd77dd17395ac3c24d464eebea0e754777ed725419979f4e1cc8") format("woff");
        }

        @font-face {
            font-family: Helvetica;
            font-weight: 700;
            font-style: oblique;
            font-display: swap;
            src: url("../cdn/fonts/helvetica/helvetica_o7.215fd4ca1a06214fa01e44328a1992c977700ea2eb96.woff2?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=ce3d636f66238d1a3cdb49d6fe67473d05748176e4c92b7f4924b969e89e3081") format("woff2"),
                url("../cdn/fonts/helvetica/helvetica_o7.b0a2026ae2aa64d060f9ce0ee1b3c3c1aa21bf8835e4.woff?h1=YTQ1MmFiLTIuYWNjb3VudC5teXNob3BpZnkuY29t&amp;h2=ZGVidWdzdHlsZS5jb20&amp;h3=ZGVidWdzdHlsZS5jb20uYnI&amp;h4=ZGVidWdzdHlsZS5vbmxpbmU&amp;hmac=bec811f25ce1c97956df98c2a4705eaebd546bc646b84880034b8a2c0b275160") format("woff");
        }

        :root {
            --frete-buscar-btn: #000000;
            --frete-buscar-fonte: #fff;
            --frete-buscar-localizacao: #36b376;
            --frete-buscar-precos: #36b376;

            --box-primaria: #ffffff;
            --box-sec: #8f8f8f;
            --box-titulo: #101010;

            --relampago1: #fffbac;
            --relampago2: #dca201;
            --relampago3: #fef777;
            --relampago4: #000;



            --bandeiras-w-mobile: 11%;
            --bandeiras-w-desktop: 10%;
            --bandeiras-t-fonte: 10px;

            --bandeiras-w-mobilec: 14%;
            --bandeiras-w-desktopc: 14%;
            --bandeiras-t-fontec: 12px;

            --logo-correcao-m: 0px;
            --logo-correcao-d: 1px;

            --arredonda-box: 2px;

            --color-parcel-prod: #000000;
            --preco-prod: 27px;
            --preco-prodm: 29px;
            --borda-descont-pro: 4px;
            --desconto-fonte-label: 12px;

            --footer-backg: #ffffff;

            --footer-font: #262424;

            --varianteseletor: #e2a696;

            --setaslidefundo: #e2a696;
            --setaslidefonte: #fff;
            --setaslideborda: #e2a696;

            --setaslidebordas: 100px;

            --pix-envio-bordageral: 7px;
            --pix-envio-bordaenvio: 15px;
            --pix-envio-tfonte: 13px;
            --pix-envio-tsimb: 18px;

            --logo-ps-m: 0px;
            --logo-pi-m: 0px;
            --logo-ps-d: 0px;
            --logo-pi-d: 0px;

            --anuncio-alturam: 38px;
            --anuncio-alturad: 30px;
            --anuncio-fontem: 14px;
            --anuncio-fonted: 15px;

            --pix-envio-fundo: #f1f1f1;
            --pix-envio-textdesc: #201F1F;
            --pix-envio-textnopix: #5E5E5E;
            --pix-envio-simb: #36b376;
            --pix-envio-enviofundo: #36b376;
            --pix-envio-enviotexto: #fff;



            --product-truck-background: #000000;
            --color-frete-fundo: #fff;
            --product-truck-color: #fff;
            --product-free-shipping-color: #000;
            --product-localization-color: #36b376;
            --product-icon-return-color: ;
            --product-return-color: ;


            --popup_button_right: px;
            --popup_size-color: #2b3948;
            --popup_text_medidas-color: #ffffff;
            --popup_border: 7px;
            --popup_show-color: #ffffff;
            --popup_text-color: #000;
            --icon_popup_image: :;
            --popup_text_titulo: : #000;

            --alt-bot-qnt: 55px;
            --borda-bot-qnt: 7px;
            --borda-atv-parcelamento: 4px;
            --borda-atv-parcelamento2: #dfdfdf;
            --fonte-wht: 15px;

            --fonte1m-colecao: 24px;
            --fonte1d-colecao: 30px;
            --selito-lar: 40px;
            --selito-larm: 42px;
            --fonte2m-colecao: 26px;
            --fonte2d-colecao: 30px;

            --color-bolinha-b: #e2a696;
            --color-bolinha-f: #ffffff;


            --social-radius: 4px;
            --social-mard: 2px;
            --social-mari: 2px;
            --social-bord-cor: #dedede;
            --social-icon-cor: #0e0e0e;
            --social-icon-back: #ffffff;

            --continuar-fundo: #fff;
            --continuar-texto: #000;
            --continuar-borda: #000;


            --cookie-fontegeral: #000;
            --cookie-fundogeral: #ededed;
            --cookie-aceitarfundo: #008026;
            --cookie-aceitarfonte: #fff;
            --cookie-recusarfundo: #fa0000;
            --cookie-recusarfonte: #fff;
            --cookie-fonte: 14px;


            --color-primary-parcelamento: #1d1d1d;
            --color-secondary-parcelamento: #565c69;
            --color-terciary-parcelamento: #b6bbc2;
            --color-active-parcelamento: var(--color-terciary-parcelamento);
            --color-quart-parcelamento: #ffffff;
            --color-quint-parcelamento: #000000;

            --wpp_cor1: #36b376;
            --wpp_cor2: #ffffff;
            --wpp_cor3: #36b376;
            --wpp_cor4: #ffffff;
            --wpp_cor5: #36b376;
            --wpp_spc: 0.2pt;

            --label-desconto: #e2a696;
            --fonte-desconto: #fff;

            --back-vendidos: #f5f5f5;
            --fonte-vendidos: #a7a5a5;
            --back-exclusivo: #fff4eb;
            --fonte-exclusivo: #e2a696;

            --back-exclusivo2: #000;
            --fonte-exclusivo2: #FFF;


            --color-barcopy-fundo: #222222;
            --color-barcopy-fonte: #fafafa;

            --color-primary-whatsapp: #36b376;
            --color-secundary-whatsapp: #ffffff;
            --color-terciary-whatsapp: #fefefe;
            --color-accent-whatsapp: #fff;

            --colorp-progress: #f1f1f1;
            --colors-progress: #e2a696;

            --alt-progress: 10px;
            --font-progress: 13px;

            --heading-color: 40, 40, 40;
            --text-color: 40, 40, 40;
            --background: 255, 255, 255;
            --secondary-background: 245, 245, 245;
            --border-color: 223, 223, 223;
            --border-color-darker: 169, 169, 169;
            --success-color: 46, 158, 123;
            --success-background: 213, 236, 229;
            --error-color: 222, 42, 42;
            --error-background: 253, 240, 240;
            --primary-button-background: 0, 0, 0;
            --primary-button-text-color: 255, 255, 255;
            --secondary-button-background: 0, 0, 0;
            --secondary-button-text-color: 255, 255, 255;
            --product-star-rating: 246, 164, 41;
            --product-on-sale-accent: 51, 51, 51;
            --product-sold-out-accent: 111, 113, 155;
            --product-custom-label-background: 19, 19, 19;
            --product-custom-label-text-color: 255, 255, 255;
            --product-custom-label-2-background: 243, 255, 52;
            --product-custom-label-2-text-color: 0, 0, 0;
            --product-low-stock-text-color: 222, 42, 42;
            --product-in-stock-text-color: 46, 158, 123;
            --loading-bar-background: 40, 40, 40;

            /* We duplicate some "base" colors as root colors, which is useful to use on drawer elements or popover without. Those should not be overridden to avoid issues */
            --root-heading-color: 40, 40, 40;
            --root-text-color: 40, 40, 40;
            --root-background: 255, 255, 255;
            --root-border-color: 223, 223, 223;
            --root-primary-button-background: 0, 0, 0;
            --root-primary-button-text-color: 255, 255, 255;

            --base-font-size: 17px;
            --heading-font-family: Archivo, serif;
            --heading-font-weight: 600;
            --heading-font-style: normal;
            --heading-text-transform: normal;
            --text-font-family: Helvetica, 'Helvetica Neue', Arial, 'Lucida Grande', sans-serif;
            --text-font-weight: 400;
            --text-font-style: normal;
            --text-font-bold-weight: 700;

            /* Typography (font size) */
            --heading-xxsmall-font-size: 11px;
            --heading-xsmall-font-size: 11px;
            --heading-small-font-size: 13px;
            --heading-large-font-size: 40px;
            --heading-h1-font-size: 40px;
            --heading-h2-font-size: 32px;
            --heading-h3-font-size: 28px;
            --heading-h4-font-size: 26px;
            --heading-h5-font-size: 22px;
            --heading-h6-font-size: 18px;

            /* Control the look and feel of the theme by changing radius of various elements */
            --button-border-radius: 6px;
            --block-border-radius: 32px;
            --block-border-radius-reduced: 16px;
            --color-swatch-border-radius: 100%;

            /* Button size */
            --button-height: 48px;
            --button-small-height: 40px;

            /* Form related */
            --form-input-field-height: 48px;
            --form-input-gap: 16px;
            --form-submit-margin: 24px;

            /* Product listing related variables */
            --product-list-block-spacing: 32px;

            /* Video related */
            --play-button-background: 255, 255, 255;
            --play-button-arrow: 40, 40, 40;

            /* RTL support */
            --transform-logical-flip: 1;
            --transform-origin-start: left;
            --transform-origin-end: right;

            /* Other */
            --zoom-cursor-svg-url: url(../cdn/shop/t/10/assets/zoom-cursorb6f1.svg?v=123700393195620908781699893066);
            --arrow-right-svg-url: url(../cdn/shop/t/10/assets/arrow-right470f.svg?v=108969577876682560151699758872);
            --arrow-left-svg-url: url(../cdn/shop/t/10/assets/arrow-leftc600.svg?v=75646541227081074131699758872);

            /* Some useful variables that we can reuse in our CSS. Some explanation are needed for some of them:
       - container-max-width-minus-gutters: represents the container max width without the edge gutters
       - container-outer-width: considering the screen width, represent all the space outside the container
       - container-outer-margin: same as container-outer-width but get set to 0 inside a container
       - container-inner-width: the effective space inside the container (minus gutters)
       - grid-column-width: represents the width of a single column of the grid
       - vertical-breather: this is a variable that defines the global "spacing" between sections, and inside the section
                            to create some "breath" and minimum spacing
     */
            --container-max-width: 1600px;
            --container-gutter: 24px;
            --container-max-width-minus-gutters: calc(var(--container-max-width) - (var(--container-gutter)) * 2);
            --container-outer-width: max(calc((100vw - var(--container-max-width-minus-gutters)) / 2), var(--container-gutter));
            --container-outer-margin: var(--container-outer-width);
            --container-inner-width: calc(100vw - var(--container-outer-width) * 2);

            --grid-column-count: 10;
            --grid-gap: 24px;
            --grid-column-width: calc((100vw - var(--container-outer-width) * 2 - var(--grid-gap) * (var(--grid-column-count) - 1)) / var(--grid-column-count));

            --vertical-breather: 48px;
            --vertical-breather-tight: 48px;

            /* Shopify related variables */
            --payment-terms-background-color: #ffffff;
        }

        @media screen and (min-width: 741px) {
            :root {
                --container-gutter: 40px;
                --grid-column-count: 20;
                --vertical-breather: 64px;
                --vertical-breather-tight: 64px;

                /* Typography (font size) */
                --heading-xsmall-font-size: 13px;
                --heading-small-font-size: 14px;
                --heading-large-font-size: 58px;
                --heading-h1-font-size: 58px;
                --heading-h2-font-size: 44px;
                --heading-h3-font-size: 36px;
                --heading-h4-font-size: 28px;
                --heading-h5-font-size: 22px;
                --heading-h6-font-size: 20px;

                /* Form related */
                --form-input-field-height: 52px;
                --form-submit-margin: 32px;

                /* Button size */
                --button-height: 52px;
                --button-small-height: 44px;
            }
        }

        @media screen and (min-width: 1200px) {
            :root {
                --vertical-breather: 80px;
                --vertical-breather-tight: 64px;
                --product-list-block-spacing: 48px;

                /* Typography */
                --heading-large-font-size: 72px;
                --heading-h1-font-size: 62px;
                --heading-h2-font-size: 54px;
                --heading-h3-font-size: 40px;
                --heading-h4-font-size: 34px;
                --heading-h5-font-size: 26px;
                --heading-h6-font-size: 18px;
            }
        }

        @media screen and (min-width: 1600px) {
            :root {
                --vertical-breather: 90px;
                --vertical-breather-tight: 64px;
            }
        }
    </style>
    <script>
        // This allows to expose several variables to the global scope, to be used in scripts
        window.themeVariables = {
            settings: {
                direction: "ltr",
                pageType: "product",
                cartCount: 0,
                moneyFormat: "R$ {{amount_with_comma_separator}}",
                moneyWithCurrencyFormat: "R$ {{amount_with_comma_separator}} BRL",
                showVendor: false,
                discountMode: "percentage",
                currencyCodeEnabled: false,
                searchMode: "product,article,collection",
                searchUnavailableProducts: "last",
                cartType: "drawer",
                cartCurrency: "BRL",
                mobileZoomFactor: 2.5
            },

            routes: {
                host: "debugstyle.com",
                rootUrl: "\/",
                rootUrlWithoutSlash: '',
                cartUrl: "\/cart",
                cartAddUrl: "\/cart\/add",
                cartChangeUrl: "\/cart\/change",
                searchUrl: "\/search",
                predictiveSearchUrl: "\/search\/suggest",
                productRecommendationsUrl: "\/recommendations\/products"
            },

            strings: {
                accessibilityDelete: "Deletar",
                accessibilityClose: "Fechar",
                collectionSoldOut: "Esgotado",
                collectionDiscount: "- @savings@",
                productSalePrice: "Preço promocional",
                productRegularPrice: "Preço normal",
                productFormUnavailable: "Indisponível",
                productFormSoldOut: "Esgotado",
                productFormPreOrder: "Pré-compra",
                productFormAddToCart: "Adicionar à sacola",
                searchNoResults: "Nenhum resultado foi encontrado.",
                searchNewSearch: "Nova pesquisa",
                searchProducts: "Produtos",
                searchArticles: "Blog",
                searchPages: "Páginas",
                searchCollections: "Coleções",
                cartViewCart: "Ver carrinho",
                cartItemAdded: "Item adicionado ao carrinho!",
                cartItemAddedShort: "Adicionado ao carrinho!",
                cartAddOrderNote: "Adicionar observações",
                cartEditOrderNote: "Editar observações",
                shippingEstimatorNoResults: "Desculpe, não enviamos para seu endereço.",
                shippingEstimatorOneResult: "Temos uma opção de frete para seu endereço:",
                shippingEstimatorMultipleResults: "Temos diversas opções de frete para o seu endereço:",
                shippingEstimatorError: "Um ou mais erros ocorreram ao calcular o frete:"
            },

            libs: {
                flickity: "\/\/debugstyle.com\/cdn\/shop\/t\/10\/assets\/flickity.js?v=4101124369061427901699758872",
                photoswipe: "\/\/debugstyle.com\/cdn\/shop\/t\/10\/assets\/photoswipe.js?v=132268647426145925301699758872",
                qrCode: "\/\/debugstyle.com\/cdn\/shopifycloud\/shopify\/assets\/themes_support\/vendor\/qrcode-83ced323738e20d8fa253cebfacec51a3ad103d8bfeb275d3d312d29490f9265.js"
            },

            breakpoints: {
                phone: 'screen and (max-width: 740px)',
                tablet: 'screen and (min-width: 741px) and (max-width: 999px)',
                tabletAndUp: 'screen and (min-width: 741px)',
                pocket: 'screen and (max-width: 999px)',
                lap: 'screen and (min-width: 1000px) and (max-width: 1199px)',
                lapAndUp: 'screen and (min-width: 1000px)',
                desktop: 'screen and (min-width: 1200px)',
                wide: 'screen and (min-width: 1400px)'
            }
        };

        window.addEventListener('pageshow', async () => {
            const cartContent = await (await fetch(`${window.themeVariables.routes.cartUrl}.js`, { cache: 'reload' })).json();
            document.documentElement.dispatchEvent(new CustomEvent('cart:refresh', { detail: { cart: cartContent } }));
        });

        if ('noModule' in HTMLScriptElement.prototype) {
            // Old browsers (like IE) that does not support module will be considered as if not executing JS at all
            document.documentElement.className = document.documentElement.className.replace('no-js', 'js');

            requestAnimationFrame(() => {
                const viewportHeight = (window.visualViewport ? window.visualViewport.height : document.documentElement.clientHeight);
                document.documentElement.style.setProperty('--window-height', viewportHeight + 'px');
            });
        }// We save the product ID in local storage to be eventually used for recently viewed section
        try {
            const items = JSON.parse(localStorage.getItem('theme:recently-viewed-products') || '[]');

            // We check if the current product already exists, and if it does not, we add it at the start
            if (!items.includes(8953098567981)) {
                items.unshift(8953098567981);
            }

            localStorage.setItem('theme:recently-viewed-products', JSON.stringify(items.slice(0, 20)));
        } catch (e) {
            // Safari in private mode does not allow setting item, we silently fail
        }</script>

    <link rel="stylesheet" href="../cdn/shop/t/10/assets/theme.mina7c8.css?v=76816455619470937531699758872">

    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../cdn/shop/t/10/assets/vendorf680.js?v=162644391628613446311699758872" defer></script>
    <script src="../cdn/shop/t/10/assets/theme.mind833.js?v=145946009022533673601699758872" defer></script>
    <script src="../cdn/shop/t/10/assets/custom2f5b.js?v=165930397078196874451699758872" defer></script>

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/82729074989/digital_wallets/dialog">
    <meta name="shopify-checkout-api-token" content="0a294cad83eda6ccfb45876dd365dcb4">
    <meta id="in-context-paypal-metadata" data-shop-id="82729074989" data-venmo-supported="false"
        data-environment="production" data-locale="pt_BR" data-paypal-v4="true" data-currency="BRL">
    <link rel="alternate" type="application/json+oembed" href="camiseta-assembly.oembed">
    <script async="async" src="../checkouts/internal/preloads4c33.js?locale=pt-BR"></script>
    <script async="async" src="../../shop.app/checkouts/internal/preloads17e4.js?locale=pt-BR&amp;shop_id=82729074989"
        crossorigin="anonymous"></script>
    <script id="shopify-features"
        type="application/json">{"accessToken":"0a294cad83eda6ccfb45876dd365dcb4","betas":["rich-media-storefront-analytics"],"domain":"debugstyle.com","predictiveSearch":true,"shopId":82729074989,"smart_payment_buttons_url":"https:\/\/debugstyle.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.pt-br.js","dynamic_checkout_cart_url":"https:\/\/debugstyle.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.pt-br.js","locale":"pt-br"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "a452ab-2.myshopify.com";
        Shopify.locale = "pt-BR";
        Shopify.currency = { "active": "BRL", "rate": "1.0" };
        Shopify.country = "BR";
        Shopify.theme = { "name": "[BACKUP] [2024-04-04] Vision", "id": 162954969389, "theme_store_id": null, "role": "main" };
        Shopify.theme.handle = "null";
        Shopify.theme.style = { "id": null, "handle": null };
        Shopify.cdnHost = "debugstyle.com/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "../";</script>
    <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
    <script>!function (o) { function n() { var o = []; function n() { o.push(Array.prototype.slice.apply(arguments)) } return n.q = o, n } var t = o.Shopify = o.Shopify || {}; t.loadFeatures = n(), t.autoloadFeatures = n() }(window);</script>
    <script id="shop-js-features" type="application/json">{"compact":""}</script>
    <script id="shop-js-analytics" type="application/json">{"pageType":"product"}</script>
    <script>(function () {
            function asyncLoad() {
                var urls = ["https:\/\/cdn.ryviu.com\/v\/static\/js\/app.js?shop=a452ab-2.myshopify.com", "https:\/\/storage.googleapis.com\/gsf-scripts\/global-remarketing\/a452ab-2.js?1713641938\u0026shop=a452ab-2.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if (window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();</script>
    <script
        id="__st">var __st = { "a": 82729074989, "offset": -10800, "reqid": "883983b1-36a8-4f54-adc9-0969abbe6bbc-1716859353", "pageurl": "debugstyle.com\/products\/camiseta-assembly", "u": "9a4c19582541", "p": "product", "rtyp": "product", "rid": 8953098567981 };</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script
        id="captcha-bootstrap">!function () { 'use strict'; const e = 'contact', t = 'account', n = 'new_comment', o = e => e.map((([e, t]) => `form[action*='/${e}'] input[name='form_type'][value='${t}']`)).join(','); function c(e, t) { try { const n = window.sessionStorage; for (const [o, c] of Object.entries(JSON.parse(n.getItem(t)))) e.elements[o] && (e.elements[o].value = c); n.removeItem(t) } catch { } } const s = 'form_type', r = 'cptcha'; ((a, i, m, f, u, d) => { if (0) return; let l = !1; a[m] = a[m] || {}, a[m][f] = a[m][f] || {}, a[m][f].q = [], function (a, i, m, f, u, d) { const [l, _, p] = function (c, s, r) { const a = s ? [[e, e], ['blogs', n], ['comments', n], [e, 'customer']] : [], i = c ? [[t, 'customer_login'], [t, 'guest_login'], [t, 'recover_customer_password'], [t, 'create_customer']] : [], m = [...a, ...i], f = o(m), u = o(a.slice(0, 3)), d = r && o(m.filter((([e, t]) => r.includes(t)))), l = e => () => e ? [...document.querySelectorAll(e)].map((e => e.form)) : []; return [l(f), l(u), l(d)] }(!0, !0, d), E = e => { const t = e.target, n = t instanceof HTMLFormElement ? t : t && t.form; return n && l().find((e => n === e)) }; a.addEventListener('submit', (e => { E(e) && e.preventDefault() })); const T = (e, t) => { m(e, t.some((t => t === e))), e.dataset[r] = !0 }; for (const e of ['focusin', 'change']) a.addEventListener(e, (e => { const t = E(e); t && !t.dataset[r] && T(t, _()) })); const g = i.get('form_key'), v = i.get(s), h = g && v, y = d && d.length; (y || h) && a.addEventListener('DOMContentLoaded', (() => { const e = _(); if (h) for (const t of e) t.elements[s].value === v && c(t, g); if (y) for (const t of p()) T(t, e) })) }(i, new URLSearchParams(a.location.search), ((e, t) => { const n = a[m][f], o = n.bindForm, c = '6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey', s = { infoText: '', privacyText: '', termsText: '' }; if (o) return o(e, c, t, s); n.q.push([e, c, t, s]), l || (i.body.append(Object.assign(i.createElement('script'), { id: 'captcha-provider', async: !0, src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_recaptcha.v1.0.5.iife.js' })), l = !0) }), 0, 0, ['guest_login']) })(window, document, 'Shopify', 'ce_forms') }();</script>
    <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY="
        data-source-attribution="shopify.loadfeatures" defer="defer"
        src="../cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js"
        crossorigin="anonymous"></script>
    <script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8="
        data-source-attribution="shopify.dynamic-checkout" defer="defer"
        src="../cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js"
        crossorigin="anonymous"></script>


    <style id="shopify-dynamic-checkout-cart">
        @media screen and (min-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 50px;
            }
        }

        @media screen and (max-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 60px;
            }
        }
    </style>
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>












    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/82729074989/digital_wallets/dialog">
    <meta name="shopify-checkout-api-token" content="0a294cad83eda6ccfb45876dd365dcb4">
    <meta id="in-context-paypal-metadata" data-shop-id="82729074989" data-venmo-supported="false"
        data-environment="production" data-locale="pt_BR" data-paypal-v4="true" data-currency="BRL">
    <link rel="alternate" type="application/json+oembed" href="camiseta-assembly.oembed">
    <script async="async" data-src="/checkouts/internal/preloads.js?locale=pt-BR"></script>
    <script async="async" data-src="https://shop.app/checkouts/internal/preloads.js?locale=pt-BR&shop_id=82729074989"
        crossorigin="anonymous"></script>
    <script id="shopify-features"
        type="application/json">{"accessToken":"0a294cad83eda6ccfb45876dd365dcb4","betas":["rich-media-storefront-analytics"],"domain":"debugstyle.com","predictiveSearch":true,"shopId":82729074989,"smart_payment_buttons_url":"https:\/\/debugstyle.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.pt-br.js","dynamic_checkout_cart_url":"https:\/\/debugstyle.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.pt-br.js","locale":"pt-br"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "a452ab-2.myshopify.com";
        Shopify.locale = "pt-BR";
        Shopify.currency = { "active": "BRL", "rate": "1.0" };
        Shopify.country = "BR";
        Shopify.theme = { "name": "[BACKUP] [2024-04-04] Vision", "id": 162954969389, "theme_store_id": null, "role": "main" };
        Shopify.theme.handle = "null";
        Shopify.theme.style = { "id": null, "handle": null };
        Shopify.cdnHost = "debugstyle.com/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "../";</script>
    <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
    <script>!function (o) { function n() { var o = []; function n() { o.push(Array.prototype.slice.apply(arguments)) } return n.q = o, n } var t = o.Shopify = o.Shopify || {}; t.loadFeatures = n(), t.autoloadFeatures = n() }(window);</script>
    <script id="shop-js-features" type="application/json">{"compact":""}</script>
    <script id="shop-js-analytics" type="application/json">{"pageType":"product"}</script>
    <script>(function () {
            function asyncLoad() {
                var urls = ["https:\/\/cdn.ryviu.com\/v\/static\/js\/app.js?shop=a452ab-2.myshopify.com", "https:\/\/storage.googleapis.com\/gsf-scripts\/global-remarketing\/a452ab-2.js?1713641938\u0026shop=a452ab-2.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            document.addEventListener('StartAsyncLoading', function (event) { asyncLoad(); }); if (window.attachEvent) {
                window.attachEvent('onload', function () { });
            } else {
                window.addEventListener('load', function () { }, false);
            }
        })();</script>
    <script
        id="__st">var __st = { "a": 82729074989, "offset": -10800, "reqid": "883983b1-36a8-4f54-adc9-0969abbe6bbc-1716859353", "pageurl": "debugstyle.com\/products\/camiseta-assembly", "u": "9a4c19582541", "p": "product", "rtyp": "product", "rid": 8953098567981 };</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script
        id="captcha-bootstrap">!function () { 'use strict'; const e = 'contact', t = 'account', n = 'new_comment', o = e => e.map((([e, t]) => `form[action*='/${e}'] input[name='form_type'][value='${t}']`)).join(','); function c(e, t) { try { const n = window.sessionStorage; for (const [o, c] of Object.entries(JSON.parse(n.getItem(t)))) e.elements[o] && (e.elements[o].value = c); n.removeItem(t) } catch { } } const s = 'form_type', r = 'cptcha'; ((a, i, m, f, u, d) => { if (0) return; let l = !1; a[m] = a[m] || {}, a[m][f] = a[m][f] || {}, a[m][f].q = [], function (a, i, m, f, u, d) { const [l, _, p] = function (c, s, r) { const a = s ? [[e, e], ['blogs', n], ['comments', n], [e, 'customer']] : [], i = c ? [[t, 'customer_login'], [t, 'guest_login'], [t, 'recover_customer_password'], [t, 'create_customer']] : [], m = [...a, ...i], f = o(m), u = o(a.slice(0, 3)), d = r && o(m.filter((([e, t]) => r.includes(t)))), l = e => () => e ? [...document.querySelectorAll(e)].map((e => e.form)) : []; return [l(f), l(u), l(d)] }(!0, !0, d), E = e => { const t = e.target, n = t instanceof HTMLFormElement ? t : t && t.form; return n && l().find((e => n === e)) }; a.addEventListener('submit', (e => { E(e) && e.preventDefault() })); const T = (e, t) => { m(e, t.some((t => t === e))), e.dataset[r] = !0 }; for (const e of ['focusin', 'change']) a.addEventListener(e, (e => { const t = E(e); t && !t.dataset[r] && T(t, _()) })); const g = i.get('form_key'), v = i.get(s), h = g && v, y = d && d.length; (y || h) && a.addEventListener('DOMContentLoaded', (() => { const e = _(); if (h) for (const t of e) t.elements[s].value === v && c(t, g); if (y) for (const t of p()) T(t, e) })) }(i, new URLSearchParams(a.location.search), ((e, t) => { const n = a[m][f], o = n.bindForm, c = '6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey', s = { infoText: '', privacyText: '', termsText: '' }; if (o) return o(e, c, t, s); n.q.push([e, c, t, s]), l || (i.body.append(Object.assign(i.createElement('script'), { id: 'captcha-provider', async: !0, src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_recaptcha.v1.0.5.iife.js' })), l = !0) }), 0, 0, ['guest_login']) })(window, document, 'Shopify', 'ce_forms') }();</script>
    <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY="
        data-source-attribution="shopify.loadfeatures" defer="defer"
        data-src="//debugstyle.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js"
        crossorigin="anonymous"></script>
    <script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8="
        data-source-attribution="shopify.dynamic-checkout" defer="defer"
        data-src="//debugstyle.com/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js"
        crossorigin="anonymous"></script>
    <!-- placeholder 0d4201f02fe791d3 -->
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <img loading="eager" width="99999" height="99999" alt="visionlcphack"
        style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;"
        src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+">



    <!-- Areviews coleção -->



    <!-- Areviews coleção -->


    <script>




        var gsf_conversion_data = { page_type: 'product', event: 'view_item', data: { product_data: [{ variant_id: 47448003641645, product_id: 8953098567981, name: "<?php echo $nome; ?>", price: "89.90", currency: "BRL", sku: "006288304001-579873", brand: "Debug Style", variant: "Masculino / Preta / P", category: "CAAS01 - <?php echo $nome; ?>", quantity: "614" }], total_price: "89.90", shop_currency: "BRL" } };

    </script>
    <!-- BEGIN app block: shopify://apps/ryviu-product-reviews-qa/blocks/ryviu-js/807ad6ed-1a6a-4559-abea-ed062858d9da --><!-- RYVIU APP :: Settings global 2-->
    <script> var ryviu_global_settings = { "pt": "{\"review_widget\":{\"reviewTotalText\":\"Avalia\u00e7\u00e3o\",\"reviewTotalTexts\":\"Avalia\u00e7\u00f5es\",\"reviewText\":\"Avalia\u00e7\u00e3o\",\"reviewsText\":\"Avalia\u00e7\u00f5es\",\"titleWrite\":\"Escreva um coment\u00e1rio\",\"titleCustomer\":\"Avalia\u00e7\u00f5es de clientes\",\"tstar5\":\"Excelente\",\"tstar4\":\"Boa\",\"tstar3\":\"M\u00e9dia\",\"tstar2\":\"Ruim\",\"tstar1\":\"Terr\u00edvel\",\"emptyDescription\":\"N\u00e3o h\u00e1 avalia\u00e7\u00f5es.\",\"noticeWriteFirst\":\"Seja o primeiro a\",\"filter_review\":\"Filtrar\",\"filter_photo\":\"Com fotos\",\"filter_replies\":\"Com respostas\",\"sortbyText\":\"Ordenar por\",\"latestText\":\"\u00daltimas\",\"oldestText\":\"Mais antigo\",\"imagesSortText\":\"Imagens\",\"defaultSortText\":\"Padr\u00e3o\",\"clearText\":\"Todos\",\"mostLikeSortText\":\"Mais curtidas\",\"showingText\":\"Mostrando\",\"ofText\":\"De\",\"byText\":\"Por\",\"customerPhotos\":\"Fotos do cliente\",\"average\":\"M\u00e9dia\",\"replyText\":\"Resposta\",\"repliesText\":\"Respostas\",\"hasOnly\":\"Tem um\",\"textVerified\":\"Comprador verificado\",\"ryplyText\":\"Coment\u00e1rios\",\"helpulText\":\"Isso \u00e9 \u00fatil?\",\"clear_all\":\"Limpar tudo\",\"filter_list\":\"Filtrar\",\"starsText\":\"Estrelas\",\"starText\":\"Estrela\",\"submitDoneText\":\"Sua avalia\u00e7\u00e3o foi enviada.\",\"submitErrorText\":\"N\u00e3o \u00e9 poss\u00edvel enviar sua avalia\u00e7\u00e3o.\",\"textNotFound\":\"Nenhum resultado encontrado.\",\"thankYou\":\"Obrigado!\",\"loadMore\":\"Carregar mais\",\"seeLess\":\"Ver menos\",\"seeMore\":\"Ver mais\"},\"form\":{\"titleForm\":\"Avalie-nos\",\"titleFormReviewEmail\":\"Deixe um feedback\",\"titleWriteEmailForm\":\"Avalia\u00e7\u00e3o\",\"required\":\"Insira os campos obrigat\u00f3rios\",\"qualityText\":\"Qualidade*\",\"titleName\":\"Seu nome\",\"placeholderName\":\"Espa\u00e7o reservado para nome de campo de texto\",\"titleEmail\":\"Seu e-mail*\",\"placeholderEmail\":\"Espa\u00e7o reservado para e-mail para campo de texto\",\"titleSubject\":\"T\u00edtulo da avalia\u00e7\u00e3o\",\"placeholderSubject\":\"Espa\u00e7o reservado para t\u00edtulo do campo de texto\",\"titleMessenger\":\"Revisar o conte\u00fado\",\"placeholderMessenger\":\"Espa\u00e7o reservado para conte\u00fado do campo de texto\",\"addPhotos\":\"Carregar fotos\",\"acceptFile\":\"Aceita .jpg, .png e no m\u00e1ximo 2 MB cada\",\"titleSubmit\":\"Envie sua avalia\u00e7\u00e3o\",\"productNotFound\":\"N\u00e3o encontrado\",\"titleReply\":\"Respostas\",\"titleReplyWrite\":\"Escreva uma resposta\",\"titleComment\":\"Comente\",\"placeholderCommentMessenger\":\"Escreva alguma coisa\",\"buttonReply\":\"Enviar\",\"buttonCancelReply\":\"Cancelar\",\"commentButton\":\"Comentar\",\"replyIsunderReivew\":\"Sua resposta est\u00e1 sendo analisada.\",\"errorSentReply\":\"N\u00e3o \u00e9 poss\u00edvel enviar sua resposta.\"},\"questions\":{\"see_all\":\"Veja tudo\",\"titleCustomer\":\"Avalia\u00e7\u00f5es de clientes\",\"by_text\":\"Pergunte por\",\"on_text\":\"sobre\",\"answer_text\":\"Responda \u00e0 pergunta\",\"no_question\":\"Sem d\u00favida\",\"no_searched\":\"Nenhuma pergunta encontrada\",\"shop_owner\":\"Dono da loja\",\"input_text\":\"Tem uma pergunta? Procure respostas\",\"community_text\":\"N\u00e3o v\u00ea o que voc\u00ea est\u00e1 procurando?\",\"ask_community_text\":\"Pergunte \u00e0 comunidade\",\"showing_text\":\"Mostrando\",\"of_text\":\"do\",\"questions_text\":\"perguntas\",\"question_text\":\"quest\u00e3o\",\"newest_text\":\"Mais recente\",\"helpful_text\":\"Mais \u00fatil\",\"title_form\":\"N\u00e3o v\u00ea o que voc\u00ea est\u00e1 procurando?\",\"des_form\":\"Deixe uma pergunta pergunte \u00e0 comunidade do formul\u00e1rio de ajuda!\",\"send_question_success\":\"Sua pergunta enviada\",\"send_question_error\":\"Sua pergunta n\u00e3o pode ser enviada\",\"name_form\":\"Seu nome\",\"placeholderName\":\"John Smith\",\"answered_question_text\":\"pergunta respondida\",\"answered_questions_text\":\"perguntas respondidas\",\"question_error_fill\":\"Por favor, preencha todos os campos antes de enviar sua resposta.\",\"title_answer_form\":\"Responda \u00e0 pergunta\",\"send_reply_success\":\"Sua resposta foi enviada ao dono da loja.\",\"send_reply_error\":\"Sua resposta n\u00e3o pode ser enviada\",\"question_answer_form\":\"Pergunta\",\"answer_form\":\"Sua resposta\",\"placeholder_answer_form\":\"Sua resposta \u00e9 obrigat\u00f3ria\",\"email_form\":\"Seu e-mail\",\"placeholderEmail\":\"example@yourdomain.com\",\"question_form\":\"Sua pergunta\",\"placeholder_question_form\":\"A pergunta \u00e9 um campo obrigat\u00f3rio!\",\"answer_error_fill\":\"Por favor, preencha todos os campos antes de enviar sua resposta.\",\"submit_answer_form\":\"Enviar resposta\",\"submit_form\":\"Envie uma pergunta\",\"totalAnswers\":\"Total\",\"answersText\":\"respostas\",\"answerText\":\"resposta\",\"voteText\":\"votar\",\"votesText\":\"vota\",\"sort_by\":\"Ordenar por\",\"no_answer\":\"Sem resposta\"}}", "form": { "required": "Insira os campos obrigat\u00f3rios", "addPhotos": "Carregar fotos", "showTitle": true, "titleForm": "Avalie-nos", "titleName": "Seu nome", "acceptFile": "Aceita .jpg, .png e no m\u00e1ximo 2 MB cada", "colorInput": "#464646", "colorTitle": "#696969", "noticeName": "Your name is required field", "titleEmail": "Seu e-mail*", "titleReply": "Respostas", "autoPublish": true, "buttonReply": "Enviar", "colorNotice": "#dd2c00", "colorSubmit": "#ffffff", "noticeEmail": "Your email is required and valid email", "qualityText": "Qualidade*", "titleSubmit": "Envie sua avalia\u00e7\u00e3o", "titleComment": "Comente", "titleSubject": "T\u00edtulo da avalia\u00e7\u00e3o", "titleSuccess": "Thank you! Your review is submited.", "colorStarForm": "#ececec", "commentButton": "Comentar", "noticeSubject": "Title is required field", "showtitleForm": true, "errorSentReply": "N\u00e3o \u00e9 poss\u00edvel enviar sua resposta.", "titleMessenger": "Revisar o conte\u00fado", "noticeMessenger": "Your review is required field", "placeholderName": "Espa\u00e7o reservado para nome de campo de texto", "productNotFound": "N\u00e3o encontrado", "starActivecolor": "#fdbc00", "titleReplyWrite": "Escreva uma resposta", "backgroundSubmit": "#00aeef", "placeholderEmail": "Espa\u00e7o reservado para e-mail para campo de texto", "buttonCancelReply": "Cancelar", "placeholderSubject": "Espa\u00e7o reservado para t\u00edtulo do campo de texto", "replyIsunderReivew": "Sua resposta est\u00e1 sendo analisada.", "titleWriteEmailForm": "Avalia\u00e7\u00e3o", "placeholderMessenger": "Espa\u00e7o reservado para conte\u00fado do campo de texto", "titleFormReviewEmail": "Deixe um feedback", "loadAfterContentLoaded": true, "placeholderCommentMessenger": "Escreva alguma coisa" }, "questions": { "by_text": "Author", "of_text": "of", "on_text": "am", "des_form": "Ask a question to the community here", "name_form": "Your Name", "email_form": "Your E-Mail Adresse", "input_text": "Have a question? Search for answers", "title_form": "No answer found?", "answer_form": "Your answers", "answer_text": "Answer question", "newest_text": "Latest New", "notice_form": "Complete before submitting", "submit_form": "Send a question", "helpful_text": "Most helpful", "showing_text": "Show", "question_form": "Your question", "titleCustomer": "", "community_text": "Ask the community here", "questions_text": "questions", "title_answer_form": "Answer question", "ask_community_text": "Ask the community", "submit_answer_form": "Send a reply", "write_question_text": "Ask a question", "question_answer_form": "Question", "placeholder_answer_form": "Answer is a required field!", "placeholder_question_form": "Question is a required field!" }, "targetLang": "pt", "review_widget": { "star": 1, "style": "style2", "title": true, "byText": "Por", "ofText": "De", "tstar1": "Terr\u00edvel", "tstar2": "Ruim", "tstar3": "M\u00e9dia", "tstar4": "Boa", "tstar5": "Excelente", "average": "M\u00e9dia", "hasOnly": "Tem um", "nostars": false, "nowrite": false, "seeLess": "Ver menos", "seeMore": "Ver mais", "hideFlag": false, "hidedate": false, "loadMore": "Carregar mais", "noavatar": false, "noreview": true, "order_by": "late", "showText": "Show:", "showspam": true, "starText": "Estrela", "thankYou": "Obrigado!", "clearText": "Todos", "clear_all": "Limpar tudo", "noReviews": "No reviews", "outofText": "out of", "random_to": 20, "replyText": "Resposta", "ryplyText": "Coment\u00e1rios", "starStyle": "style1", "starcolor": "#e6e6e6", "starsText": "Estrelas", "colorTitle": "#6c8187", "colorWrite": "#ffffff", "customDate": "dd\/MM\/yy", "dateSelect": "dateDefaut", "helpulText": "Isso \u00e9 \u00fatil?", "latestText": "\u00daltimas", "nolastname": false, "oldestText": "Mais antigo", "paddingTop": "0", "reviewText": "Avalia\u00e7\u00e3o", "sortbyText": "Ordenar por", "starHeight": 13, "titleWrite": "Escreva um coment\u00e1rio", "borderColor": "#ffffff", "borderStyle": "solid", "borderWidth": "0", "colorAvatar": "#f8f8f8", "filter_list": "Filtrar", "firstReview": "Write a first review now", "paddingLeft": "0", "random_from": 0, "repliesText": "Respostas", "reviewsText": "Avalia\u00e7\u00f5es", "showingText": "Mostrando", "disableReply": true, "filter_photo": "Com fotos", "paddingRight": "0", "payment_type": "Monthly", "textNotFound": "Nenhum resultado encontrado.", "textVerified": "Comprador verificado", "colorVerified": "#05d92d", "disableHelpul": false, "disableWidget": false, "filter_review": "Filtrar", "paddingBottom": "0", "titleCustomer": "Avalia\u00e7\u00f5es de clientes", "customerPhotos": "Fotos do cliente", "filter_replies": "Com respostas", "filter_reviews": "all", "imagesSortText": "Imagens", "submitDoneText": "Sua avalia\u00e7\u00e3o foi enviada.", "backgroundRyviu": "transparent", "backgroundWrite": "#ffb102", "defaultSortText": "Padr\u00e3o", "disablePurchase": false, "reviewTotalText": "Avalia\u00e7\u00e3o", "starActiveStyle": "style1", "starActivecolor": "#fdbc00", "submitErrorText": "N\u00e3o \u00e9 poss\u00edvel enviar sua avalia\u00e7\u00e3o.", "emptyDescription": "N\u00e3o h\u00e1 avalia\u00e7\u00f5es.", "mostLikeSortText": "Mais curtidas", "noticeWriteFirst": "Seja o primeiro a", "reviewTotalTexts": "Avalia\u00e7\u00f5es", "show_title_customer": false, "filter_reviews_local": "US" }, "design_settings": { "date": "timeago", "sort": "late", "showing": 30, "url_shop": "debugstyle.com", "colection": true, "no_number": false, "no_review": true, "defautDate": "timeago", "defaultDate": "timeago", "client_theme": "default", "verify_reply": true, "verify_review": true, "reviews_per_page": "10", "aimgs": false } };</script>
    <!-- RYVIU APP -->
    <!-- END app app block -->
    <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
    <script>(function () { if ("sendBeacon" in navigator && "performance" in window) { var session_token = document.cookie.match(/_shopify_s=([^;]*)/); function handle_abandonment_event(e) { var entries = performance.getEntries().filter(function (entry) { return /monorail-edge.shopifysvc.com/.test(entry.name); }); if (!window.abandonment_tracked && entries.length === 0) { window.abandonment_tracked = true; var currentMs = Date.now(); var navigation_start = performance.timing.navigationStart; var payload = { shop_id: 82729074989, url: window.location.href, navigation_start, duration: currentMs - navigation_start, session_token: session_token && session_token.length === 2 ? session_token[1] : "", page_type: "product" }; window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({ schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: { event_created_at_ms: currentMs, event_sent_at_ms: currentMs } })); } } window.addEventListener('pagehide', handle_abandonment_event); } }());</script>
    <script
        id="web-pixels-manager-setup">(function e(e, n, a, t, r) { var o = "function" == typeof BigInt && -1 !== BigInt.toString().indexOf("[native code]") ? "modern" : "legacy"; window.Shopify = window.Shopify || {}; var i = window.Shopify; i.analytics = i.analytics || {}; var s = i.analytics; s.replayQueue = [], s.publish = function (e, n, a) { return s.replayQueue.push([e, n, a]), !0 }; try { self.performance.mark("wpm:start") } catch (e) { } var l = [a, "/wpm", "/b", r, o.substring(0, 1), ".js"].join(""); !function (e) { var n = e.src, a = e.async, t = void 0 === a || a, r = e.onload, o = e.onerror, i = document.createElement("script"), s = document.head, l = document.body; i.async = t, i.src = n, r && i.addEventListener("load", r), o && i.addEventListener("error", o), s ? s.appendChild(i) : l ? l.appendChild(i) : console.error("Did not find a head or body element to append the script") }({ src: l, async: !0, onload: function () { var a = window.webPixelsManager.init(e); n(a); var t = window.Shopify.analytics; t.replayQueue.forEach((function (e) { var n = e[0], t = e[1], r = e[2]; a.publishCustomEvent(n, t, r) })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor }, onerror: function () { var n = e.storefrontBaseUrl.replace(/\/$/, ""), a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"), r = JSON.stringify({ metadata: { event_sent_at_ms: (new Date).getTime() }, events: [{ schema_id: "web_pixels_manager_load/2.0", payload: { version: t || "latest", page_url: self.location.href, status: "failed", error_msg: "".concat(l, " has failed to load") }, metadata: { event_created_at_ms: (new Date).getTime() } }] }); try { if (self.navigator.sendBeacon.bind(self.navigator)(a, r)) return !0 } catch (e) { } var o = new XMLHttpRequest; try { return o.open("POST.html", a, !0), o.setRequestHeader("Content-Type", "text/plain"), o.send(r), !0 } catch (e) { console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.") } return !1 } }) })({ shopId: 82729074989, storefrontBaseUrl: "https://debugstyle.com", extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager", surface: "storefront-renderer", enabledBetaFlags: ["5de24938", "3b4293f9"], webPixelsConfigList: [{ "id": "shopify-app-pixel", "configuration": "{}", "eventPayloadVersion": "v1", "runtimeContext": "STRICT", "scriptVersion": "090", "apiClientId": "shopify-pixel", "type": "APP", "purposes": ["ANALYTICS", "MARKETING"] }, { "id": "shopify-custom-pixel", "eventPayloadVersion": "v1", "runtimeContext": "LAX", "scriptVersion": "090", "apiClientId": "shopify-pixel", "type": "CUSTOM", "purposes": ["ANALYTICS", "MARKETING"] }], initData: { "cart": null, "checkout": null, "customer": null, "productVariants": [{ "id": "47448003641645", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304001-579873", "title": "Masculino \/ Preta \/ P", "untranslatedTitle": "Masculino \/ Preta \/ P" }, { "id": "47448004067629", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304002-579873", "title": "Masculino \/ Preta \/ M", "untranslatedTitle": "Masculino \/ Preta \/ M" }, { "id": "47448004329773", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304003-579873", "title": "Masculino \/ Preta \/ G", "untranslatedTitle": "Masculino \/ Preta \/ G" }, { "id": "47448004821293", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304004-579873", "title": "Masculino \/ Preta \/ GG", "untranslatedTitle": "Masculino \/ Preta \/ GG" }, { "id": "47448004952365", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304005-579873", "title": "Masculino \/ Preta \/ 3G", "untranslatedTitle": "Masculino \/ Preta \/ 3G" }, { "id": "48424467956013", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304006-579873", "title": "Masculino \/ Preta \/ 4G", "untranslatedTitle": "Masculino \/ Preta \/ 4G" }, { "id": "47448003510573", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b16a4fd50e7ef308d55548638d092a.jpg?v=1710905799" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305101-579873", "title": "Masculino \/ Verde \/ P", "untranslatedTitle": "Masculino \/ Verde \/ P" }, { "id": "47448004034861", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b16a4fd50e7ef308d55548638d092a.jpg?v=1710905799" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305102-579873", "title": "Masculino \/ Verde \/ M", "untranslatedTitle": "Masculino \/ Verde \/ M" }, { "id": "47448004395309", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b16a4fd50e7ef308d55548638d092a.jpg?v=1710905799" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305103-579873", "title": "Masculino \/ Verde \/ G", "untranslatedTitle": "Masculino \/ Verde \/ G" }, { "id": "47448004788525", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b16a4fd50e7ef308d55548638d092a.jpg?v=1710905799" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305104-579873", "title": "Masculino \/ Verde \/ GG", "untranslatedTitle": "Masculino \/ Verde \/ GG" }, { "id": "47448005312813", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b16a4fd50e7ef308d55548638d092a.jpg?v=1710905799" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305105-579873", "title": "Masculino \/ Verde \/ 3G", "untranslatedTitle": "Masculino \/ Verde \/ 3G" }, { "id": "48424467988781", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b16a4fd50e7ef308d55548638d092a.jpg?v=1710905799" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305106-579873", "title": "Masculino \/ Verde \/ 4G", "untranslatedTitle": "Masculino \/ Verde \/ 4G" }, { "id": "47448003412269", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/fce0438511482a8c9611dced2cb0aa2c.jpg?v=1710905802" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288331201-579873", "title": "Masculino \/ Marinho \/ P", "untranslatedTitle": "Masculino \/ Marinho \/ P" }, { "id": "47448004002093", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/fce0438511482a8c9611dced2cb0aa2c.jpg?v=1710905802" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288331202-579873", "title": "Masculino \/ Marinho \/ M", "untranslatedTitle": "Masculino \/ Marinho \/ M" }, { "id": "47448004493613", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/fce0438511482a8c9611dced2cb0aa2c.jpg?v=1710905802" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288331203-579873", "title": "Masculino \/ Marinho \/ G", "untranslatedTitle": "Masculino \/ Marinho \/ G" }, { "id": "47448004526381", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/fce0438511482a8c9611dced2cb0aa2c.jpg?v=1710905802" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288331204-579873", "title": "Masculino \/ Marinho \/ GG", "untranslatedTitle": "Masculino \/ Marinho \/ GG" }, { "id": "47448005247277", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/fce0438511482a8c9611dced2cb0aa2c.jpg?v=1710905802" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288331205-579873", "title": "Masculino \/ Marinho \/ 3G", "untranslatedTitle": "Masculino \/ Marinho \/ 3G" }, { "id": "48064846790957", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/fce0438511482a8c9611dced2cb0aa2c.jpg?v=1710905802" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288331206-579873", "title": "Masculino \/ Marinho \/ 4G", "untranslatedTitle": "Masculino \/ Marinho \/ 4G" }, { "id": "47448003477805", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/60630a8e4274c340cffa429cc6059e2a.jpg?v=1710905804" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288302401-579873", "title": "Masculino \/ Cinza \/ P", "untranslatedTitle": "Masculino \/ Cinza \/ P" }, { "id": "47448003969325", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/60630a8e4274c340cffa429cc6059e2a.jpg?v=1710905804" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288302402-579873", "title": "Masculino \/ Cinza \/ M", "untranslatedTitle": "Masculino \/ Cinza \/ M" }, { "id": "47448004362541", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/60630a8e4274c340cffa429cc6059e2a.jpg?v=1710905804" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288302403-579873", "title": "Masculino \/ Cinza \/ G", "untranslatedTitle": "Masculino \/ Cinza \/ G" }, { "id": "47448004919597", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/60630a8e4274c340cffa429cc6059e2a.jpg?v=1710905804" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288302404-579873", "title": "Masculino \/ Cinza \/ GG", "untranslatedTitle": "Masculino \/ Cinza \/ GG" }, { "id": "47448005214509", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/60630a8e4274c340cffa429cc6059e2a.jpg?v=1710905804" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288302405-579873", "title": "Masculino \/ Cinza \/ 3G", "untranslatedTitle": "Masculino \/ Cinza \/ 3G" }, { "id": "48424468021549", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/60630a8e4274c340cffa429cc6059e2a.jpg?v=1710905804" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288302406-579873", "title": "Masculino \/ Cinza \/ 4G", "untranslatedTitle": "Masculino \/ Cinza \/ 4G" }, { "id": "47448003608877", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/74af5cf0160e2be3dc19c0cfcbfe87a0.jpg?v=1710905806" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288301401-579873", "title": "Masculino \/ Branca \/ P", "untranslatedTitle": "Masculino \/ Branca \/ P" }, { "id": "47448003903789", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/74af5cf0160e2be3dc19c0cfcbfe87a0.jpg?v=1710905806" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288301402-579873", "title": "Masculino \/ Branca \/ M", "untranslatedTitle": "Masculino \/ Branca \/ M" }, { "id": "47448004460845", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/74af5cf0160e2be3dc19c0cfcbfe87a0.jpg?v=1710905806" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288301403-579873", "title": "Masculino \/ Branca \/ G", "untranslatedTitle": "Masculino \/ Branca \/ G" }, { "id": "47448004690221", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/74af5cf0160e2be3dc19c0cfcbfe87a0.jpg?v=1710905806" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288301404-579873", "title": "Masculino \/ Branca \/ GG", "untranslatedTitle": "Masculino \/ Branca \/ GG" }, { "id": "47448005083437", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/74af5cf0160e2be3dc19c0cfcbfe87a0.jpg?v=1710905806" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288301405-579873", "title": "Masculino \/ Branca \/ 3G", "untranslatedTitle": "Masculino \/ Branca \/ 3G" }, { "id": "48424468054317", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/74af5cf0160e2be3dc19c0cfcbfe87a0.jpg?v=1710905806" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288301406-579873", "title": "Masculino \/ Branca \/ 4G", "untranslatedTitle": "Masculino \/ Branca \/ 4G" }, { "id": "47448003543341", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b9206ce850b73807ab05062a7042a0.jpg?v=1710905809" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305401-579873", "title": "Masculino \/ Vermelho \/ P", "untranslatedTitle": "Masculino \/ Vermelho \/ P" }, { "id": "47448003936557", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b9206ce850b73807ab05062a7042a0.jpg?v=1710905809" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305402-579873", "title": "Masculino \/ Vermelho \/ M", "untranslatedTitle": "Masculino \/ Vermelho \/ M" }, { "id": "47448004231469", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b9206ce850b73807ab05062a7042a0.jpg?v=1710905809" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305403-579873", "title": "Masculino \/ Vermelho \/ G", "untranslatedTitle": "Masculino \/ Vermelho \/ G" }, { "id": "47448004854061", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b9206ce850b73807ab05062a7042a0.jpg?v=1710905809" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305404-579873", "title": "Masculino \/ Vermelho \/ GG", "untranslatedTitle": "Masculino \/ Vermelho \/ GG" }, { "id": "47448005116205", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b9206ce850b73807ab05062a7042a0.jpg?v=1710905809" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305405-579873", "title": "Masculino \/ Vermelho \/ 3G", "untranslatedTitle": "Masculino \/ Vermelho \/ 3G" }, { "id": "48064846823725", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/e1b9206ce850b73807ab05062a7042a0.jpg?v=1710905809" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288305406-579873", "title": "Masculino \/ Vermelho \/ 4G", "untranslatedTitle": "Masculino \/ Vermelho \/ 4G" }, { "id": "47448003871021", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5d0a6d1dbb270bcdadfba5e88eb190f7.jpg?v=1710905812" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288404002-579873", "title": "Feminino \/ Preta \/ P", "untranslatedTitle": "Feminino \/ Preta \/ P" }, { "id": "47448004264237", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5d0a6d1dbb270bcdadfba5e88eb190f7.jpg?v=1710905812" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288404003-579873", "title": "Feminino \/ Preta \/ M", "untranslatedTitle": "Feminino \/ Preta \/ M" }, { "id": "47448004624685", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5d0a6d1dbb270bcdadfba5e88eb190f7.jpg?v=1710905812" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288404004-579873", "title": "Feminino \/ Preta \/ G", "untranslatedTitle": "Feminino \/ Preta \/ G" }, { "id": "47448005017901", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5d0a6d1dbb270bcdadfba5e88eb190f7.jpg?v=1710905812" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288404005-579873", "title": "Feminino \/ Preta \/ GG", "untranslatedTitle": "Feminino \/ Preta \/ GG" }, { "id": "48065761804589", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5d0a6d1dbb270bcdadfba5e88eb190f7.jpg?v=1710905812" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288404006-579873", "title": "Feminino \/ Preta \/ 3G", "untranslatedTitle": "Feminino \/ Preta \/ 3G" }, { "id": "47448003248429", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5d0a6d1dbb270bcdadfba5e88eb190f7.jpg?v=1710905812" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288404001-579873", "title": "Feminino \/ Preta \/ PP", "untranslatedTitle": "Feminino \/ Preta \/ PP" }, { "id": "47448003838253", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/bbc133f1e7e97196cc400f958d6dde83.jpg?v=1710905815" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405102-579873", "title": "Feminino \/ Verde \/ P", "untranslatedTitle": "Feminino \/ Verde \/ P" }, { "id": "47448004297005", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/bbc133f1e7e97196cc400f958d6dde83.jpg?v=1710905815" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405103-579873", "title": "Feminino \/ Verde \/ M", "untranslatedTitle": "Feminino \/ Verde \/ M" }, { "id": "47448004886829", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/bbc133f1e7e97196cc400f958d6dde83.jpg?v=1710905815" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405104-579873", "title": "Feminino \/ Verde \/ G", "untranslatedTitle": "Feminino \/ Verde \/ G" }, { "id": "47448005148973", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/bbc133f1e7e97196cc400f958d6dde83.jpg?v=1710905815" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405105-579873", "title": "Feminino \/ Verde \/ GG", "untranslatedTitle": "Feminino \/ Verde \/ GG" }, { "id": "48424468119853", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/bbc133f1e7e97196cc400f958d6dde83.jpg?v=1710905815" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405106-579873", "title": "Feminino \/ Verde \/ 3G", "untranslatedTitle": "Feminino \/ Verde \/ 3G" }, { "id": "47448003281197", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/bbc133f1e7e97196cc400f958d6dde83.jpg?v=1710905815" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405101-579873", "title": "Feminino \/ Verde \/ PP", "untranslatedTitle": "Feminino \/ Verde \/ PP" }, { "id": "47448003805485", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/a1f58204025d1b547f3cbc351436fb6a.jpg?v=1710905817" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288431202-579873", "title": "Feminino \/ Marinho \/ P", "untranslatedTitle": "Feminino \/ Marinho \/ P" }, { "id": "47448004165933", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/a1f58204025d1b547f3cbc351436fb6a.jpg?v=1710905817" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288431203-579873", "title": "Feminino \/ Marinho \/ M", "untranslatedTitle": "Feminino \/ Marinho \/ M" }, { "id": "47448004657453", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/a1f58204025d1b547f3cbc351436fb6a.jpg?v=1710905817" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288431204-579873", "title": "Feminino \/ Marinho \/ G", "untranslatedTitle": "Feminino \/ Marinho \/ G" }, { "id": "47448005345581", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/a1f58204025d1b547f3cbc351436fb6a.jpg?v=1710905817" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288431205-579873", "title": "Feminino \/ Marinho \/ GG", "untranslatedTitle": "Feminino \/ Marinho \/ GG" }, { "id": "48424468152621", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/a1f58204025d1b547f3cbc351436fb6a.jpg?v=1710905817" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288431206-579873", "title": "Feminino \/ Marinho \/ 3G", "untranslatedTitle": "Feminino \/ Marinho \/ 3G" }, { "id": "47448003313965", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/a1f58204025d1b547f3cbc351436fb6a.jpg?v=1710905817" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288431201-579873", "title": "Feminino \/ Marinho \/ PP", "untranslatedTitle": "Feminino \/ Marinho \/ PP" }, { "id": "47448003674413", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/0c6ebb34ac76baa08d7d6c2dea18c14c.jpg?v=1710905820" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288402402-579873", "title": "Feminino \/ Cinza \/ P", "untranslatedTitle": "Feminino \/ Cinza \/ P" }, { "id": "47448004100397", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/0c6ebb34ac76baa08d7d6c2dea18c14c.jpg?v=1710905820" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288402403-579873", "title": "Feminino \/ Cinza \/ M", "untranslatedTitle": "Feminino \/ Cinza \/ M" }, { "id": "47448004722989", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/0c6ebb34ac76baa08d7d6c2dea18c14c.jpg?v=1710905820" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288402404-579873", "title": "Feminino \/ Cinza \/ G", "untranslatedTitle": "Feminino \/ Cinza \/ G" }, { "id": "47448005280045", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/0c6ebb34ac76baa08d7d6c2dea18c14c.jpg?v=1710905820" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288402405-579873", "title": "Feminino \/ Cinza \/ GG", "untranslatedTitle": "Feminino \/ Cinza \/ GG" }, { "id": "48424468185389", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/0c6ebb34ac76baa08d7d6c2dea18c14c.jpg?v=1710905820" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288402406-579873", "title": "Feminino \/ Cinza \/ 3G", "untranslatedTitle": "Feminino \/ Cinza \/ 3G" }, { "id": "47448003346733", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/0c6ebb34ac76baa08d7d6c2dea18c14c.jpg?v=1710905820" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288402401-579873", "title": "Feminino \/ Cinza \/ PP", "untranslatedTitle": "Feminino \/ Cinza \/ PP" }, { "id": "47448003707181", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5b3b184f9cde130d44e8e120233658dd.jpg?v=1710905822" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288401402-579873", "title": "Feminino \/ Branca \/ P", "untranslatedTitle": "Feminino \/ Branca \/ P" }, { "id": "47448004198701", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5b3b184f9cde130d44e8e120233658dd.jpg?v=1710905822" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288401403-579873", "title": "Feminino \/ Branca \/ M", "untranslatedTitle": "Feminino \/ Branca \/ M" }, { "id": "47448004559149", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5b3b184f9cde130d44e8e120233658dd.jpg?v=1710905822" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288401404-579873", "title": "Feminino \/ Branca \/ G", "untranslatedTitle": "Feminino \/ Branca \/ G" }, { "id": "47448004985133", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5b3b184f9cde130d44e8e120233658dd.jpg?v=1710905822" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288401405-579873", "title": "Feminino \/ Branca \/ GG", "untranslatedTitle": "Feminino \/ Branca \/ GG" }, { "id": "48424468218157", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5b3b184f9cde130d44e8e120233658dd.jpg?v=1710905822" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288401406-579873", "title": "Feminino \/ Branca \/ 3G", "untranslatedTitle": "Feminino \/ Branca \/ 3G" }, { "id": "47448003379501", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/5b3b184f9cde130d44e8e120233658dd.jpg?v=1710905822" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288401401-579873", "title": "Feminino \/ Branca \/ PP", "untranslatedTitle": "Feminino \/ Branca \/ PP" }, { "id": "47448003739949", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/3019dfa0ee8d3d04eb662845282c5f58.jpg?v=1710905825" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405402-579873", "title": "Feminino \/ Vermelho \/ P", "untranslatedTitle": "Feminino \/ Vermelho \/ P" }, { "id": "47448004133165", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/3019dfa0ee8d3d04eb662845282c5f58.jpg?v=1710905825" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405403-579873", "title": "Feminino \/ Vermelho \/ M", "untranslatedTitle": "Feminino \/ Vermelho \/ M" }, { "id": "47448004591917", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/3019dfa0ee8d3d04eb662845282c5f58.jpg?v=1710905825" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405404-579873", "title": "Feminino \/ Vermelho \/ G", "untranslatedTitle": "Feminino \/ Vermelho \/ G" }, { "id": "47448005181741", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/3019dfa0ee8d3d04eb662845282c5f58.jpg?v=1710905825" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405405-579873", "title": "Feminino \/ Vermelho \/ GG", "untranslatedTitle": "Feminino \/ Vermelho \/ GG" }, { "id": "48424468250925", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/3019dfa0ee8d3d04eb662845282c5f58.jpg?v=1710905825" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405406-579873", "title": "Feminino \/ Vermelho \/ 3G", "untranslatedTitle": "Feminino \/ Vermelho \/ 3G" }, { "id": "47448003445037", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/3019dfa0ee8d3d04eb662845282c5f58.jpg?v=1710905825" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288405401-579873", "title": "Feminino \/ Vermelho \/ PP", "untranslatedTitle": "Feminino \/ Vermelho \/ PP" }, { "id": "47448003772717", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/22742cef9aec297378c0dcc6752bcc3c.jpg?v=1710905828" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288400102-579873", "title": "Feminino \/ Amarelo \/ P", "untranslatedTitle": "Feminino \/ Amarelo \/ P" }, { "id": "47448004428077", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/22742cef9aec297378c0dcc6752bcc3c.jpg?v=1710905828" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288400103-579873", "title": "Feminino \/ Amarelo \/ M", "untranslatedTitle": "Feminino \/ Amarelo \/ M" }, { "id": "47448004755757", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/22742cef9aec297378c0dcc6752bcc3c.jpg?v=1710905828" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288400104-579873", "title": "Feminino \/ Amarelo \/ G", "untranslatedTitle": "Feminino \/ Amarelo \/ G" }, { "id": "47448005050669", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/22742cef9aec297378c0dcc6752bcc3c.jpg?v=1710905828" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288400105-579873", "title": "Feminino \/ Amarelo \/ GG", "untranslatedTitle": "Feminino \/ Amarelo \/ GG" }, { "id": "47448003576109", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/22742cef9aec297378c0dcc6752bcc3c.jpg?v=1710905828" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288400101-579873", "title": "Feminino \/ Amarelo \/ PP", "untranslatedTitle": "Feminino \/ Amarelo \/ PP" }], "shop": { "name": "Debug Style", "paymentSettings": { "currencyCode": "BRL" }, "myshopifyDomain": "a452ab-2.myshopify.com", "countryCode": "BR", "storefrontUrl": "https:\/\/debugstyle.com" } }, }, function pageEvents(webPixelsManagerAPI) { webPixelsManagerAPI.publish("page_viewed"); webPixelsManagerAPI.publish("product_viewed", { "productVariant": { "id": "47448003641645", "image": { "src": "\/\/debugstyle.com\/cdn\/shop\/files\/12b81a233c8311c1fc87f3133fb4eff9.jpg?v=1710905796" }, "price": { "amount": 89.9, "currencyCode": "BRL" }, "product": { "id": "8953098567981", "title": "<?php echo $nome; ?>", "untranslatedTitle": "<?php echo $nome; ?>", "url": "\/products\/camiseta-assembly", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>" }, "sku": "006288304001-579873", "title": "Masculino \/ Preta \/ P", "untranslatedTitle": "Masculino \/ Preta \/ P" } }); }, "../cdn.html", "8511dacdf6124ce62976135894fc7806c538c9b9", "b499308aw596c3694pc60c1fc5md458904f",);</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'BRL';
        var meta = { "product": { "id": 8953098567981, "gid": "gid:\/\/shopify\/Product\/8953098567981", "vendor": "Debug Style", "type": "CAAS01 - <?php echo $nome; ?>", "variants": [{ "id": 47448003641645, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ P", "public_title": "Masculino \/ Preta \/ P", "sku": "006288304001-579873" }, { "id": 47448004067629, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ M", "public_title": "Masculino \/ Preta \/ M", "sku": "006288304002-579873" }, { "id": 47448004329773, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ G", "public_title": "Masculino \/ Preta \/ G", "sku": "006288304003-579873" }, { "id": 47448004821293, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ GG", "public_title": "Masculino \/ Preta \/ GG", "sku": "006288304004-579873" }, { "id": 47448004952365, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ 3G", "public_title": "Masculino \/ Preta \/ 3G", "sku": "006288304005-579873" }, { "id": 48424467956013, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ 4G", "public_title": "Masculino \/ Preta \/ 4G", "sku": "006288304006-579873" }, { "id": 47448003510573, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Verde \/ P", "public_title": "Masculino \/ Verde \/ P", "sku": "006288305101-579873" }, { "id": 47448004034861, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Verde \/ M", "public_title": "Masculino \/ Verde \/ M", "sku": "006288305102-579873" }, { "id": 47448004395309, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Verde \/ G", "public_title": "Masculino \/ Verde \/ G", "sku": "006288305103-579873" }, { "id": 47448004788525, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Verde \/ GG", "public_title": "Masculino \/ Verde \/ GG", "sku": "006288305104-579873" }, { "id": 47448005312813, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Verde \/ 3G", "public_title": "Masculino \/ Verde \/ 3G", "sku": "006288305105-579873" }, { "id": 48424467988781, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Verde \/ 4G", "public_title": "Masculino \/ Verde \/ 4G", "sku": "006288305106-579873" }, { "id": 47448003412269, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Marinho \/ P", "public_title": "Masculino \/ Marinho \/ P", "sku": "006288331201-579873" }, { "id": 47448004002093, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Marinho \/ M", "public_title": "Masculino \/ Marinho \/ M", "sku": "006288331202-579873" }, { "id": 47448004493613, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Marinho \/ G", "public_title": "Masculino \/ Marinho \/ G", "sku": "006288331203-579873" }, { "id": 47448004526381, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Marinho \/ GG", "public_title": "Masculino \/ Marinho \/ GG", "sku": "006288331204-579873" }, { "id": 47448005247277, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Marinho \/ 3G", "public_title": "Masculino \/ Marinho \/ 3G", "sku": "006288331205-579873" }, { "id": 48064846790957, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Marinho \/ 4G", "public_title": "Masculino \/ Marinho \/ 4G", "sku": "006288331206-579873" }, { "id": 47448003477805, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Cinza \/ P", "public_title": "Masculino \/ Cinza \/ P", "sku": "006288302401-579873" }, { "id": 47448003969325, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Cinza \/ M", "public_title": "Masculino \/ Cinza \/ M", "sku": "006288302402-579873" }, { "id": 47448004362541, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Cinza \/ G", "public_title": "Masculino \/ Cinza \/ G", "sku": "006288302403-579873" }, { "id": 47448004919597, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Cinza \/ GG", "public_title": "Masculino \/ Cinza \/ GG", "sku": "006288302404-579873" }, { "id": 47448005214509, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Cinza \/ 3G", "public_title": "Masculino \/ Cinza \/ 3G", "sku": "006288302405-579873" }, { "id": 48424468021549, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Cinza \/ 4G", "public_title": "Masculino \/ Cinza \/ 4G", "sku": "006288302406-579873" }, { "id": 47448003608877, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Branca \/ P", "public_title": "Masculino \/ Branca \/ P", "sku": "006288301401-579873" }, { "id": 47448003903789, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Branca \/ M", "public_title": "Masculino \/ Branca \/ M", "sku": "006288301402-579873" }, { "id": 47448004460845, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Branca \/ G", "public_title": "Masculino \/ Branca \/ G", "sku": "006288301403-579873" }, { "id": 47448004690221, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Branca \/ GG", "public_title": "Masculino \/ Branca \/ GG", "sku": "006288301404-579873" }, { "id": 47448005083437, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Branca \/ 3G", "public_title": "Masculino \/ Branca \/ 3G", "sku": "006288301405-579873" }, { "id": 48424468054317, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Branca \/ 4G", "public_title": "Masculino \/ Branca \/ 4G", "sku": "006288301406-579873" }, { "id": 47448003543341, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Vermelho \/ P", "public_title": "Masculino \/ Vermelho \/ P", "sku": "006288305401-579873" }, { "id": 47448003936557, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Vermelho \/ M", "public_title": "Masculino \/ Vermelho \/ M", "sku": "006288305402-579873" }, { "id": 47448004231469, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Vermelho \/ G", "public_title": "Masculino \/ Vermelho \/ G", "sku": "006288305403-579873" }, { "id": 47448004854061, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Vermelho \/ GG", "public_title": "Masculino \/ Vermelho \/ GG", "sku": "006288305404-579873" }, { "id": 47448005116205, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Vermelho \/ 3G", "public_title": "Masculino \/ Vermelho \/ 3G", "sku": "006288305405-579873" }, { "id": 48064846823725, "price": 8990, "name": "<?php echo $nome; ?> - Masculino \/ Vermelho \/ 4G", "public_title": "Masculino \/ Vermelho \/ 4G", "sku": "006288305406-579873" }, { "id": 47448003871021, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Preta \/ P", "public_title": "Feminino \/ Preta \/ P", "sku": "006288404002-579873" }, { "id": 47448004264237, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Preta \/ M", "public_title": "Feminino \/ Preta \/ M", "sku": "006288404003-579873" }, { "id": 47448004624685, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Preta \/ G", "public_title": "Feminino \/ Preta \/ G", "sku": "006288404004-579873" }, { "id": 47448005017901, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Preta \/ GG", "public_title": "Feminino \/ Preta \/ GG", "sku": "006288404005-579873" }, { "id": 48065761804589, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Preta \/ 3G", "public_title": "Feminino \/ Preta \/ 3G", "sku": "006288404006-579873" }, { "id": 47448003248429, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Preta \/ PP", "public_title": "Feminino \/ Preta \/ PP", "sku": "006288404001-579873" }, { "id": 47448003838253, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Verde \/ P", "public_title": "Feminino \/ Verde \/ P", "sku": "006288405102-579873" }, { "id": 47448004297005, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Verde \/ M", "public_title": "Feminino \/ Verde \/ M", "sku": "006288405103-579873" }, { "id": 47448004886829, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Verde \/ G", "public_title": "Feminino \/ Verde \/ G", "sku": "006288405104-579873" }, { "id": 47448005148973, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Verde \/ GG", "public_title": "Feminino \/ Verde \/ GG", "sku": "006288405105-579873" }, { "id": 48424468119853, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Verde \/ 3G", "public_title": "Feminino \/ Verde \/ 3G", "sku": "006288405106-579873" }, { "id": 47448003281197, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Verde \/ PP", "public_title": "Feminino \/ Verde \/ PP", "sku": "006288405101-579873" }, { "id": 47448003805485, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Marinho \/ P", "public_title": "Feminino \/ Marinho \/ P", "sku": "006288431202-579873" }, { "id": 47448004165933, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Marinho \/ M", "public_title": "Feminino \/ Marinho \/ M", "sku": "006288431203-579873" }, { "id": 47448004657453, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Marinho \/ G", "public_title": "Feminino \/ Marinho \/ G", "sku": "006288431204-579873" }, { "id": 47448005345581, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Marinho \/ GG", "public_title": "Feminino \/ Marinho \/ GG", "sku": "006288431205-579873" }, { "id": 48424468152621, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Marinho \/ 3G", "public_title": "Feminino \/ Marinho \/ 3G", "sku": "006288431206-579873" }, { "id": 47448003313965, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Marinho \/ PP", "public_title": "Feminino \/ Marinho \/ PP", "sku": "006288431201-579873" }, { "id": 47448003674413, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Cinza \/ P", "public_title": "Feminino \/ Cinza \/ P", "sku": "006288402402-579873" }, { "id": 47448004100397, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Cinza \/ M", "public_title": "Feminino \/ Cinza \/ M", "sku": "006288402403-579873" }, { "id": 47448004722989, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Cinza \/ G", "public_title": "Feminino \/ Cinza \/ G", "sku": "006288402404-579873" }, { "id": 47448005280045, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Cinza \/ GG", "public_title": "Feminino \/ Cinza \/ GG", "sku": "006288402405-579873" }, { "id": 48424468185389, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Cinza \/ 3G", "public_title": "Feminino \/ Cinza \/ 3G", "sku": "006288402406-579873" }, { "id": 47448003346733, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Cinza \/ PP", "public_title": "Feminino \/ Cinza \/ PP", "sku": "006288402401-579873" }, { "id": 47448003707181, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Branca \/ P", "public_title": "Feminino \/ Branca \/ P", "sku": "006288401402-579873" }, { "id": 47448004198701, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Branca \/ M", "public_title": "Feminino \/ Branca \/ M", "sku": "006288401403-579873" }, { "id": 47448004559149, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Branca \/ G", "public_title": "Feminino \/ Branca \/ G", "sku": "006288401404-579873" }, { "id": 47448004985133, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Branca \/ GG", "public_title": "Feminino \/ Branca \/ GG", "sku": "006288401405-579873" }, { "id": 48424468218157, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Branca \/ 3G", "public_title": "Feminino \/ Branca \/ 3G", "sku": "006288401406-579873" }, { "id": 47448003379501, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Branca \/ PP", "public_title": "Feminino \/ Branca \/ PP", "sku": "006288401401-579873" }, { "id": 47448003739949, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Vermelho \/ P", "public_title": "Feminino \/ Vermelho \/ P", "sku": "006288405402-579873" }, { "id": 47448004133165, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Vermelho \/ M", "public_title": "Feminino \/ Vermelho \/ M", "sku": "006288405403-579873" }, { "id": 47448004591917, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Vermelho \/ G", "public_title": "Feminino \/ Vermelho \/ G", "sku": "006288405404-579873" }, { "id": 47448005181741, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Vermelho \/ GG", "public_title": "Feminino \/ Vermelho \/ GG", "sku": "006288405405-579873" }, { "id": 48424468250925, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Vermelho \/ 3G", "public_title": "Feminino \/ Vermelho \/ 3G", "sku": "006288405406-579873" }, { "id": 47448003445037, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Vermelho \/ PP", "public_title": "Feminino \/ Vermelho \/ PP", "sku": "006288405401-579873" }, { "id": 47448003772717, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Amarelo \/ P", "public_title": "Feminino \/ Amarelo \/ P", "sku": "006288400102-579873" }, { "id": 47448004428077, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Amarelo \/ M", "public_title": "Feminino \/ Amarelo \/ M", "sku": "006288400103-579873" }, { "id": 47448004755757, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Amarelo \/ G", "public_title": "Feminino \/ Amarelo \/ G", "sku": "006288400104-579873" }, { "id": 47448005050669, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Amarelo \/ GG", "public_title": "Feminino \/ Amarelo \/ GG", "sku": "006288400105-579873" }, { "id": 47448003576109, "price": 8990, "name": "<?php echo $nome; ?> - Feminino \/ Amarelo \/ PP", "public_title": "Feminino \/ Amarelo \/ PP", "sku": "006288400101-579873" }] }, "page": { "pageType": "product", "resourceType": "product", "resourceId": 8953098567981 } };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }</script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

        };
    </script>
    <script class="analytics">(function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function (token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function (token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function (e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function (error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST.html', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1',
                            {
                                shop_id: 82729074989,
                                theme_id: 162954969389,
                                app_name: "storefront",
                                context_url: window.location.href,
                                source_url: "//debugstyle.com/cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = '../cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = '../cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                { "Trekkie": { "appName": "storefront", "development": false, "defaultAttributes": { "shopId": 82729074989, "isMerchantRequest": null, "themeId": 162954969389, "themeCityHash": "11574582758858747111", "contentLanguage": "pt-BR", "currency": "BRL" }, "isServerSideCookieWritingEnabled": true, "monorailRegion": "shop_domain", "enabledBetaFlags": ["bbcf04e6"] }, "Session Attribution": {}, "S2S": { "facebookCapiEnabled": false, "source": "trekkie-storefront-renderer" } }
            );

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch (error) { };
                document.write = originalDocumentWrite;

                window.ShopifyAnalytics.lib.page(null, { "pageType": "product", "resourceType": "product", "resourceId": 8953098567981 });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);
                    window.ShopifyAnalytics.lib.track("Viewed Product", { "currency": "BRL", "variantId": 47448003641645, "productId": 8953098567981, "productGid": "gid:\/\/shopify\/Product\/8953098567981", "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ P", "price": "89.90", "sku": "006288304001-579873", "brand": "Debug Style", "variant": "Masculino \/ Preta \/ P", "category": "CAAS01 - <?php echo $nome; ?>", "nonInteraction": true });
                    window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1", { "currency": "BRL", "variantId": 47448003641645, "productId": 8953098567981, "productGid": "gid:\/\/shopify\/Product\/8953098567981", "name": "<?php echo $nome; ?> - Masculino \/ Preta \/ P", "price": "89.90", "sku": "006288304001-579873", "brand": "Debug Style", "variant": "Masculino \/ Preta \/ P", "category": "CAAS01 - <?php echo $nome; ?>", "nonInteraction": true, "referer": "https:\/\/debugstyle.com\/products\/camiseta-assembly" });
                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "../cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
    <script class="boomerang">
        (function () {
            if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                return;
            }
            window.BOOMR = window.BOOMR || {};
            window.BOOMR.snippetStart = new Date().getTime();
            window.BOOMR.snippetExecuted = true;
            window.BOOMR.snippetVersion = 12;
            window.BOOMR.application = "storefront-renderer";
            window.BOOMR.themeName = "Tema Vision Nichada";
            window.BOOMR.themeVersion = "1.0";
            window.BOOMR.shopId = 82729074989;
            window.BOOMR.themeId = 162954969389;
            window.BOOMR.renderRegion = "gcp-us-east1";
            window.BOOMR.url =
                "../cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
            var where = document.currentScript || document.getElementsByTagName("script")[0];
            var parentNode = where.parentNode;
            var promoted = false;
            var LOADER_TIMEOUT = 3000;
            function promote() {
                if (promoted) {
                    return;
                }
                var script = document.createElement("script");
                script.id = "boomr-scr-as";
                script.src = window.BOOMR.url;
                script.async = true;
                parentNode.appendChild(script);
                promoted = true;
            }
            function iframeLoader(wasFallback) {
                promoted = true;
                var dom, bootstrap, iframe, iframeStyle;
                var doc = document;
                var win = window;
                window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                bootstrap = function (parent, scriptId) {
                    var script = doc.createElement("script");
                    script.id = scriptId || "boomr-if-as";
                    script.src = window.BOOMR.url;
                    BOOMR_lstart = new Date().getTime();
                    parent = parent || doc.body;
                    parent.appendChild(script);
                };
                if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                    window.BOOMR.snippetMethod = "s";
                    bootstrap(parentNode, "boomr-async");
                    return;
                }
                iframe = document.createElement("IFRAME");
                iframe.src = "about:blank";
                iframe.title = "";
                iframe.role = "presentation";
                iframe.loading = "eager";
                iframeStyle = (iframe.frameElement || iframe).style;
                iframeStyle.width = 0;
                iframeStyle.height = 0;
                iframeStyle.border = 0;
                iframeStyle.display = "none";
                parentNode.appendChild(iframe);
                try {
                    win = iframe.contentWindow;
                    doc = win.document.open();
                } catch (e) {
                    dom = document.domain;
                    iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                    win = iframe.contentWindow;
                    doc = win.document.open();
                }
                if (dom) {
                    doc._boomrl = function () {
                        this.domain = dom;
                        bootstrap();
                    };
                    doc.write("<body onload='document._boomrl();'>");
                } else {
                    win._boomrl = function () {
                        bootstrap();
                    };
                    if (win.addEventListener) {
                        win.addEventListener("load", win._boomrl, false);
                    } else if (win.attachEvent) {
                        win.attachEvent("onload", win._boomrl);
                    }
                }
                doc.close();
            }
            var link = document.createElement("link");
            if (link.relList &&
                typeof link.relList.supports === "function" &&
                link.relList.supports("preload") &&
                ("as" in link)) {
                window.BOOMR.snippetMethod = "p";
                link.href = window.BOOMR.url;
                link.rel = "preload";
                link.as = "script";
                link.addEventListener("load", promote);
                link.addEventListener("error", function () {
                    iframeLoader(true);
                });
                setTimeout(function () {
                    if (!promoted) {
                        iframeLoader(true);
                    }
                }, LOADER_TIMEOUT);
                BOOMR_lstart = new Date().getTime();
                parentNode.appendChild(link);
            } else {
                iframeLoader(false);
            }
            function boomerangSaveLoadTime(e) {
                window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
            }
            if (window.addEventListener) {
                window.addEventListener("load", boomerangSaveLoadTime, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", boomerangSaveLoadTime);
            }
            if (document.addEventListener) {
                document.addEventListener("onBoomerangLoaded", function (e) {
                    e.detail.BOOMR.init({
                        ResourceTiming: {
                            enabled: true,
                            trackedResourceTypes: ["script", "img", "css"]
                        },
                    });
                    e.detail.BOOMR.t_end = new Date().getTime();
                });
            } else if (document.attachEvent) {
                document.attachEvent("onpropertychange", function (e) {
                    if (!e) e = event;
                    if (e.propertyName === "onBoomerangLoaded") {
                        e.detail.BOOMR.init({
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    }
                });
            }
        })();</script>
</head>

<body class="no-focus-outline  features--image-zoom" data-instant-allow-query-string>
    <div id="shopify-section-custom-fonts" class="shopify-section">
        <style data-custom-fonts>
            @font-face {
                font-family: 'Serif';
                src: url(https://cdn.shopify.com/s/files/1/0827/2907/4989/files/DebugSerif-Regular.ttf?v=1699535112) format('truetype');



            }











































            @font-face {
                font-family: 'Sans';
                src: url(https://cdn.shopify.com/s/files/1/0827/2907/4989/files/DebugSans-Regular.ttf?v=1699535112) format('truetype');



            }















            p {
                font-family: 'Sans' !important;
            }



            span {
                font-family: 'Sans' !important;
            }



            .product-item__title,
            .product-item-meta__title,
            .product-tabs__trust-title,
            li[data-mce-fragment="1"],
            .li-menu-desktop,
            label,
            .footer__item-content,
            .botao-rastreio,
            .mobile-nav__link,
            .mobile-nav__item,
            .product-facet__filters {
                font-family: 'Sans' !important;
            }
        </style>



    </div>
    <svg class="visually-hidden">
        <linearGradient id="rating-star-gradient-half">
            <stop offset="50%" stop-color="rgb(var(--product-star-rating))" />
            <stop offset="50%" stop-color="rgb(var(--product-star-rating))" stop-opacity="0.4" />
        </linearGradient>
    </svg>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCQHJRP2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- NÃO ASSINCRONIZE NEM ADIE ESSE SCRIPT  -->
    <script defer src="../../code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <a href="#main" class="visually-hidden skip-to-content">Pular para o conteúdo</a>
    <loading-bar class="loading-bar"></loading-bar>
    <div id="shopify-section-barra-topo-vision" class="shopify-section">
        <style>
            :root {
                --color-bg-topbar: #000000;
            }

            /* TOP BAR */
            .top-bar-mobile {
                display: none;
            }

            .top-bar-desktop,
            .top-bar-mobile {
                width: 100%;
                text-align: center;
                background: var(--color-bg-topbar);
                overflow: hidden;
            }

            .top-bar-desktop {
                height: 45px;
            }

            .top-bar-mobile {
                height: 45px;
            }


            .top-bar-image {
                height: -webkit-fill-available;
                width: 100%;
                background-repeat: no-repeat;
                background-position: center center;
            }

            @media only screen and (max-width: 780px) {
                .top-bar-mobile {
                    display: block;
                }

                .top-bar-desktop {
                    display: none;
                }
            }
        </style>




    </div>
    <div id="shopify-section-announcement-bar" class="shopify-section shopify-section--announcement-bar">
        <style>
            :root {
                --enable-sticky-announcement-bar: 1;
            }

            #shopify-section-announcement-bar {
                --heading-color: 255, 255, 255;
                --text-color: 255, 255, 255;
                --primary-button-background: 0, 0, 0;
                --primary-button-text-color: 1, 1, 1;
                --section-background: 0, 0, 0;
                z-index: 5;
                /* Make sure it goes over header */
                position: -webkit-sticky;
                position: sticky;
                top: 0;
            }

            @media screen and (min-width: 741px) {
                :root {
                    --enable-sticky-announcement-bar: 1;
                }

                #shopify-section-announcement-bar {
                    position: -webkit-sticky;
                    position: sticky;
                }
            }
        </style>
        <section>
            <announcement-bar auto-play cycle-speed="4" class="announcement-bar announcement-bar--multiple"><button
                    data-action="prev" class="tap-area tap-area--large">
                    <span class="visually-hidden">Anterior</span>
                    <svg fill="none" focusable="false" width="12" height="10"
                        class="icon icon--nav-arrow-left-small  icon--direction-aware " viewBox="0 0 12 10">
                        <path d="M12 5L2.25 5M2.25 5L6.15 9.16M2.25 5L6.15 0.840001" stroke="currentColor"
                            stroke-width="1.1"></path>
                    </svg>
                </button>
                <div class="announcement-bar__list"><announcement-bar-item class="announcement-bar__item">
                        <div class="announcement-bar__message text--small">
                            <p>Compre 4 e leve 5 com o cupom QUINTOFREE</p>
                        </div>
                    </announcement-bar-item><announcement-bar-item hidden class="announcement-bar__item">
                        <div class="announcement-bar__message text--small">
                            <p>Frete Grátis para compras acima de R$ 199</p>
                        </div>
                    </announcement-bar-item></div><button data-action="next" class="tap-area tap-area--large">
                    <span class="visually-hidden">Próxima</span>
                    <svg fill="none" focusable="false" width="12" height="10"
                        class="icon icon--nav-arrow-right-small  icon--direction-aware " viewBox="0 0 12 10">
                        <path d="M-3.63679e-07 5L9.75 5M9.75 5L5.85 9.16M9.75 5L5.85 0.840001" stroke="currentColor"
                            stroke-width="1.1"></path>
                    </svg>
                </button>
            </announcement-bar>
        </section>

        <script>
            document.documentElement.style.setProperty('--announcement-bar-height', document.getElementById('shopify-section-announcement-bar').clientHeight + 'px');
        </script>
        <style>
            #shopify-section-announcement-bar .tap-area {
                display: none;
            }
        </style>
    </div>
    <div id="shopify-section-popup" class="shopify-section shopify-section--popup">
        <style>
            [aria-controls="newsletter-popup"] {
                display: none;
                /* Allows to hide the toggle icon in the header if the section is disabled */
            }
        </style>
    </div>
    <div id="shopify-section-header" class="shopify-section shopify-section--header">
        <style>
            :root {
                --enable-sticky-header: 0;
                --enable-transparent-header: 0;
                --loading-bar-background: 0, 0, 0;
                /* Prevent the loading bar to be invisible */
            }

            #shopify-section-header {
                --header-background: 255, 255, 255;
                --header-text-color: 0, 0, 0;
                --header-border-color: 217, 217, 217;
                --reduce-header-padding: 1;
                position: relative;
                top: 0;
                z-index: 4;
            }

            #shopify-section-header .header__logo-image {
                max-width: 150px;
            }

            @media screen and (min-width: 741px) {
                #shopify-section-header .header__logo-image {
                    max-width: 190px;
                }
            }

            @media screen and (min-width: 1200px) {

                /* For this navigation we have to move the logo at the first and add a margin */
                [dir="rtl"] .header__logo {
                    margin-left: 40px;
                }

                [dir="ltr"] .header__logo {
                    margin-right: 40px;
                }

                .header__logo {
                    order: -1;
                }

                @media screen and (min-width: 741px) {
                    .header__secondary-links {
                        max-width: max-content;
                        margin-inline-start: 48px;
                    }
                }
            }
        </style>
        
        <?php require '../store-header.php' ?>
        
        <cart-notification global hidden
            class="cart-notification cart-notification--fixed"></cart-notification><mobile-navigation append-body
            id="mobile-menu-drawer" class="drawer drawer--from-left">
            <span class="drawer__overlay"></span>

            <div class="drawer__header drawer__header--shadowed">
                <button type="button" class="drawer__close-button drawer__close-button--block tap-area"
                    data-action="close" title="Fechar"><svg focusable="false" width="14" height="14"
                        class="icon icon--close   " viewBox="0 0 14 14">
                        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1" fill="none"></path>
                    </svg></button>
            </div>

            <div class="drawer__content menu-principal">
                <ul class="mobile-nav list--unstyled" role="list">
                    <li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link h6"
                            aria-controls="mobile-menu-1" aria-expanded="false">COLEÇÕES<span
                                class="animated-plus"></span>
                        </button>

                        <collapsible-content id="mobile-menu-1" class="collapsible" style="background-color: #f6f6f6;">
                            <ul class="mobile-nav list--unstyled" role="list" style="margin-bottom: 0px!important;">
                                <li class="mobile-nav__item" data-level="2"><button is="toggle-button"
                                        class="mobile-nav__link" aria-controls="mobile-menu-1-1"
                                        aria-expanded="false">Produtos<span class="animated-plus"></span>
                                    </button>

                                    <collapsible-content id="mobile-menu-1-1" class="collapsible"
                                        style="background-color: #e6e6e6;">
                                        <ul class="mobile-nav list--unstyled" role="list">
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/camisetas.html"
                                                    class="mobile-nav__link">Camisetas</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/camisetas-premium.html"
                                                    class="mobile-nav__link">Camisetas Premium</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/cropped.html"
                                                    class="mobile-nav__link">Croppeds</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/moletons.html"
                                                    class="mobile-nav__link">Moletons</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/regatas.html"
                                                    class="mobile-nav__link">Regatas</a>
                                            </li>
                                        </ul>
                                    </collapsible-content>
                                </li>
                                <li class="mobile-nav__item" data-level="2"><button is="toggle-button"
                                        class="mobile-nav__link" aria-controls="mobile-menu-1-2"
                                        aria-expanded="false">Linguagens<span class="animated-plus"></span>
                                    </button>

                                    <collapsible-content id="mobile-menu-1-2" class="collapsible"
                                        style="background-color: #e6e6e6;">
                                        <ul class="mobile-nav list--unstyled" role="list">
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/python.html" class="mobile-nav__link">Python</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/java.html" class="mobile-nav__link">Java</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/c.html" class="mobile-nav__link">C / C++ /
                                                    C#</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/javascript.html"
                                                    class="mobile-nav__link">JavaScript</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/kotlin.html" class="mobile-nav__link">Kotlin</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/ruby.html" class="mobile-nav__link">Ruby</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/go.html" class="mobile-nav__link">GO</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/php.html" class="mobile-nav__link">PHP</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/assembly.html"
                                                    class="mobile-nav__link">Assembly</a>
                                            </li>
                                        </ul>
                                    </collapsible-content>
                                </li>
                                <li class="mobile-nav__item" data-level="2"><button is="toggle-button"
                                        class="mobile-nav__link" aria-controls="mobile-menu-1-3"
                                        aria-expanded="false">Web<span class="animated-plus"></span>
                                    </button>

                                    <collapsible-content id="mobile-menu-1-3" class="collapsible"
                                        style="background-color: #e6e6e6;">
                                        <ul class="mobile-nav list--unstyled" role="list">
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/html.html" class="mobile-nav__link">HTML</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/css.html" class="mobile-nav__link">CSS</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/javascript.html"
                                                    class="mobile-nav__link">JavaScript</a>
                                            </li>
                                        </ul>
                                    </collapsible-content>
                                </li>
                                <li class="mobile-nav__item" data-level="2"><button is="toggle-button"
                                        class="mobile-nav__link" aria-controls="mobile-menu-1-4"
                                        aria-expanded="false">Cursos<span class="animated-plus"></span>
                                    </button>

                                    <collapsible-content id="mobile-menu-1-4" class="collapsible"
                                        style="background-color: #e6e6e6;">
                                        <ul class="mobile-nav list--unstyled" role="list">
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/ciencia-da-computacao.html"
                                                    class="mobile-nav__link">Ciência da Computação</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/ads.html" class="mobile-nav__link">Ads</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/engenharia-da-computacao.html"
                                                    class="mobile-nav__link">Engenharia da Computação</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/sistemas-de-informacao.html"
                                                    class="mobile-nav__link">Sistemas de Informação</a>
                                            </li>
                                        </ul>
                                    </collapsible-content>
                                </li>
                                <li class="mobile-nav__item" data-level="2"><button is="toggle-button"
                                        class="mobile-nav__link" aria-controls="mobile-menu-1-5"
                                        aria-expanded="false">DEVOPS<span class="animated-plus"></span>
                                    </button>

                                    <collapsible-content id="mobile-menu-1-5" class="collapsible"
                                        style="background-color: #e6e6e6;">
                                        <ul class="mobile-nav list--unstyled" role="list">
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/kubernetes.html"
                                                    class="mobile-nav__link">Kubernets</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/cloud.html" class="mobile-nav__link">Cloud</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/docker.html" class="mobile-nav__link">Docker</a>
                                            </li>
                                        </ul>
                                    </collapsible-content>
                                </li>
                                <li class="mobile-nav__item" data-level="2"><button is="toggle-button"
                                        class="mobile-nav__link" aria-controls="mobile-menu-1-6"
                                        aria-expanded="false">Outras<span class="animated-plus"></span>
                                    </button>

                                    <collapsible-content id="mobile-menu-1-6" class="collapsible"
                                        style="background-color: #e6e6e6;">
                                        <ul class="mobile-nav list--unstyled" role="list">
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/colecao-mulher.html"
                                                    class="mobile-nav__link">Coleção Mulher</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/dia-a-dia.html" class="mobile-nav__link">Dia a
                                                    Dia</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/data-science.html" class="mobile-nav__link">Data
                                                    Science</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/git-github-1.html" class="mobile-nav__link">Git
                                                    & Github</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/cafe.html" class="mobile-nav__link">Café</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/linux.html" class="mobile-nav__link">Linux</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/sql.html" class="mobile-nav__link">SQL</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/cybersecurity.html"
                                                    class="mobile-nav__link">Cybersecurity</a>
                                            </li>
                                            <li class="mobile-nav__item" data-level="3">
                                                <a href="../collections/redes.html" class="mobile-nav__link">Redes</a>
                                            </li>
                                        </ul>
                                    </collapsible-content>
                                </li>
                            </ul>
                        </collapsible-content>
                    </li>
                    <li class="mobile-nav__item" data-level="1"><a href="../pages/rastreie-seu-pedido.html"
                            class="mobile-nav__link h6">RASTREIO</a></li>
                </ul>
            </div>
        </mobile-navigation><predictive-search-drawer append-body reverse-breakpoint="screen and (min-width: 1200px)"
            id="search-drawer" initial-focus-selector="#search-drawer [name='q']"
            class="predictive-search drawer drawer--large drawer--from-left">
            <span class="drawer__overlay"></span>

            <header class="drawer__header">
                <form id="predictive-search-form" action="https://debugstyle.com/search" method="get"
                    class="predictive-search__form"><svg focusable="false" width="18" height="18"
                        class="icon icon--header-search   " viewBox="0 0 18 18">
                        <path
                            d="M12.336 12.336c2.634-2.635 2.682-6.859.106-9.435-2.576-2.576-6.8-2.528-9.435.106C.373 5.642.325 9.866 2.901 12.442c2.576 2.576 6.8 2.528 9.435-.106zm0 0L17 17"
                            fill="none" stroke="currentColor" stroke-width="1.1"></path>
                    </svg><input type="hidden" name="type" value="product">
                    <input type="hidden" name="options[prefix]" value="last">
                    <input type="hidden" form="predictive-search-form" name="options[unavailable_products]"
                        value="last">
                    <input class="predictive-search__input" type="text" name="q" autocomplete="off" autocorrect="off"
                        aria-label="Pesquisar" placeholder="O que você está buscando?">
                </form>

                <button type="button" class="drawer__close-button tap-area" data-action="close" title="Fechar"><svg
                        focusable="false" width="14" height="14" class="icon icon--close   " viewBox="0 0 14 14">
                        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1" fill="none"></path>
                    </svg></button>
            </header>

            <div class="drawer__content">
                <div class="predictive-search__content-wrapper">
                    <div hidden class="predictive-search__loading-state">
                        <div class="spinner"><svg focusable="false" width="50" height="50" class="icon icon--spinner   "
                                viewBox="25 25 50 50">
                                <circle cx="50" cy="50" r="20" fill="none" stroke="#282828" stroke-width="4"></circle>
                            </svg></div>
                    </div>

                    <div hidden class="predictive-search__results" aria-live="polite"></div>
                </div>
            </div>

            <footer hidden class="drawer__footer drawer__footer--no-top-padding">
                <button type="submit" form="predictive-search-form" class="button button--primary button--full">Ver
                    todos os resultados</button>
            </footer>
        </predictive-search-drawer>
        <script>
            (() => {
                const headerElement = document.getElementById('shopify-section-header'),
                    headerHeight = headerElement.clientHeight,
                    headerHeightWithoutBottomNav = headerElement.querySelector('.header__wrapper').clientHeight;

                document.documentElement.style.setProperty('--header-height', headerHeight + 'px');
                document.documentElement.style.setProperty('--header-height-without-bottom-nav', headerHeightWithoutBottomNav + 'px');
            })();
        </script>

        <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Debug Style",
    
      
      "logo": "https:\/\/debugstyle.com\/cdn\/shop\/files\/Debug_Style_1_580x.png?v=1699606048",
    
    "url": "https:\/\/debugstyle.com"
  }
</script>

    </div>
    <div id="shopify-section-mini-cart" class="shopify-section shopify-section--mini-cart"><cart-drawer
            section="mini-cart" id="mini-cart" class="mini-cart drawer drawer--large">
            <span class="drawer__overlay"></span>




            <header class="drawer__header">
                <p class="drawer__title heading h6"><svg focusable="false" width="20" height="19"
                        class="icon icon--header-tote-bag   " viewBox="0 0 20 19">
                        <path d="M3 7H17L18 18H2L3 7Z" fill="none" stroke="currentColor" stroke-width="1.1"></path>
                        <path d="M13 4V4C13 2.34315 11.6569 1 10 1V1C8.34315 1 7 2.34315 7 4V4" fill="none"
                            stroke="currentColor" stroke-width="1.1"></path>
                    </svg>Carrinho</p>

                <button type="button" class="drawer__close-button tap-area" data-action="close" title="Fechar"><svg
                        focusable="false" width="14" height="14" class="icon icon--close   " viewBox="0 0 14 14">
                        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1" fill="none"></path>
                    </svg></button>
            </header>
            <div class="drawer__content drawer__content--center">
                <p>Seu carrinho está vazio</p>

                <div class="button-wrapper">
                    <a href="../collections/all.html" class="button button--primary">Comece a comprar</a>
                </div>
            </div>
        </cart-drawer>

    </div>
    <div id="main" role="main" class="anchor">
        <div id="shopify-section-template--21579557241133__main" class="shopify-section shopify-section--main-product">
            <style>
                #shopify-section-template--21579557241133__main {
                    --primary-button-background: 0, 0, 0;
                    --primary-button-text-color: 255, 255, 255;
                    --secondary-button-background: , , ;
                    --secondary-button-text-color: , , ;
            </style>

            <section>
                <style>
                    @media screen and (min-width: 1000px) {
                        :root {
                            --anchor-offset: 140px;
                            /* When the sticky form is activate, every scroll must be offset by an extra value */
                        }
                    }
                </style>

                <product-sticky-form form-id="product-form-template" hidden
                    class="product-sticky-form">
                    <div class="container">
                        <div class="product-sticky-form__inner">
                            <div class="product-sticky-form__content-wrapper hidden-pocket">
                                <div class="product-sticky-form__image-wrapper"><img class="product-sticky-form__image"
                                        loading="lazy" sizes="55px" height="820" width="800" alt="<?php echo $nome; ?>"
                                        src="../cdn/shop/files/12b81a233c8311c1fc87f3133fb4eff9_165x0dfd.jpg?v=1710905796"
                                        srcset="//debugstyle.com/cdn/shop/files/12b81a233c8311c1fc87f3133fb4eff9_55x.jpg?v=1710905796 55w, //debugstyle.com/cdn/shop/files/12b81a233c8311c1fc87f3133fb4eff9_110x.jpg?v=1710905796 110w, //debugstyle.com/cdn/shop/files/12b81a233c8311c1fc87f3133fb4eff9_165x.jpg?v=1710905796 165w">
                                </div>

                                <div class="product-sticky-form__info">
                                    <div class="product-sticky-form__bottom-info">
                                        <span class="product-sticky-form__title">
                                            <?php echo $nome; ?>
                                        </span>
                                        <span class="square-separator square-separator--subdued"></span>
                                        <span class="product-sticky-form__price">R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></span>

                                        <div class="product-sticky-form__unit-price text--xsmall text--subdued"
                                            style="display: none">
                                            <div class="unit-price-measurement">
                                                <span class="unit-price-measurement__price"></span>
                                                <span class="unit-price-measurement__separator">/</span><span
                                                    class="unit-price-measurement__reference-value"></span><span
                                                    class="unit-price-measurement__reference-unit"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sticky-form__form"><product-variants handle="camiseta-assembly"
                                    form-id="product-form-template" update-url
                                    hide-sold-out-variants class="product-sticky-form__variants hidden-pocket">
                                    <div class="select-wrapper" data-selector-type="dropdown">
                                        <combo-box fit-toggle initial-focus-selector="[aria-selected='true']"
                                            id="sticky-form-option-template--21579557241133__main-1-combo-box"
                                            class="combo-box">
                                            <span class="combo-box__overlay"></span>

                                            <header class="combo-box__header">
                                                <p class="combo-box__title heading h6">Tipo - Estilo</p>

                                                <button type="button" class="combo-box__close-button tap-area"
                                                    data-action="close" title="Fechar"><svg focusable="false" width="14"
                                                        height="14" class="icon icon--close   " viewBox="0 0 14 14">
                                                        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor"
                                                            stroke-width="1.1" fill="none"></path>
                                                    </svg></button>
                                            </header>

                                            <div class="combo-box__option-list" role="listbox"><button type="button"
                                                    role="option" class="combo-box__option-item" value="Masculino"
                                                    aria-selected="true">Masculino</button><button type="button"
                                                    role="option" class="combo-box__option-item" value="Feminino"
                                                    aria-selected="false">Feminino</button></div>

                                            <select class="visually-hidden" name="option1"
                                                form="product-form-template"
                                                data-bind-value="sticky-form-option-template--21579557241133__main-1-value"
                                                aria-label="Tipo - Estilo">
                                                <option value="Masculino" selected>Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                            </select>
                                        </combo-box>

                                        <button type="button" is="toggle-button" class="select" aria-expanded="false"
                                            aria-haspopup="listbox"
                                            aria-controls="sticky-form-option-template--21579557241133__main-1-combo-box">
                                            <span id="sticky-form-option-template--21579557241133__main-1-value"
                                                class="select__selected-value">Masculino</span><svg focusable="false"
                                                width="12" height="8" class="icon icon--chevron   " viewBox="0 0 12 8">
                                                <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor"
                                                    stroke-width="1.1"></path>
                                            </svg></button>
                                    </div>
                                    <div class="select-wrapper" data-selector-type="dropdown">
                                        <combo-box fit-toggle initial-focus-selector="[aria-selected='true']"
                                            id="sticky-form-option-template--21579557241133__main-2-combo-box"
                                            class="combo-box">
                                            <span class="combo-box__overlay"></span>

                                            <header class="combo-box__header">
                                                <p class="combo-box__title heading h6">Cor</p>

                                                <button type="button" class="combo-box__close-button tap-area"
                                                    data-action="close" title="Fechar"><svg focusable="false" width="14"
                                                        height="14" class="icon icon--close   " viewBox="0 0 14 14">
                                                        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor"
                                                            stroke-width="1.1" fill="none"></path>
                                                    </svg></button>
                                            </header>

                                            <div class="combo-box__option-list" role="listbox"><button type="button"
                                                    role="option" class="combo-box__option-item" value="Preta"
                                                    aria-selected="true"><span class="combo-box__color-swatch"
                                                        aria-label="Preta"
                                                        style="background-color: #000000"></span>Preta</button><button
                                                    type="button" role="option" class="combo-box__option-item"
                                                    value="Verde" aria-selected="false"><span
                                                        class="combo-box__color-swatch" aria-label="Verde"
                                                        style="background-color: #008000"></span>Verde</button><button
                                                    type="button" role="option" class="combo-box__option-item"
                                                    value="Marinho" aria-selected="false"><span
                                                        class="combo-box__color-swatch" aria-label="Marinho"
                                                        style="background-color: #2E3440"></span>Marinho</button><button
                                                    type="button" role="option" class="combo-box__option-item"
                                                    value="Cinza" aria-selected="false"><span
                                                        class="combo-box__color-swatch" aria-label="Cinza"
                                                        style="background-color: #808080"></span>Cinza</button><button
                                                    type="button" role="option" class="combo-box__option-item"
                                                    value="Branca" aria-selected="false"><span
                                                        class="combo-box__color-swatch" aria-label="Branca"
                                                        style="background-color: branca"></span>Branca</button><button
                                                    type="button" role="option" class="combo-box__option-item"
                                                    value="Vermelho" aria-selected="false"><span
                                                        class="combo-box__color-swatch" aria-label="Vermelho"
                                                        style="background-color: #FF0000"></span>Vermelho</button><button
                                                    type="button" role="option" class="combo-box__option-item"
                                                    value="Amarelo" aria-selected="false"><span
                                                        class="combo-box__color-swatch" aria-label="Amarelo"
                                                        style="background-color: #FFFF00"></span>Amarelo</button></div>

                                            <select class="visually-hidden" name="option2"
                                                form="product-form-template"
                                                data-bind-value="sticky-form-option-template--21579557241133__main-2-value"
                                                aria-label="Cor">
                                                <option value="Preta"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Preta&quot; style=&quot;background-color: #000000&quot;&gt;&lt;/span&gt;Preta"
                                                    selected>Preta</option>
                                                <option value="Verde"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Verde&quot; style=&quot;background-color: #008000&quot;&gt;&lt;/span&gt;Verde">
                                                    Verde</option>
                                                <option value="Marinho"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Marinho&quot; style=&quot;background-color: #2E3440&quot;&gt;&lt;/span&gt;Marinho">
                                                    Marinho</option>
                                                <option value="Cinza"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Cinza&quot; style=&quot;background-color: #808080&quot;&gt;&lt;/span&gt;Cinza">
                                                    Cinza</option>
                                                <option value="Branca"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Branca&quot; style=&quot;background-color: branca&quot;&gt;&lt;/span&gt;Branca">
                                                    Branca</option>
                                                <option value="Vermelho"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Vermelho&quot; style=&quot;background-color: #FF0000&quot;&gt;&lt;/span&gt;Vermelho">
                                                    Vermelho</option>
                                                <option value="Amarelo"
                                                    title="&lt;span class=&quot;select__color-swatch &quot; aria-label=&quot;Amarelo&quot; style=&quot;background-color: #FFFF00&quot;&gt;&lt;/span&gt;Amarelo">
                                                    Amarelo</option>
                                            </select>
                                        </combo-box>

                                        <button type="button" is="toggle-button" class="select" aria-expanded="false"
                                            aria-haspopup="listbox"
                                            aria-controls="sticky-form-option-template--21579557241133__main-2-combo-box">
                                            <span id="sticky-form-option-template--21579557241133__main-2-value"
                                                class="select__selected-value"><span class="select__color-swatch "
                                                    aria-label="Preta"
                                                    style="background-color: #000000"></span>Preta</span><svg
                                                focusable="false" width="12" height="8" class="icon icon--chevron   "
                                                viewBox="0 0 12 8">
                                                <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor"
                                                    stroke-width="1.1"></path>
                                            </svg></button>
                                    </div>
                                    <div class="select-wrapper" data-selector-type="dropdown">
                                        <combo-box fit-toggle initial-focus-selector="[aria-selected='true']"
                                            id="sticky-form-option-template--21579557241133__main-3-combo-box"
                                            class="combo-box">
                                            <span class="combo-box__overlay"></span>

                                            <header class="combo-box__header">
                                                <p class="combo-box__title heading h6">Tamanho</p>

                                                <button type="button" class="combo-box__close-button tap-area"
                                                    data-action="close" title="Fechar"><svg focusable="false" width="14"
                                                        height="14" class="icon icon--close   " viewBox="0 0 14 14">
                                                        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor"
                                                            stroke-width="1.1" fill="none"></path>
                                                    </svg></button>
                                            </header>

                                            <div class="combo-box__option-list" role="listbox"><button type="button"
                                                    role="option" class="combo-box__option-item" value="P"
                                                    aria-selected="true">P</button><button type="button" role="option"
                                                    class="combo-box__option-item" value="M"
                                                    aria-selected="false">M</button><button type="button" role="option"
                                                    class="combo-box__option-item" value="G"
                                                    aria-selected="false">G</button><button type="button" role="option"
                                                    class="combo-box__option-item" value="GG"
                                                    aria-selected="false">GG</button><button type="button" role="option"
                                                    class="combo-box__option-item" value="3G"
                                                    aria-selected="false">3G</button><button type="button" role="option"
                                                    class="combo-box__option-item" value="4G"
                                                    aria-selected="false">4G</button><button type="button" role="option"
                                                    class="combo-box__option-item" value="PP"
                                                    aria-selected="false">PP</button></div>

                                            <select class="visually-hidden" name="option3"
                                                form="product-form-template"
                                                data-bind-value="sticky-form-option-template--21579557241133__main-3-value"
                                                aria-label="Tamanho">
                                                <option value="P" selected>P</option>
                                                <option value="M">M</option>
                                                <option value="G">G</option>
                                                <option value="GG">GG</option>
                                                <option value="3G">3G</option>
                                                <option value="4G">4G</option>
                                                <option value="PP">PP</option>
                                            </select>
                                        </combo-box>

                                        <button type="button" is="toggle-button" class="select" aria-expanded="false"
                                            aria-haspopup="listbox"
                                            aria-controls="sticky-form-option-template--21579557241133__main-3-combo-box">
                                            <span id="sticky-form-option-template--21579557241133__main-3-value"
                                                class="select__selected-value">P</span><svg focusable="false" width="12"
                                                height="8" class="icon icon--chevron   " viewBox="0 0 12 8">
                                                <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor"
                                                    stroke-width="1.1"></path>
                                            </svg></button>
                                    </div>
                                </product-variants><product-payment-container
                                    form-id="product-form-template"
                                    class="product-sticky-form__payment-container"><button id="StickyAddToCart"
                                        is="loader-button"
                                        form="product-form-template" type="submit"
                                        data-product-add-to-cart-button data-use-primary
                                        data-button-content="Adicionar à sacola"
                                        class="product-form__add-button button button--primary">Adicionar à
                                        sacola</button>
                                </product-payment-container>
                            </div>
                        </div>
                    </div>
                </product-sticky-form>
                <div class="container">
                    <nav aria-label="Trilha de navegação" class="breadcrumb text--xsmall text--subdued hidden-phone">
                        <ol class="breadcrumb__list" role="list">
                            <li class="breadcrumb__item">
                                <a class="breadcrumb__link" href="../">Página Inicial</a>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="breadcrumb__link" aria-current="page">
                                    <?php echo $nome; ?>
                                </span>
                            </li>
                        </ol>
                    </nav><!-- PRODUCT TOP PART -->
                    <div class="product product--thumbnails-bottom">
                        <product-media form-id="product-form-template"
                            thumbnails-position="bottom" reveal-on-scroll product-handle="camiseta-assembly"
                            class="product__media" style="--largest-image-aspect-ratio: 0.975609756097561">
                            <div class="product__media-list-wrapper" style="max-width: 800px"><flickity-carousel
                                    click-nav flickity-config="{
        &quot;adaptiveHeight&quot;: true,
        &quot;dragThreshold&quot;: 10,
        &quot;initialIndex&quot;: &quot;.is-initial-selected&quot;,
        &quot;fade&quot;: false,
        &quot;draggable&quot;: &quot;&gt;1&quot;,
        &quot;contain&quot;: true,
        &quot;cellSelector&quot;: &quot;.product__media-item:not(.is-filtered)&quot;,
        &quot;percentPosition&quot;: false,
        &quot;pageDots&quot;: false,
        &quot;prevNextButtons&quot;: false
      }" id="product-template-media-list" class="product__media-list">
                                
                                <?php
                                    $count = 0;
                                    foreach($img as $image){
                                        $count += 1;
                                ?>
                                    <div id="product-template--21579557241133__main-<?php echo $count; ?>"
                                        class="product__media-item  <?php echo ($count == 1) ? 'is-initial-selected is-selected' : ''?> "
                                        data-media-type="image" data-media-id="<?php echo $count ; ?>"
                                        data-original-position="<?php echo $count - 1; ?>">
                                        <div class="product__media-image-wrapper aspect-ratio aspect-ratio--natural"
                                            style="padding-bottom: 102.5%; --aspect-ratio: 0.975609756097561">
                                            <img sizes="(max-width: 999px) calc(100vw - 48px), 640px"
                                                height="820" width="800" alt="<?php echo $nome; ?>"
                                                src="<?php echo $image;?>"
                                                >
                                                
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                                </flickity-carousel></div><flickity-controls
                                controls="product-template-media-list"
                                class="product__media-nav">
                                <button
                                    class="product__media-prev-next hidden-pocket hidden-lap-and-up tap-area tap-area--large"
                                    aria-label="Anterior" data-action="prev"><svg focusable="false" width="17"
                                        height="14" class="icon icon--nav-arrow-left  icon--direction-aware "
                                        viewBox="0 0 17 14">
                                        <path d="M17 7H2M8 1L2 7l6 6" stroke="currentColor" stroke-width="1.1"
                                            fill="none"></path>
                                    </svg></button><scroll-shadow class="product__thumbnail-scroll-shadow ">
                                    <div class="product__thumbnail-list hide-scrollbar">
                                        <div class="product__thumbnail-list-inner">
                                            <?php
                                                $count = 0;
                                                foreach($img as $image){
                                                    $count += 1;
                                            ?>
                                            <button type="button" tabindex="-1"
                                                reveal class="product__thumbnail-item  " <?php echo ($count == 1) ? 'aria-current="true"' : '' ; ?>
                                                aria-controls="product-template--21579557241133__main-<?php echo $count; ?>"
                                                data-media-id="<?php echo $count; ?>" data-action="select">
                                                <div class="product__thumbnail">
                                                    <img loading="lazy" sizes="(max-width: 999px) 72px, 60px"
                                                        height="820" width="800" alt="<?php echo $nome; ?>"
                                                        src="<?php echo $image; ?>"
                                                </div>
                                            </button>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </scroll-shadow>

                                <button
                                    class="product__media-prev-next hidden-pocket hidden-lap-and-up tap-area tap-aera--large"
                                    aria-label="Próxima" data-action="next"><svg focusable="false" width="17"
                                        height="14" class="icon icon--nav-arrow-right  icon--direction-aware "
                                        viewBox="0 0 17 14">
                                        <path d="M0 7h15M9 1l6 6-6 6" stroke="currentColor" stroke-width="1.1"
                                            fill="none"></path>
                                    </svg></button>
                            </flickity-controls><product-image-zoom product-handle="camiseta-assembly"
                                id="product-template-zoom" class="pswp"
                                tabindex="-1" role="dialog">
                                <div class="pswp__bg"></div>

                                <div class="pswp__scroll-wrap">
                                    <div class="pswp__container">
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                    </div>

                                    <div class="pswp__ui pswp__ui--hidden">
                                        <div class="pswp__top-bar">
                                            <button class="pswp__button pswp__button--close prev-next-button"
                                                data-action="pswp-close" title="Fechar"><svg focusable="false"
                                                    width="14" height="14" class="icon icon--close   "
                                                    viewBox="0 0 14 14">
                                                    <path d="M13 13L1 1M13 1L1 13" stroke="currentColor"
                                                        stroke-width="1.1" fill="none"></path>
                                                </svg></button>
                                        </div>

                                        <div class="pswp__prev-next-buttons hidden-pocket">
                                            <button class="pswp__button prev-next-button prev-next-button--prev"
                                                data-action="pswp-prev" title="Anterior"><svg focusable="false"
                                                    width="17" height="14"
                                                    class="icon icon--nav-arrow-left  icon--direction-aware "
                                                    viewBox="0 0 17 14">
                                                    <path d="M17 7H2M8 1L2 7l6 6" stroke="currentColor"
                                                        stroke-width="1.1" fill="none"></path>
                                                </svg></button>
                                            <button class="pswp__button prev-next-button prev-next-button--next"
                                                data-action="pswp-next" title="Próxima"><svg focusable="false"
                                                    width="17" height="14"
                                                    class="icon icon--nav-arrow-right  icon--direction-aware "
                                                    viewBox="0 0 17 14">
                                                    <path d="M0 7h15M9 1l6 6-6 6" stroke="currentColor"
                                                        stroke-width="1.1" fill="none"></path>
                                                </svg></button>
                                        </div>

                                        <div class="pswp__dots-nav-wrapper hidden-lap-and-up">
                                            <button class="tap-area tap-area--large" data-action="pswp-prev">
                                                <span class="visually-hidden">Anterior</span><svg focusable="false"
                                                    width="17" height="14"
                                                    class="icon icon--nav-arrow-left  icon--direction-aware "
                                                    viewBox="0 0 17 14">
                                                    <path d="M17 7H2M8 1L2 7l6 6" stroke="currentColor"
                                                        stroke-width="1.1" fill="none"></path>
                                                </svg></button>

                                            <div class="dots-nav dots-nav--centered">
                                                <!-- This will be fill at runtime as the number of items will be dynamic -->
                                            </div>

                                            <button class="tap-area tap-area--large" data-action="pswp-next">
                                                <span class="visually-hidden">Próxima</span><svg focusable="false"
                                                    width="17" height="14"
                                                    class="icon icon--nav-arrow-right  icon--direction-aware "
                                                    viewBox="0 0 17 14">
                                                    <path d="M0 7h15M9 1l6 6-6 6" stroke="currentColor"
                                                        stroke-width="1.1" fill="none"></path>
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                            </product-image-zoom>
                        </product-media>
                        <style>
                            @media screen and (max-width: 600px) {
                                .product__info {
                                    margin-left: -7px;
                                    margin-right: -7px;
                                }
                            }
                        </style>
                        <style>
                            .product__media-image-wrapper {
                                border-radius: var(--block-border-radius-reduced) var(--block-border-radius-reduced) !important;
                            }
                        </style>
                        <div class="product__info">
                            <!-- PRODUCT META -->
                            <product-meta form-id="product-form-template"
                                price-class="price--large" class="product-meta">
                                <h1 class="product-meta__title heading h3">
                                    <?php echo $nome; ?>
                                </h1>



                                <!-- ESTRELAS APP DE REVIEW -->
                                <div style="margin: -17px 1px -11px 0px">
                                    <!-- Start Areviews Collection Rating Code -->
                                    <div class='areviews_header_stars'></div>

                                    <!-- End Areviews Collection Rating Code -->
                                </div>

                                <!-- ESTRELAS APP DE REVIEW -->





                                <div class="product-meta__price-list-container" role="region" aria-live="polite">
                                    <div class="price-list" data-product-price-list><span class="price price--large">
                                            <span class="visually-hidden">Preço promocional</span>R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></span></div>

                                    <div class="product-meta__label-list label-list" data-product-label-list></div>

                                </div>

                                <!--Inicio 12x Marcos atualização por js-->
                                <div class="atualizacao-marcos" style="margin-top:15px">

                                    <p id="juros" style="display:none"> 1.2161 </p>
                                    <p class="parcelamento"
                                        style="font-size:15px;margin-bottom:-18px;top: -21px;position: relative;"><svg
                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18"
                                            viewBox="0 0 32 32" style="
    top: 4px;
    position: relative;">
                                            <path
                                                d="M 5 6 C 3.355469 6 2 7.355469 2 9 L 2 23 C 2 24.644531 3.355469 26 5 26 L 27 26 C 28.644531 26 30 24.644531 30 23 L 30 9 C 30 7.355469 28.644531 6 27 6 Z M 5 8 L 27 8 C 27.566406 8 28 8.433594 28 9 L 28 11 L 5 11 L 5 13 L 28 13 L 28 23 C 28 23.566406 27.566406 24 27 24 L 5 24 C 4.433594 24 4 23.566406 4 23 L 4 9 C 4 8.433594 4.433594 8 5 8 Z">
                                            </path>
                                        </svg> em até 12x de <span style="color: var(--color-parcel-prod);"> <b
                                                id="parcela">R$ <?php echo number_format(ceil($preco /12), 2, ",", " ") ;?></b></span></p>

                                    <link
                                        href="../cdn/shop/t/10/assets/parcelamentobfdd.css?v=103717487089465993121699758872"
                                        rel="stylesheet" type="text/css" media="all" />

                                    <div class="backdrop-modal-parcel" id="backdrop-modal-parcel">
                                        <div class="modal-parcel" id="modal-parcel">
                                            <div class="modal-parcel-content">


                                                <div onclick="toggleModal()" class="modal-close-button"
                                                    id="modal-close-button">
                                                    <svg width="25" height="25" viewBox="0 0 12 12" fill="none"
                                                        xmlns="https://www.w3.org/2000/svg" class="IconClose">
                                                        <path d="M9 3L3 9" stroke="var(--color-primary-parcelamento)"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                        </path>
                                                        <path d="M3 3L9 9" stroke="var(--color-primary-parcelamento)"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                        </path>
                                                    </svg>
                                                </div>

                                                <div class="modal-parcel-title">
                                                    Formas de pagamento
                                                </div>

                                                <input name="payment" type="radio" id="payment-type-1" checked>
                                                <input name="payment" type="radio" id="payment-type-2">
                                                <input name="payment" type="radio" id="payment-type-3">

                                                <div class="modal-parcel-payments">

                                                    <!--Botão Cartão-->
                                                    <label class="modal-parcel-payment" for="payment-type-1"
                                                        id="label-type-1">
                                                        <div>
                                                            <svg class="payment-icon-card" width="40" height="25"
                                                                viewBox="0 0 40 25" fill="none"
                                                                xmlns="https://www.w3.org/2000/svg">
                                                                <path d="M7.327 8.092h4.253v2.87H7.327v-2.87z"
                                                                    fill="var(--color-active-parcelamento)">
                                                                </path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M2.792 0h34.416C38.75 0 40 1.143 40 2.552v19.896C40 23.858 38.75 25 37.208 25H2.792C1.25 25 0 23.857 0 22.448V2.552C0 1.142 1.25 0 2.792 0zm11.58 5.539H4.536v7.975h9.838V5.539zM4.45 19.46h5.518V16.91H4.449v2.552zm8.528 0h5.518V16.91h-5.518v2.552zm8.528 0h5.518V16.91h-5.518v2.552zm8.528 0h5.518V16.91h-5.518v2.552z"
                                                                    fill="var(--color-active-parcelamento)">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            Cartão de crédito
                                                        </div>
                                                    </label>

                                                    <!--Botão PIX-->
                                                    <label class="modal-parcel-payment" for="payment-type-2"
                                                        id="label-type-2">
                                                        <div>
                                                            <svg width="22" viewBox="0 0 22 22" fill="none"
                                                                xmlns="https://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M4.51548 5.1526C4.54582 5.08862 4.58126 5.05531 4.61352 5.02498L4.61353 5.02498C4.62098 5.01797 4.62827 5.01112 4.63528 5.00409L5.77372 3.8643L5.77385 3.86417C6.72274 2.91434 7.67153 1.9646 8.61835 1.01354C9.11044 0.520208 9.68883 0.187017 10.3741 0.0630388C11.4794 -0.137134 12.4533 0.139234 13.288 0.894726C13.3789 0.976438 13.4643 1.06361 13.5497 1.15079C13.5818 1.18348 13.6138 1.21618 13.6461 1.24858C14.9015 2.50457 16.1556 3.76185 17.4098 5.01913L17.4115 5.02087C17.4193 5.02872 17.4275 5.03637 17.4358 5.04418C17.47 5.07617 17.5069 5.11072 17.5339 5.17197C17.5025 5.17197 17.4731 5.17213 17.445 5.17228H17.4449C17.3925 5.17256 17.3447 5.17281 17.2968 5.17197C16.3037 5.14485 15.4766 5.50646 14.781 6.21158C14.0613 6.94225 13.3358 7.66652 12.6104 8.39069L12.6102 8.39084L12.6102 8.39087C12.3048 8.69573 11.9994 9.00057 11.6945 9.30587L11.6629 9.33791C11.6317 9.36971 11.6008 9.40115 11.567 9.43114C11.3287 9.64552 10.9976 9.65198 10.7529 9.44535C10.7178 9.41518 10.685 9.38188 10.6528 9.3491L10.6527 9.34908L10.6253 9.32137L9.56114 8.25606L9.55937 8.25429C8.85027 7.54455 8.14117 6.8348 7.43322 6.12506C6.9772 5.66789 6.43874 5.36569 5.80753 5.2288C5.55762 5.17456 5.30514 5.1526 5.05008 5.15389C4.87875 5.1526 4.70742 5.1526 4.51548 5.1526ZM0.00386455 10.7084C0.0464263 10.6634 0.054063 10.6061 0.061631 10.5493L0.0644092 10.5289C0.162311 9.83667 0.439271 9.22582 0.926204 8.72733C1.48614 8.15392 2.05352 7.58683 2.6207 7.01994L2.62075 7.01989L2.621 7.01964C2.90449 6.7363 3.18793 6.453 3.47037 6.16898C3.52061 6.11862 3.56569 6.0915 3.64041 6.11733C3.6767 6.12977 3.71795 6.12802 3.7589 6.12629H3.75891C3.77319 6.12568 3.78744 6.12508 3.80143 6.12508C3.92471 6.12508 4.04785 6.12585 4.17095 6.12662H4.17104H4.17109C4.43771 6.1283 4.7041 6.12997 4.9711 6.12378C5.7131 6.1057 6.3237 6.37174 6.84412 6.90123C7.5331 7.603 8.22933 8.29806 8.92547 8.99303L8.92559 8.99315L8.92561 8.99317C9.2876 9.35455 9.64957 9.71591 10.0105 10.0782C10.2849 10.3532 10.6095 10.5173 10.9972 10.5547C11.4223 10.596 11.8011 10.4837 12.1347 10.2215C12.2158 10.1583 12.2893 10.0847 12.3614 10.0123L12.3614 10.0123L12.8154 9.55832L12.8154 9.5583C13.7216 8.65219 14.6274 7.7465 15.5303 6.83795C15.8859 6.48022 16.3058 6.25551 16.8018 6.16898C16.9391 6.14439 17.0788 6.14322 17.2175 6.14204L17.2385 6.14186C17.4402 6.141 17.6425 6.14129 17.8447 6.14158H17.845L18.1479 6.14186C18.1615 6.14186 18.1753 6.14285 18.189 6.14383C18.2197 6.14603 18.2501 6.14821 18.2768 6.13928C18.4635 6.07471 18.573 6.17932 18.6928 6.30071C19.4592 7.07419 20.2295 7.84379 20.9997 8.61339L20.9998 8.61354L21 8.61368C21.4895 9.10184 21.8141 9.68041 21.9365 10.3623C22.1362 11.4755 21.8682 12.4699 21.0876 13.2887C20.5355 13.8683 19.9669 14.4327 19.3986 14.9968L19.3984 14.9971C19.1247 15.2687 18.8512 15.5403 18.5795 15.8135C18.5241 15.869 18.4713 15.8974 18.394 15.8729C18.343 15.8562 18.2903 15.8572 18.238 15.8582C18.2323 15.8583 18.2266 15.8584 18.2209 15.8585C18.2142 15.8586 18.2075 15.8587 18.2008 15.8587L17.8647 15.8584C17.641 15.8581 17.4175 15.8578 17.1934 15.8587C16.5429 15.8612 15.9928 15.6236 15.5329 15.1639C15.0741 14.7039 14.615 14.2443 14.156 13.7849L14.154 13.7829C13.5415 13.1698 12.9292 12.5568 12.3176 11.943C11.9814 11.6059 11.5808 11.4394 11.1054 11.4536C10.6868 11.4652 10.3235 11.6098 10.0259 11.9068C9.70389 12.2284 9.38185 12.55 9.06109 12.8728C8.78428 13.1504 8.50713 13.4275 8.22995 13.7047C7.74479 14.1899 7.25954 14.6752 6.77585 15.1626C6.30051 15.6417 5.72856 15.878 5.05612 15.8767H3.8375C3.82567 15.8767 3.81346 15.8758 3.80118 15.8749C3.77469 15.873 3.74791 15.871 3.72414 15.878C3.56441 15.9258 3.47037 15.8393 3.36603 15.7347C2.58925 14.9495 1.80732 14.1682 1.02539 13.3868C0.53202 12.8948 0.215127 12.3085 0.083732 11.6227C0.0744763 11.5736 0.0672157 11.523 0.0600389 11.4731L0.0515274 11.4148C0.05176 11.3992 0.052707 11.3834 0.0536549 11.3676C0.0579556 11.2958 0.0622765 11.2238 0 11.1656C0.00386455 11.0119 0.00386455 10.8608 0.00386455 10.7084ZM4.71962 16.8482C4.65361 16.8481 4.58581 16.8479 4.5153 16.8479C4.54641 16.9134 4.58419 16.9488 4.61858 16.981C4.62691 16.9888 4.63504 16.9964 4.64283 17.0042C5.65482 18.0187 6.66939 19.0346 7.68267 20.0491L7.68423 20.0507C7.78203 20.1487 7.87943 20.2473 7.97685 20.3459C8.22587 20.5979 8.47504 20.85 8.73153 21.0942C9.31507 21.6495 10.0171 21.9504 10.8184 21.9943C11.7974 22.0473 12.654 21.7309 13.3522 21.0386C14.4014 19.9977 15.4438 18.9515 16.4863 17.9052C16.8121 17.5781 17.138 17.251 17.4641 16.9241C17.4687 16.9195 17.4741 16.9152 17.4797 16.9107C17.5022 16.8926 17.527 16.8726 17.5105 16.826C17.463 16.826 17.4153 16.8258 17.3673 16.8257C17.2709 16.8254 17.1736 16.8251 17.0764 16.826C16.9025 16.8273 16.7311 16.8053 16.5611 16.773C15.8861 16.6452 15.3167 16.3236 14.8337 15.838C14.1357 15.1374 13.4365 14.438 12.7374 13.7385C12.3875 13.3884 12.0377 13.0384 11.6879 12.6882C11.6828 12.6829 11.6777 12.6777 11.6726 12.6724C11.6364 12.6348 11.5999 12.5969 11.5604 12.5629C11.4071 12.4325 11.2319 12.386 11.0322 12.4235C10.8802 12.4532 10.7669 12.5358 10.6612 12.6417C9.6062 13.7007 8.54989 14.7584 7.49229 15.8148C7.38924 15.9181 7.28361 16.0201 7.17153 16.1131C6.56609 16.6116 5.86532 16.8415 5.08725 16.8479C4.96691 16.8488 4.84657 16.8485 4.71962 16.8482Z"
                                                                        fill="var(--color-active-parcelamento)">
                                                                    </path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0">
                                                                        <rect width="22" height="22" fill="white">
                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            PIX
                                                        </div>
                                                    </label>



                                                    <!--Botão Boleto-->
                                                    <label class="modal-parcel-payment" for="payment-type-3"
                                                        id="label-type-3">
                                                        <div>
                                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                                xmlns="https://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M0 3.66602H1.1V18.3327H0V3.66602ZM2.2 3.66602H4.4V18.3327H2.2V3.66602ZM6.6 3.66602H7.7V18.3327H6.6V3.66602ZM8.8 3.66602H12.1V18.3327H8.8V3.66602ZM13.2 3.66602H14.3V18.3327H13.2V3.66602ZM16.5 3.66602H17.6V18.3327H16.5V3.66602ZM18.7 3.66602H19.8V18.3327H18.7V3.66602ZM20.9 3.66602H22V18.3327H20.9V3.66602Z"
                                                                    fill="var(--color-active-parcelamento)">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            Boleto
                                                        </div>
                                                    </label>

                                                </div>


                                                <!--Conteudo - cartao de credito-->
                                                <div class="modal-parcel-method card-method">

                                                    <ul class="modal-parcel-list">
                                                        <li class="modal-parcel-list-item">
                                                            <span>À vista</span>
                                                            <span>Total: <span id="total-a-vista">R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros2" style="display:none"> 1.0764 </p>
                                                            <span>2x de <span id="taxa-segunda-parcela">R$
                                                                    48,38</span></span>
                                                            <span>Total: <span id="total-segunda-parcela">R$
                                                                    96,77</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros3" style="display:none"> 1.0923 </p>
                                                            <span>3x de <span id="taxa-terceira-parcela">R$
                                                                    32,73</span></span>
                                                            <span>Total: <span id="total-terceira-parcela">R$
                                                                    98,20</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros4" style="display:none"> 1.1086 </p>
                                                            <span>4x de <span id="taxa-quarta-parcela">R$
                                                                    24,92</span></span>
                                                            <span>Total: <span id="total-quarta-parcela">R$
                                                                    99,66</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros5" style="display:none"> 1.1231 </p>
                                                            <span>5x de <span id="taxa-quinta-parcela">R$
                                                                    20,19</span></span>
                                                            <span>Total: <span id="total-quinta-parcela">R$
                                                                    100,97</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros6" style="display:none"> 1.1365 </p>
                                                            <span>6x de <span id="taxa-sexta-parcela">R$
                                                                    17,03</span></span>
                                                            <span>Total: <span id="total-sexta-parcela">R$
                                                                    102,17</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros7" style="display:none"> 1.1472 </p>
                                                            <span>7x de <span id="taxa-setima-parcela">R$
                                                                    14,73</span></span>
                                                            <span>Total: <span id="total-setima-parcela">R$
                                                                    103,13</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros8" style="display:none"> 1.1623 </p>
                                                            <span>8x de <span id="taxa-oitava-parcela">R$
                                                                    13,06</span></span>
                                                            <span>Total: <span id="total-oitava-parcela">R$
                                                                    104,49</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros9" style="display:none"> 1.1769 </p>
                                                            <span>9x de <span id="taxa-nona-parcela">R$
                                                                    11,76</span></span>
                                                            <span>Total: <span id="total-nona-parcela">R$
                                                                    105,80</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros10" style="display:none"> 1.1865 </p>
                                                            <span>10x de <span id="taxa-decima-parcela">R$
                                                                    10,67</span></span>
                                                            <span>Total: <span id="total-decima-parcela">R$
                                                                    106,67</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros11" style="display:none"> 1.2012 </p>
                                                            <span>11x de <span id="taxa-decima-primeira-parcela">R$
                                                                    9,82</span></span>
                                                            <span>Total: <span id="total-decima-primeira-parcela">R$
                                                                    107,99</span></span>
                                                        </li>
                                                        <li class="modal-parcel-list-item">

                                                            <p id="juros12" style="display:none"> 1.2161 </p>
                                                            <span>12x de <span id="taxa-decima-segunda-parcela">R$
                                                                    9,11</span></span>
                                                            <span>Total: <span id="total-decima-segunda-parcela">R$
                                                                    109,33</span></span>
                                                        </li>
                                                    </ul>

                                                    <div style="padding: 5px;width: 100%"></div>
                                                </div>


                                                <!--Conteudo - PIX-->
                                                <div class="modal-parcel-method pix-method">
                                                    <div class="modal-parcel-informations">
                                                        <div class="modal-parcel-pricing">

                                                            <p id="pixdesc" style="display:none"> 1 </p>
                                                            <div class="modal-parcel-price-cash">
                                                                <span id="total-pix">R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></span>
                                                            </div>
                                                            <div class="modal-parcel-price-description">
                                                                À vista no PIX </strong>
                                                            </div>
                                                        </div>

                                                        <div class="modal-parcel-extra">
                                                            <svg width="24" height="24" viewBox="0 0 36 36" fill="none"
                                                                xmlns="https://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M5.14282 27.6426H7.71489V29.5712H5.14282V27.6426Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M28.9286 21.8574C27.53 21.8574 26.1628 22.2722 24.9999 23.0492C23.837 23.8262 22.9307 24.9306 22.3955 26.2227C21.8602 27.5149 21.7202 28.9367 21.9931 30.3084C22.2659 31.6801 22.9394 32.9401 23.9284 33.9291C24.9173 34.918 26.1773 35.5915 27.549 35.8644C28.9208 36.1372 30.3426 35.9972 31.6347 35.462C32.9268 34.9268 34.0312 34.0204 34.8083 32.8575C35.5853 31.6946 36 30.3274 36 28.9288C35.9978 27.0541 35.2521 25.2567 33.9264 23.931C32.6007 22.6054 30.8034 21.8596 28.9286 21.8574ZM33.552 27.143L28.0974 32.5976C27.9768 32.7181 27.8133 32.7858 27.6429 32.7858C27.4724 32.7858 27.3089 32.7181 27.1884 32.5976L24.4614 29.87C24.3443 29.7487 24.2795 29.5863 24.281 29.4178C24.2824 29.2492 24.35 29.088 24.4692 28.9688C24.5884 28.8496 24.7497 28.782 24.9182 28.7805C25.0868 28.7791 25.2491 28.8439 25.3704 28.961L27.6429 31.2341L32.643 26.234C32.7643 26.1169 32.9267 26.0521 33.0952 26.0536C33.2638 26.055 33.425 26.1226 33.5442 26.2418C33.6634 26.361 33.731 26.5222 33.7325 26.6908C33.7339 26.8594 33.6691 27.0217 33.552 27.143Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M12.8572 16.0723H15.4292V18.0008H12.8572V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M20.5714 16.0723H23.1428V18.0008H20.5714V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M5.14282 21.8574H7.71489V23.786H5.14282V21.8574Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M12.8572 21.8574H15.4292V23.786H12.8572V21.8574Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M5.14282 16.0723H7.71489V18.0008H5.14282V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M7.7143 6.42857C8.05498 6.42755 8.38142 6.29177 8.62232 6.05087C8.86322 5.80997 8.999 5.48354 9.00002 5.14286V1.28571C9.00002 0.944722 8.86456 0.617695 8.62344 0.376577C8.38232 0.135459 8.0553 0 7.7143 0C7.37331 0 7.04628 0.135459 6.80517 0.376577C6.56405 0.617695 6.42859 0.944722 6.42859 1.28571V5.14286C6.42961 5.48354 6.56539 5.80997 6.80629 6.05087C7.04719 6.29177 7.37362 6.42755 7.7143 6.42857Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M17.9999 6.42857C18.3406 6.42755 18.6671 6.29177 18.908 6.05087C19.1489 5.80997 19.2846 5.48354 19.2857 5.14286V1.28571C19.2857 0.944722 19.1502 0.617695 18.9091 0.376577C18.668 0.135459 18.3409 0 17.9999 0C17.659 0 17.3319 0.135459 17.0908 0.376577C16.8497 0.617695 16.7142 0.944722 16.7142 1.28571V5.14286C16.7153 5.48354 16.851 5.80997 17.0919 6.05087C17.3328 6.29177 17.6593 6.42755 17.9999 6.42857Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M28.2857 6.42857C28.6264 6.42755 28.9528 6.29177 29.1937 6.05087C29.4346 5.80997 29.5704 5.48354 29.5714 5.14286V1.28571C29.5714 0.944722 29.436 0.617695 29.1949 0.376577C28.9537 0.135459 28.6267 0 28.2857 0C27.9447 0 27.6177 0.135459 27.3766 0.376577C27.1355 0.617695 27 0.944722 27 1.28571V5.14286C27.001 5.48354 27.1368 5.80997 27.3777 6.05087C27.6186 6.29177 27.945 6.42755 28.2857 6.42857Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M28.2858 16.0723H30.8572V18.0008H28.2858V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M34.0714 3.85742H30.8571V5.14314C30.8571 5.82512 30.5862 6.47917 30.104 6.96141C29.6218 7.44365 28.9677 7.71456 28.2857 7.71456C27.6037 7.71456 26.9497 7.44365 26.4674 6.96141C25.9852 6.47917 25.7143 5.82512 25.7143 5.14314V3.85742H20.5714V5.14314C20.5714 5.82512 20.3005 6.47917 19.8183 6.96141C19.336 7.44365 18.682 7.71456 18 7.71456C17.318 7.71456 16.664 7.44365 16.1817 6.96141C15.6995 6.47917 15.4286 5.82512 15.4286 5.14314V3.85742H10.2857V5.14314C10.2857 5.82512 10.0148 6.47917 9.53256 6.96141C9.05032 7.44365 8.39627 7.71456 7.71429 7.71456C7.0323 7.71456 6.37825 7.44365 5.89601 6.96141C5.41377 6.47917 5.14286 5.82512 5.14286 5.14314V3.85742H1.92857C1.41755 3.85895 0.927899 4.06263 0.566552 4.42397C0.205205 4.78532 0.0015262 5.27497 0 5.78599V10.286H36V5.78599C35.9985 5.27497 35.7948 4.78532 35.4334 4.42397C35.0721 4.06263 34.5824 3.85895 34.0714 3.85742Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M12.8572 27.6426H15.4292V29.5712H12.8572V27.6426Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M0 11.5723V31.5008C0.0015262 32.0119 0.205205 32.5015 0.566552 32.8629C0.927899 33.2242 1.41755 33.4279 1.92857 33.4294H21.8976C21.3109 32.5034 20.9123 31.471 20.7246 30.3909C20.5369 29.3109 20.5637 28.2045 20.8036 27.1349C21.0435 26.0652 21.4917 25.0533 22.1227 24.1569C22.7536 23.2605 23.555 22.4971 24.481 21.9104C25.4069 21.3236 26.4394 20.925 27.5194 20.7373C28.5994 20.5496 29.7059 20.5765 30.7755 20.8164C31.8451 21.0562 32.8571 21.5045 33.7535 22.1354C34.6499 22.7664 35.4133 23.5677 36 24.4937V11.5723H0ZM9 29.5723C9 29.9133 8.86454 30.2403 8.62342 30.4814C8.3823 30.7225 8.05528 30.858 7.71429 30.858H5.14286C4.80186 30.858 4.47484 30.7225 4.23372 30.4814C3.9926 30.2403 3.85714 29.9133 3.85714 29.5723V27.6437C3.85714 27.3027 3.9926 26.9757 4.23372 26.7346C4.47484 26.4934 4.80186 26.358 5.14286 26.358H7.71429C8.05528 26.358 8.3823 26.4934 8.62342 26.7346C8.86454 26.9757 9 27.3027 9 27.6437V29.5723ZM9 23.7866C9 24.1275 8.86454 24.4546 8.62342 24.6957C8.3823 24.9368 8.05528 25.0723 7.71429 25.0723H5.14286C4.80186 25.0723 4.47484 24.9368 4.23372 24.6957C3.9926 24.4546 3.85714 24.1275 3.85714 23.7866V21.858C3.85714 21.517 3.9926 21.19 4.23372 20.9488C4.47484 20.7077 4.80186 20.5723 5.14286 20.5723H7.71429C8.05528 20.5723 8.3823 20.7077 8.62342 20.9488C8.86454 21.19 9 21.517 9 21.858V23.7866ZM9 18.0008C9 18.3418 8.86454 18.6689 8.62342 18.91C8.3823 19.1511 8.05528 19.2866 7.71429 19.2866H5.14286C4.80186 19.2866 4.47484 19.1511 4.23372 18.91C3.9926 18.6689 3.85714 18.3418 3.85714 18.0008V16.0723C3.85714 15.7313 3.9926 15.4042 4.23372 15.1631C4.47484 14.922 4.80186 14.7866 5.14286 14.7866H7.71429C8.05528 14.7866 8.3823 14.922 8.62342 15.1631C8.86454 15.4042 9 15.7313 9 16.0723V18.0008ZM16.7143 29.5723C16.7143 29.9133 16.5788 30.2403 16.3377 30.4814C16.0966 30.7225 15.7696 30.858 15.4286 30.858H12.8571C12.5162 30.858 12.1891 30.7225 11.948 30.4814C11.7069 30.2403 11.5714 29.9133 11.5714 29.5723V27.6437C11.5714 27.3027 11.7069 26.9757 11.948 26.7346C12.1891 26.4934 12.5162 26.358 12.8571 26.358H15.4286C15.7696 26.358 16.0966 26.4934 16.3377 26.7346C16.5788 26.9757 16.7143 27.3027 16.7143 27.6437V29.5723ZM16.7143 23.7866C16.7143 24.1275 16.5788 24.4546 16.3377 24.6957C16.0966 24.9368 15.7696 25.0723 15.4286 25.0723H12.8571C12.5162 25.0723 12.1891 24.9368 11.948 24.6957C11.7069 24.4546 11.5714 24.1275 11.5714 23.7866V21.858C11.5714 21.517 11.7069 21.19 11.948 20.9488C12.1891 20.7077 12.5162 20.5723 12.8571 20.5723H15.4286C15.7696 20.5723 16.0966 20.7077 16.3377 20.9488C16.5788 21.19 16.7143 21.517 16.7143 21.858V23.7866ZM16.7143 18.0008C16.7143 18.3418 16.5788 18.6689 16.3377 18.91C16.0966 19.1511 15.7696 19.2866 15.4286 19.2866H12.8571C12.5162 19.2866 12.1891 19.1511 11.948 18.91C11.7069 18.6689 11.5714 18.3418 11.5714 18.0008V16.0723C11.5714 15.7313 11.7069 15.4042 11.948 15.1631C12.1891 14.922 12.5162 14.7866 12.8571 14.7866H15.4286C15.7696 14.7866 16.0966 14.922 16.3377 15.1631C16.5788 15.4042 16.7143 15.7313 16.7143 16.0723V18.0008ZM23.1429 21.858H20.5714V23.7866C20.7419 23.7866 20.9054 23.8543 21.026 23.9748C21.1466 24.0954 21.2143 24.2589 21.2143 24.4294C21.2143 24.5999 21.1466 24.7634 21.026 24.884C20.9054 25.0045 20.7419 25.0723 20.5714 25.0723C20.2304 25.0723 19.9034 24.9368 19.6623 24.6957C19.4212 24.4546 19.2857 24.1275 19.2857 23.7866V21.858C19.2857 21.517 19.4212 21.19 19.6623 20.9488C19.9034 20.7077 20.2304 20.5723 20.5714 20.5723H23.1429C23.3134 20.5723 23.4769 20.64 23.5974 20.7606C23.718 20.8811 23.7857 21.0446 23.7857 21.2151C23.7857 21.3856 23.718 21.5491 23.5974 21.6697C23.4769 21.7902 23.3134 21.858 23.1429 21.858ZM24.4286 18.0008C24.4286 18.3418 24.2931 18.6689 24.052 18.91C23.8109 19.1511 23.4838 19.2866 23.1429 19.2866H20.5714C20.2304 19.2866 19.9034 19.1511 19.6623 18.91C19.4212 18.6689 19.2857 18.3418 19.2857 18.0008V16.0723C19.2857 15.7313 19.4212 15.4042 19.6623 15.1631C19.9034 14.922 20.2304 14.7866 20.5714 14.7866H23.1429C23.4838 14.7866 23.8109 14.922 24.052 15.1631C24.2931 15.4042 24.4286 15.7313 24.4286 16.0723V18.0008ZM32.1429 18.0008C32.1429 18.3418 32.0074 18.6689 31.7663 18.91C31.5252 19.1511 31.1981 19.2866 30.8571 19.2866H28.2857C27.9447 19.2866 27.6177 19.1511 27.3766 18.91C27.1355 18.6689 27 18.3418 27 18.0008V16.0723C27 15.7313 27.1355 15.4042 27.3766 15.1631C27.6177 14.922 27.9447 14.7866 28.2857 14.7866H30.8571C31.1981 14.7866 31.5252 14.922 31.7663 15.1631C32.0074 15.4042 32.1429 15.7313 32.1429 16.0723V18.0008Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0">
                                                                        <rect width="36" height="36" fill="white">

                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <div class="modal-parcel-extra-text">
                                                                Pague com o PIX e priorizamos o despacho em 1 hora!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Conteudo - Boleto-->
                                                <div class="modal-parcel-method boleto-method">
                                                    <div class="modal-parcel-informations">
                                                        <div class="modal-parcel-pricing">

                                                            <p id="boletodesc" style="display:none"> 1.0 </p>
                                                            <div class="modal-parcel-price-cash">
                                                                <span id="total-boleto">R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></span>
                                                            </div>
                                                            <div class="modal-parcel-price-description">
                                                                À vista no Boleto
                                                            </div>
                                                        </div>

                                                        <div class="modal-parcel-extra">
                                                            <svg width="24" height="24" viewBox="0 0 36 36" fill="none"
                                                                xmlns="https://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M5.14282 27.6426H7.71489V29.5712H5.14282V27.6426Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M28.9286 21.8574C27.53 21.8574 26.1628 22.2722 24.9999 23.0492C23.837 23.8262 22.9307 24.9306 22.3955 26.2227C21.8602 27.5149 21.7202 28.9367 21.9931 30.3084C22.2659 31.6801 22.9394 32.9401 23.9284 33.9291C24.9173 34.918 26.1773 35.5915 27.549 35.8644C28.9208 36.1372 30.3426 35.9972 31.6347 35.462C32.9268 34.9268 34.0312 34.0204 34.8083 32.8575C35.5853 31.6946 36 30.3274 36 28.9288C35.9978 27.0541 35.2521 25.2567 33.9264 23.931C32.6007 22.6054 30.8034 21.8596 28.9286 21.8574ZM33.552 27.143L28.0974 32.5976C27.9768 32.7181 27.8133 32.7858 27.6429 32.7858C27.4724 32.7858 27.3089 32.7181 27.1884 32.5976L24.4614 29.87C24.3443 29.7487 24.2795 29.5863 24.281 29.4178C24.2824 29.2492 24.35 29.088 24.4692 28.9688C24.5884 28.8496 24.7497 28.782 24.9182 28.7805C25.0868 28.7791 25.2491 28.8439 25.3704 28.961L27.6429 31.2341L32.643 26.234C32.7643 26.1169 32.9267 26.0521 33.0952 26.0536C33.2638 26.055 33.425 26.1226 33.5442 26.2418C33.6634 26.361 33.731 26.5222 33.7325 26.6908C33.7339 26.8594 33.6691 27.0217 33.552 27.143Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M12.8572 16.0723H15.4292V18.0008H12.8572V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M20.5714 16.0723H23.1428V18.0008H20.5714V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M5.14282 21.8574H7.71489V23.786H5.14282V21.8574Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M12.8572 21.8574H15.4292V23.786H12.8572V21.8574Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M5.14282 16.0723H7.71489V18.0008H5.14282V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M7.7143 6.42857C8.05498 6.42755 8.38142 6.29177 8.62232 6.05087C8.86322 5.80997 8.999 5.48354 9.00002 5.14286V1.28571C9.00002 0.944722 8.86456 0.617695 8.62344 0.376577C8.38232 0.135459 8.0553 0 7.7143 0C7.37331 0 7.04628 0.135459 6.80517 0.376577C6.56405 0.617695 6.42859 0.944722 6.42859 1.28571V5.14286C6.42961 5.48354 6.56539 5.80997 6.80629 6.05087C7.04719 6.29177 7.37362 6.42755 7.7143 6.42857Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M17.9999 6.42857C18.3406 6.42755 18.6671 6.29177 18.908 6.05087C19.1489 5.80997 19.2846 5.48354 19.2857 5.14286V1.28571C19.2857 0.944722 19.1502 0.617695 18.9091 0.376577C18.668 0.135459 18.3409 0 17.9999 0C17.659 0 17.3319 0.135459 17.0908 0.376577C16.8497 0.617695 16.7142 0.944722 16.7142 1.28571V5.14286C16.7153 5.48354 16.851 5.80997 17.0919 6.05087C17.3328 6.29177 17.6593 6.42755 17.9999 6.42857Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M28.2857 6.42857C28.6264 6.42755 28.9528 6.29177 29.1937 6.05087C29.4346 5.80997 29.5704 5.48354 29.5714 5.14286V1.28571C29.5714 0.944722 29.436 0.617695 29.1949 0.376577C28.9537 0.135459 28.6267 0 28.2857 0C27.9447 0 27.6177 0.135459 27.3766 0.376577C27.1355 0.617695 27 0.944722 27 1.28571V5.14286C27.001 5.48354 27.1368 5.80997 27.3777 6.05087C27.6186 6.29177 27.945 6.42755 28.2857 6.42857Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M28.2858 16.0723H30.8572V18.0008H28.2858V16.0723Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M34.0714 3.85742H30.8571V5.14314C30.8571 5.82512 30.5862 6.47917 30.104 6.96141C29.6218 7.44365 28.9677 7.71456 28.2857 7.71456C27.6037 7.71456 26.9497 7.44365 26.4674 6.96141C25.9852 6.47917 25.7143 5.82512 25.7143 5.14314V3.85742H20.5714V5.14314C20.5714 5.82512 20.3005 6.47917 19.8183 6.96141C19.336 7.44365 18.682 7.71456 18 7.71456C17.318 7.71456 16.664 7.44365 16.1817 6.96141C15.6995 6.47917 15.4286 5.82512 15.4286 5.14314V3.85742H10.2857V5.14314C10.2857 5.82512 10.0148 6.47917 9.53256 6.96141C9.05032 7.44365 8.39627 7.71456 7.71429 7.71456C7.0323 7.71456 6.37825 7.44365 5.89601 6.96141C5.41377 6.47917 5.14286 5.82512 5.14286 5.14314V3.85742H1.92857C1.41755 3.85895 0.927899 4.06263 0.566552 4.42397C0.205205 4.78532 0.0015262 5.27497 0 5.78599V10.286H36V5.78599C35.9985 5.27497 35.7948 4.78532 35.4334 4.42397C35.0721 4.06263 34.5824 3.85895 34.0714 3.85742Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M12.8572 27.6426H15.4292V29.5712H12.8572V27.6426Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                    <path
                                                                        d="M0 11.5723V31.5008C0.0015262 32.0119 0.205205 32.5015 0.566552 32.8629C0.927899 33.2242 1.41755 33.4279 1.92857 33.4294H21.8976C21.3109 32.5034 20.9123 31.471 20.7246 30.3909C20.5369 29.3109 20.5637 28.2045 20.8036 27.1349C21.0435 26.0652 21.4917 25.0533 22.1227 24.1569C22.7536 23.2605 23.555 22.4971 24.481 21.9104C25.4069 21.3236 26.4394 20.925 27.5194 20.7373C28.5994 20.5496 29.7059 20.5765 30.7755 20.8164C31.8451 21.0562 32.8571 21.5045 33.7535 22.1354C34.6499 22.7664 35.4133 23.5677 36 24.4937V11.5723H0ZM9 29.5723C9 29.9133 8.86454 30.2403 8.62342 30.4814C8.3823 30.7225 8.05528 30.858 7.71429 30.858H5.14286C4.80186 30.858 4.47484 30.7225 4.23372 30.4814C3.9926 30.2403 3.85714 29.9133 3.85714 29.5723V27.6437C3.85714 27.3027 3.9926 26.9757 4.23372 26.7346C4.47484 26.4934 4.80186 26.358 5.14286 26.358H7.71429C8.05528 26.358 8.3823 26.4934 8.62342 26.7346C8.86454 26.9757 9 27.3027 9 27.6437V29.5723ZM9 23.7866C9 24.1275 8.86454 24.4546 8.62342 24.6957C8.3823 24.9368 8.05528 25.0723 7.71429 25.0723H5.14286C4.80186 25.0723 4.47484 24.9368 4.23372 24.6957C3.9926 24.4546 3.85714 24.1275 3.85714 23.7866V21.858C3.85714 21.517 3.9926 21.19 4.23372 20.9488C4.47484 20.7077 4.80186 20.5723 5.14286 20.5723H7.71429C8.05528 20.5723 8.3823 20.7077 8.62342 20.9488C8.86454 21.19 9 21.517 9 21.858V23.7866ZM9 18.0008C9 18.3418 8.86454 18.6689 8.62342 18.91C8.3823 19.1511 8.05528 19.2866 7.71429 19.2866H5.14286C4.80186 19.2866 4.47484 19.1511 4.23372 18.91C3.9926 18.6689 3.85714 18.3418 3.85714 18.0008V16.0723C3.85714 15.7313 3.9926 15.4042 4.23372 15.1631C4.47484 14.922 4.80186 14.7866 5.14286 14.7866H7.71429C8.05528 14.7866 8.3823 14.922 8.62342 15.1631C8.86454 15.4042 9 15.7313 9 16.0723V18.0008ZM16.7143 29.5723C16.7143 29.9133 16.5788 30.2403 16.3377 30.4814C16.0966 30.7225 15.7696 30.858 15.4286 30.858H12.8571C12.5162 30.858 12.1891 30.7225 11.948 30.4814C11.7069 30.2403 11.5714 29.9133 11.5714 29.5723V27.6437C11.5714 27.3027 11.7069 26.9757 11.948 26.7346C12.1891 26.4934 12.5162 26.358 12.8571 26.358H15.4286C15.7696 26.358 16.0966 26.4934 16.3377 26.7346C16.5788 26.9757 16.7143 27.3027 16.7143 27.6437V29.5723ZM16.7143 23.7866C16.7143 24.1275 16.5788 24.4546 16.3377 24.6957C16.0966 24.9368 15.7696 25.0723 15.4286 25.0723H12.8571C12.5162 25.0723 12.1891 24.9368 11.948 24.6957C11.7069 24.4546 11.5714 24.1275 11.5714 23.7866V21.858C11.5714 21.517 11.7069 21.19 11.948 20.9488C12.1891 20.7077 12.5162 20.5723 12.8571 20.5723H15.4286C15.7696 20.5723 16.0966 20.7077 16.3377 20.9488C16.5788 21.19 16.7143 21.517 16.7143 21.858V23.7866ZM16.7143 18.0008C16.7143 18.3418 16.5788 18.6689 16.3377 18.91C16.0966 19.1511 15.7696 19.2866 15.4286 19.2866H12.8571C12.5162 19.2866 12.1891 19.1511 11.948 18.91C11.7069 18.6689 11.5714 18.3418 11.5714 18.0008V16.0723C11.5714 15.7313 11.7069 15.4042 11.948 15.1631C12.1891 14.922 12.5162 14.7866 12.8571 14.7866H15.4286C15.7696 14.7866 16.0966 14.922 16.3377 15.1631C16.5788 15.4042 16.7143 15.7313 16.7143 16.0723V18.0008ZM23.1429 21.858H20.5714V23.7866C20.7419 23.7866 20.9054 23.8543 21.026 23.9748C21.1466 24.0954 21.2143 24.2589 21.2143 24.4294C21.2143 24.5999 21.1466 24.7634 21.026 24.884C20.9054 25.0045 20.7419 25.0723 20.5714 25.0723C20.2304 25.0723 19.9034 24.9368 19.6623 24.6957C19.4212 24.4546 19.2857 24.1275 19.2857 23.7866V21.858C19.2857 21.517 19.4212 21.19 19.6623 20.9488C19.9034 20.7077 20.2304 20.5723 20.5714 20.5723H23.1429C23.3134 20.5723 23.4769 20.64 23.5974 20.7606C23.718 20.8811 23.7857 21.0446 23.7857 21.2151C23.7857 21.3856 23.718 21.5491 23.5974 21.6697C23.4769 21.7902 23.3134 21.858 23.1429 21.858ZM24.4286 18.0008C24.4286 18.3418 24.2931 18.6689 24.052 18.91C23.8109 19.1511 23.4838 19.2866 23.1429 19.2866H20.5714C20.2304 19.2866 19.9034 19.1511 19.6623 18.91C19.4212 18.6689 19.2857 18.3418 19.2857 18.0008V16.0723C19.2857 15.7313 19.4212 15.4042 19.6623 15.1631C19.9034 14.922 20.2304 14.7866 20.5714 14.7866H23.1429C23.4838 14.7866 23.8109 14.922 24.052 15.1631C24.2931 15.4042 24.4286 15.7313 24.4286 16.0723V18.0008ZM32.1429 18.0008C32.1429 18.3418 32.0074 18.6689 31.7663 18.91C31.5252 19.1511 31.1981 19.2866 30.8571 19.2866H28.2857C27.9447 19.2866 27.6177 19.1511 27.3766 18.91C27.1355 18.6689 27 18.3418 27 18.0008V16.0723C27 15.7313 27.1355 15.4042 27.3766 15.1631C27.6177 14.922 27.9447 14.7866 28.2857 14.7866H30.8571C31.1981 14.7866 31.5252 14.922 31.7663 15.1631C32.0074 15.4042 32.1429 15.7313 32.1429 16.0723V18.0008Z"
                                                                        fill="var(--color-primary-parcelamento)">
                                                                    </path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0">
                                                                        <rect width="36" height="36" fill="white">

                                                                        </rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <div class="modal-parcel-extra-text">
                                                                O prazo de pagamento via boleto bancário é de 3 dias
                                                                corridos.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <script>
                                        $('#backdrop-modal-parcel').appendTo($('body'))
                                        function toggleModal() {
                                            document.querySelector("body").classList.toggle("active-modal")
                                        }

                                        document.getElementById("modal-parcel").onclick = function (event) {
                                            event.stopPropagation()
                                        }

                                        function closeModal() {
                                            document.getElementById("modal-close-button").style.display = "none";
                                        }


                                    </script>




                                </div>
                                <!--Fim 12x Marcos atualização por js--><product-payment-terms
                                    form-id="product-form-template">
                                    <form method="post" action="https://debugstyle.com/cart/add"
                                        id="product-installment-form-template"
                                        accept-charset="UTF-8" class="shopify-product-form"
                                        enctype="multipart/form-data"><input type="hidden" name="form_type"
                                            value="product" /><input type="hidden" name="utf8" value="✓" /><input
                                            type="hidden" name="id" value="47448003641645"><input type="hidden"
                                            name="product-id" value="8953098567981" /><input type="hidden"
                                            name="section-id" value="template--21579557241133__main" /></form>
                                </product-payment-terms>
                            </product-meta>
                            <div class="product-form"><product-variants handle="camiseta-assembly"
                                    form-id="product-form-template" update-url
                                    hide-sold-out-variants class="product-form__variants">
                                    <div class="product-form__option-selector" data-selector-type="block">
                                        <div class="block-swatch-list">
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-1"
                                                    value="P" checked="checked"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-1">P</label>
                                            </div>
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-2"
                                                    value="M"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-2">M</label>
                                            </div>
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-3"
                                                    value="G"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-3">G</label>
                                            </div>
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-4"
                                                    value="GG"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-4">GG</label>
                                            </div>
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-5"
                                                    value="3G"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-5">3G</label>
                                            </div>
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-6"
                                                    value="4G"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-6">4G</label>
                                            </div>
                                            <div class="block-swatch">
                                                <input class="block-swatch__radio visually-hidden" type="radio"
                                                    name="option3"
                                                    form="product-form-template"
                                                    id="option-template--21579557241133__main-camisetas-8953098567981-3-7"
                                                    value="PP"
                                                    data-bind-value="option-template--21579557241133__main-camisetas-8953098567981-3-value">
                                                <label class="block-swatch__item"
                                                    for="option-template--21579557241133__main-camisetas-8953098567981-3-7">PP</label>
                                            </div>
                                        </div>
                                    </div><noscript>
                                        <label class="input__block-label"
                                            for="product-select-template">Variante</label>

                                        <div class="select-wrapper">
                                            <select class="select" autocomplete="off"
                                                id="product-select-template"
                                                name="id"
                                                form="product-form-template">
                                                <option selected="selected" value="47448003641645"
                                                    data-sku="006288304001-579873">Masculino / Preta / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?>
                                                </option>
                                                <option value="47448004067629" data-sku="006288304002-579873">Masculino
                                                    / Preta / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004329773" data-sku="006288304003-579873">Masculino
                                                    / Preta / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004821293" data-sku="006288304004-579873">Masculino
                                                    / Preta / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004952365" data-sku="006288304005-579873">Masculino
                                                    / Preta / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424467956013" data-sku="006288304006-579873">Masculino
                                                    / Preta / 4G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003510573" data-sku="006288305101-579873">Masculino
                                                    / Verde / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004034861" data-sku="006288305102-579873">Masculino
                                                    / Verde / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004395309" data-sku="006288305103-579873">Masculino
                                                    / Verde / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004788525" data-sku="006288305104-579873">Masculino
                                                    / Verde / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005312813" data-sku="006288305105-579873">Masculino
                                                    / Verde / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424467988781" data-sku="006288305106-579873">Masculino
                                                    / Verde / 4G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003412269" data-sku="006288331201-579873">Masculino
                                                    / Marinho / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004002093" data-sku="006288331202-579873">Masculino
                                                    / Marinho / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004493613" data-sku="006288331203-579873">Masculino
                                                    / Marinho / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004526381" data-sku="006288331204-579873">Masculino
                                                    / Marinho / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005247277" data-sku="006288331205-579873">Masculino
                                                    / Marinho / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48064846790957" data-sku="006288331206-579873">Masculino
                                                    / Marinho / 4G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003477805" data-sku="006288302401-579873">Masculino
                                                    / Cinza / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003969325" data-sku="006288302402-579873">Masculino
                                                    / Cinza / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004362541" data-sku="006288302403-579873">Masculino
                                                    / Cinza / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004919597" data-sku="006288302404-579873">Masculino
                                                    / Cinza / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005214509" data-sku="006288302405-579873">Masculino
                                                    / Cinza / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468021549" data-sku="006288302406-579873">Masculino
                                                    / Cinza / 4G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003608877" data-sku="006288301401-579873">Masculino
                                                    / Branca / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003903789" data-sku="006288301402-579873">Masculino
                                                    / Branca / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004460845" data-sku="006288301403-579873">Masculino
                                                    / Branca / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004690221" data-sku="006288301404-579873">Masculino
                                                    / Branca / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005083437" data-sku="006288301405-579873">Masculino
                                                    / Branca / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468054317" data-sku="006288301406-579873">Masculino
                                                    / Branca / 4G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003543341" data-sku="006288305401-579873">Masculino
                                                    / Vermelho / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003936557" data-sku="006288305402-579873">Masculino
                                                    / Vermelho / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004231469" data-sku="006288305403-579873">Masculino
                                                    / Vermelho / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004854061" data-sku="006288305404-579873">Masculino
                                                    / Vermelho / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005116205" data-sku="006288305405-579873">Masculino
                                                    / Vermelho / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48064846823725" data-sku="006288305406-579873">Masculino
                                                    / Vermelho / 4G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003871021" data-sku="006288404002-579873">Feminino /
                                                    Preta / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004264237" data-sku="006288404003-579873">Feminino /
                                                    Preta / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004624685" data-sku="006288404004-579873">Feminino /
                                                    Preta / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005017901" data-sku="006288404005-579873">Feminino /
                                                    Preta / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48065761804589" data-sku="006288404006-579873">Feminino /
                                                    Preta / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003248429" data-sku="006288404001-579873">Feminino /
                                                    Preta / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003838253" data-sku="006288405102-579873">Feminino /
                                                    Verde / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004297005" data-sku="006288405103-579873">Feminino /
                                                    Verde / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004886829" data-sku="006288405104-579873">Feminino /
                                                    Verde / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005148973" data-sku="006288405105-579873">Feminino /
                                                    Verde / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468119853" data-sku="006288405106-579873">Feminino /
                                                    Verde / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003281197" data-sku="006288405101-579873">Feminino /
                                                    Verde / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003805485" data-sku="006288431202-579873">Feminino /
                                                    Marinho / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004165933" data-sku="006288431203-579873">Feminino /
                                                    Marinho / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004657453" data-sku="006288431204-579873">Feminino /
                                                    Marinho / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005345581" data-sku="006288431205-579873">Feminino /
                                                    Marinho / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468152621" data-sku="006288431206-579873">Feminino /
                                                    Marinho / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003313965" data-sku="006288431201-579873">Feminino /
                                                    Marinho / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003674413" data-sku="006288402402-579873">Feminino /
                                                    Cinza / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004100397" data-sku="006288402403-579873">Feminino /
                                                    Cinza / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004722989" data-sku="006288402404-579873">Feminino /
                                                    Cinza / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005280045" data-sku="006288402405-579873">Feminino /
                                                    Cinza / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468185389" data-sku="006288402406-579873">Feminino /
                                                    Cinza / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003346733" data-sku="006288402401-579873">Feminino /
                                                    Cinza / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003707181" data-sku="006288401402-579873">Feminino /
                                                    Branca / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004198701" data-sku="006288401403-579873">Feminino /
                                                    Branca / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004559149" data-sku="006288401404-579873">Feminino /
                                                    Branca / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004985133" data-sku="006288401405-579873">Feminino /
                                                    Branca / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468218157" data-sku="006288401406-579873">Feminino /
                                                    Branca / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003379501" data-sku="006288401401-579873">Feminino /
                                                    Branca / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003739949" data-sku="006288405402-579873">Feminino /
                                                    Vermelho / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004133165" data-sku="006288405403-579873">Feminino /
                                                    Vermelho / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004591917" data-sku="006288405404-579873">Feminino /
                                                    Vermelho / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448005181741" data-sku="006288405405-579873">Feminino /
                                                    Vermelho / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="48424468250925" data-sku="006288405406-579873">Feminino /
                                                    Vermelho / 3G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448003445037" data-sku="006288405401-579873">Feminino /
                                                    Vermelho / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option disabled="disabled" value="47448003772717"
                                                    data-sku="006288400102-579873">Feminino / Amarelo / P - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?>
                                                </option>
                                                <option value="47448004428077" data-sku="006288400103-579873">Feminino /
                                                    Amarelo / M - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option value="47448004755757" data-sku="006288400104-579873">Feminino /
                                                    Amarelo / G - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                                <option disabled="disabled" value="47448005050669"
                                                    data-sku="006288400105-579873">Feminino / Amarelo / GG - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?>
                                                </option>
                                                <option value="47448003576109" data-sku="006288400101-579873">Feminino /
                                                    Amarelo / PP - R$ <?php echo number_format($preco, 2, ',', ' ') ; ?></option>
                                            </select><svg focusable="false" width="12" height="8"
                                                class="icon icon--chevron   " viewBox="0 0 12 8">
                                                <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor"
                                                    stroke-width="1.1"></path>
                                            </svg>
                                        </div>
                                    </noscript>

                                </product-variants>




























                                <div class="product-form__buy-buttons">
                                    <form method="post" action="https://debugstyle.com/cart/add"
                                        id="product-form-template"
                                        accept-charset="UTF-8" class="shopify-product-form"
                                        enctype="multipart/form-data" is="product-form"><input type="hidden"
                                            name="form_type" value="product" /><input type="hidden" name="utf8"
                                            value="✓" /><input type="hidden" disabled name="id" value="47448003641645">


                                        <product-payment-container
                                            form-id="product-form-template"
                                            id="MainPaymentContainer" class="product-form__payment-container">
                                            <button id="StickyAddToCart" type="submit" is="loader-button"
                                                data-use-primary data-product-add-to-cart-button
                                                data-button-content="Adicionar à sacola"
                                                class="product-form__add-button button button--primary button--full">Adicionar
                                                à sacola</button></product-payment-container><input type="hidden"
                                            name="product-id" value="8953098567981" /><input type="hidden"
                                            name="section-id" value="template--21579557241133__main" />
                                    </form>
                                </div><store-pickup form-id="product-form-template"
                                    class="product-form__store-availability-container"></store-pickup>
                            </div><drawer-content
                                id="product-template-size-chart-drawer"
                                class="drawer drawer--large hidden-phone">
                                <span class="drawer__overlay"></span>

                                <header class="drawer__header">
                                    <p class="drawer__title heading h6">Tabela de Tamanhos (Camisetas)</p>

                                    <button type="button" class="drawer__close-button tap-area" data-action="close"
                                        title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="drawer__content drawer__content--padded-start">
                                    <div class="rte">
                                        <div><img style="display: block; margin-left: auto; margin-right: auto;"
                                                height="581" width="465" alt=""
                                                src="../../cdn.shopify.com/s/files/1/0827/2907/4989/files/2_32690a35-1268-4f63-882b-b2a6058f7076440f.png?v=1714394857"
                                                data-mce-fragment="1"
                                                data-mce-src="../../cdn.shopify.com/s/files/1/0827/2907/4989/files/2_32690a35-1268-4f63-882b-b2a6058f7076440f.png?v=1714394857">
                                        </div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div><img alt=""
                                                src="../../cdn.shopify.com/s/files/1/0827/2907/4989/files/1_5f04c4ab-4320-4122-9dc1-cad46138d030440f.png?v=1714394857"
                                                width="474" height="593"
                                                style="display: block; margin-left: auto; margin-right: auto;"></div>
                                    </div>
                                </div>
                            </drawer-content><popover-content
                                id="product-template-size-chart-popover"
                                class="popover hidden-lap-and-up">
                                <span class="popover__overlay"></span>

                                <header class="popover__header">
                                    <p class="popover__title heading h6">Tabela de Tamanhos (Camisetas)</p>

                                    <button type="button" class="popover__close-button tap-area tap-area--large"
                                        data-action="close" title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="popover__content">
                                    <div class="rte">
                                        <div><img style="display: block; margin-left: auto; margin-right: auto;"
                                                height="581" width="465" alt=""
                                                src="../../cdn.shopify.com/s/files/1/0827/2907/4989/files/2_32690a35-1268-4f63-882b-b2a6058f7076440f.png?v=1714394857"
                                                data-mce-fragment="1"
                                                data-mce-src="../../cdn.shopify.com/s/files/1/0827/2907/4989/files/2_32690a35-1268-4f63-882b-b2a6058f7076440f.png?v=1714394857">
                                        </div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div><img alt=""
                                                src="../../cdn.shopify.com/s/files/1/0827/2907/4989/files/1_5f04c4ab-4320-4122-9dc1-cad46138d030440f.png?v=1714394857"
                                                width="474" height="593"
                                                style="display: block; margin-left: auto; margin-right: auto;"></div>
                                    </div>
                                </div>
                            </popover-content>
                            <script>


                                ! function (f, b, e, v, n, t, s) {
                                    if (f.fbq) return;
                                    n = f.fbq = function () {
                                        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                                    };
                                    if (!f._fbq) f._fbq = n;
                                    n.push = n;
                                    n.loaded = !0;
                                    n.version = '2.0';
                                    n.queue = [];
                                    t = b.createElement(e);
                                    t.async = !0;
                                    t.src = v;
                                    s = b.getElementsByTagName(e)[0];
                                    s.parentNode.insertBefore(t, s)
                                }(window, document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
                                var _learnq = _learnq || [];
                                const buttonsAdd = document.querySelectorAll('.product-form__add-button');
                                buttonsAdd.forEach(
                                    add => {
                                        add.addEventListener('click', function () {
                                            console.log("AAAAAA");
                                            _learnq.push(['track', 'Added to Cart']);
                                            // let quant = Number(document.getElementsByName('quantity')[0].getAttribute('data-current-qty'));
                                            // quant = quant == 0? 1: quant;
                                            let price = 89.9;
                                            if (_learnq.length > 0) {
                                                fbq('init', '648031776406408');
                                                fbq('track', 'AddToCart', {
                                                    content_type: 'product_group',
                                                    language: document.documentElement.lang,
                                                    referrer: document.referrer,
                                                    page_hostname: document.domain,
                                                    currency: 'BRL',
                                                    value: price * 1,
                                                    content_name: ['<?php echo $nome; ?>'],
                                                    content_ids: ['8953098567981'],
                                                    contents: [{ "id": "8953098567981", "item_price": price, "quantity": 1 }],
                                                    content_category: "" != "" ? "" : "All",
                                                    event_time: 1716859354,
                                                });
                                            };
                                        });
                                    });
                            </script>
                            <noscript><img height="1" width="1" style="display:none"
                                    src="https://www.facebook.com/tr?id=648031776406408&amp;ev=AddToCart&amp;noscript=1" /></noscript>


                            <script>


                                ! function (f, b, e, v, n, t, s) {
                                    if (f.fbq) return;
                                    n = f.fbq = function () {
                                        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                                    };
                                    if (!f._fbq) f._fbq = n;
                                    n.push = n;
                                    n.loaded = !0;
                                    n.version = '2.0';
                                    n.queue = [];
                                    t = b.createElement(e);
                                    t.async = !0;
                                    t.src = v;
                                    s = b.getElementsByTagName(e)[0];
                                    s.parentNode.insertBefore(t, s)
                                }(window, document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
                                fbq('init', '648031776406408');
                                // let quant = Number(document.getElementsByName('quantity')[0].getAttribute('data-current-qty'));
                                // quant = quant == 0? 1: quant;
                                let price = 89.9;
                                fbq('track', 'ViewContent', {
                                    content_type: 'product_group',
                                    language: document.documentElement.lang,
                                    referrer: document.referrer,
                                    page_hostname: document.domain,
                                    currency: 'BRL',
                                    value: price,
                                    content_name: ['<?php echo $nome; ?>'],
                                    content_ids: ['8953098567981'],
                                    contents: [{ "id": "8953098567981", "item_price": price, "quantity": 1 }],
                                    content_category: "" != "" ? "" : "All",
                                    event_time: 1716859354,
                                });
                            </script>
                            <noscript><img height="1" width="1" style="display:none"
                                    src="https://www.facebook.com/tr?id=648031776406408&amp;ev=ViewContent&amp;noscript=1"></noscript>








                            <style>
                                @media(max-width:768px) {
                                    .cartoes {
                                        max-height: auto;
                                        width: var(--bandeiras-w-mobile);
                                        margin-top: 0px;
                                        margin-bottom: 5px;
                                    }
                                }

                                @media(min-width:769px) {
                                    .cartoes {
                                        max-height: auto;
                                        width: var(--bandeiras-w-desktop);
                                        margin-top: 0px;
                                        margin-bottom: 5px;
                                    }
                                }

                                .security__payment p {
                                    color: #565656;
                                    text-align: center;
                                    margin: 10px auto 0;
                                    font-size: var(--bandeiras-t-fonte);
                                }
                            </style>


                            <center style="
    background: white;
    border: 1px solid #f6f6f8;
    border-radius: var(--arredonda-box);
    padding: 2px;
    margin-top: 8px;
    box-shadow: 0px 5px 6px -5px #f6f6f8;">
                                <div class="security__payment" style="margin: 0px 0px 8px;">
                                    <p
                                        style="padding: 0px 0px 0px 0px;background: #f6f6f8;margin-top: -6px;border-radius: 4px;">
                                        <i style="color: #3A2A2F;"></i> <b>FORMAS DE PAGAMENTO</b></p>
                                </div>

                                <center>
                                    <div class="payment-list2">



                                        <img class="cartoes"
                                            src="../cdn/shop/t/10/assets/VISAc8ca.svg?v=7465368297978241971699758872"
                                            alt="Visa">
                                        <img class="cartoes"
                                            src="../cdn/shop/t/10/assets/MASTERCARDce3f.svg?v=103501794080103759821699758872"
                                            alt="Mastercard">
                                        <img class="cartoes"
                                            src="../cdn/shop/t/10/assets/HIPERCARD5eff.svg?v=118215574350710381721699758872"
                                            alt="Hipercard">
                                        <img class="cartoes"
                                            src="../cdn/shop/t/10/assets/ELO86e2.svg?v=57363376252194448211699758872"
                                            alt="Elo">
                                        <img class="cartoes"
                                            src="../cdn/shop/t/10/assets/AMEXd865.svg?v=156721050750723113511699758872"
                                            alt="Amex">
                                        <img class="cartoes" id="correcaodiscover"
                                            src="../cdn/shop/t/10/assets/DISCOVER2fea.svg?v=51104008127175826311699758872"
                                            alt="Discover">
                                        <img class="cartoes"
                                            src="../cdn/shop/t/10/assets/PIX2028.svg?v=106757000572440841201699758872"
                                            alt="Pix">
                                        <img class="cartoes" id="correcaoboleto"
                                            src="../cdn/shop/t/10/assets/BOLETO6278.svg?v=134186075353682252391699758872"
                                            alt="boleto">

                                        <style>
                                            @media (min-width: 640px) {
                                                #correcaoboleto {
                                                    width: calc(var(--bandeiras-w-desktop) - 0.4%) !important;
                                                }

                                                #correcaodiscover {
                                                    width: calc(var(--bandeiras-w-desktop) + 0.4%) !important;
                                                    margin-top: -2px;
                                                }
                                            }

                                            @media (max-width: 640px) {
                                                #correcaoboleto {
                                                    width: calc(var(--bandeiras-w-mobile) - 0.4%) !important;
                                                }

                                                #correcaodiscover {
                                                    width: calc(var(--bandeiras-w-mobile) + 0.4%) !important;
                                                    margin-top: -1px;
                                                }
                                            }
                                        </style>



                                    </div>
                                </center>
                            </center>




                            <div style="margin-bottom:-7px"></div>

                            <div class="tag-top-botao"
                                style="padding: 12px 13px 8px 8px;border-radius: var(--arredonda-box);background: var(--box-primaria);box-shadow: 0px 5px 6px -5px #f6f6f8;border: 1px solid #f6f6f8;display: flex;font-weight: 100;margin: 15px 0px 0px 0px;margin-bottom: -10px;">
                                <div style="margin-right: 18px;"><img
                                        src="../cdn/shop/t/10/assets/Iconseg9dc4.png?v=169004261544512003851699758872"
                                        alt=""
                                        style="width: 20pt;vertical-align: middle;margin-top: -8px;margin-left: 5px;margin-bottom: 0px;">
                                </div>

                                <div style="font-size: 12px; line-height:5px;color:var(--box-sec);">
                                    <p>Pagamentos e informações estão seguros</p><span style="line-height:1.5">
                                        <p>Site oficial com <a href="../policies/privacy-policy"
                                                title="Privacy Policy">todos os direitos reservados</a></p>
                                    </span>
                                </div>
                            </div>
                            <div class="bandeiras-background-top"
                                style="margin-top: 15px; padding: 12px 15px 4px 15px; border-radius: var(--arredonda-box); background: var(--box-primaria);box-shadow: 0px 5px 6px -5px #f6f6f8;border: 1px solid #f6f6f8; display: flex;">
                                <div style="margin-right: 18px">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="23" height="23" x="0" y="0" viewBox="0 0 24 24"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve">
                                        <g>
                                            <g fill="var(--box-titulo)" fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M7 16a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-3 1a3 3 0 1 1 6 0 3 3 0 0 1-6 0zM17.5 15.5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-3 1a3 3 0 1 1 6 0 3 3 0 0 1-6 0z"
                                                    fill="var(--box-titulo)" data-original="var(--box-titulo)"></path>
                                                <path
                                                    d="M13 7.5a1 1 0 0 1 1-1h4a5 5 0 0 1 5 5V15a2 2 0 0 1-2 2h-1.5v-2H21v-3.5a3 3 0 0 0-3-3h-3V12h-2zM9 15h6.5v2H9z"
                                                    fill="var(--box-titulo)" data-original="var(--box-titulo)"></path>
                                                <path
                                                    d="M1 6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v10a1 1 0 0 1-1 1H9v-2h4V6H3v9h2v2H3a2 2 0 0 1-2-2z"
                                                    fill="var(--box-titulo)" data-original="var(--box-titulo)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <span style="margin-top: -5px; margin-bottom: 5px;">
                                    <div style="font-weight: 700; font-size: 14px; color:var(--box-titulo)">
                                        <p>Frete Grátis</p>
                                    </div>
                                    <div style="font-size: 12px; line-height: 10px; color: var(--box-sec);">
                                        <p>Frete grátis em pedidos acima de R$199</p>
                                    </div>
                                    <div style="font-size: 12px; color: var(--box-sec);">
                                        <p>Entrega realizado pelos Correios Brasileiro©.</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div id="shopify-section-template--21579557241133__product-content"
            class="shopify-section shopify-section--product-content">
            <section class="container">
                <div id="product-8953098567981-content" class="product-content anchor">
                    <div class="product-content__tabs anchor" id="product-8953098567981-tabs">
                        <div class="product-tabs">
                            <div class="product-tabs__content">
                                <style>
                                    .rte h1 {
                                        font-size: 30px;
                                    }

                                    .rte h2 {
                                        font-size: 28px;
                                    }

                                    .rte h3 {
                                        font-size: 26px;
                                    }

                                    .rte h4 {
                                        font-size: 24px;
                                    }
                                </style>
                                <div id="block-template--21579557241133__product-content-description"
                                    class="product-tabs__tab-item-wrapper">
                                    <button is="toggle-button"
                                        class="collapsible-toggle heading heading--small hidden-lap-and-up"
                                        aria-controls="block-template--21579557241133__product-content-description-content"
                                        aria-expanded="true">Descrição<svg focusable="false" width="12" height="8"
                                            class="icon icon--chevron   " viewBox="0 0 12 8">
                                            <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor" stroke-width="1.1">
                                            </path>
                                        </svg></button>

                                    <collapsible-content open
                                        id="block-template--21579557241133__product-content-description-content"
                                        class="collapsible">
                                        <div class="product-tabs__tab-item-content rte">
                                            <p data-mce-fragment="1">Esta
                                                <?php echo $nome; ?> é um must-have para programadores apaixonados pelo
                                                Assembly. Com um design exclusivo que apresenta o nome "Assembly," você
                                                pode exibir seu amor por essa linguagem de programação clássica em
                                                grande estilo. Feita com materiais de alta qualidade, esta camiseta
                                                combina conforto e elegância. Adicione um toque de autenticidade ao seu
                                                guarda-roupa de programador com esta peça única.
                                            </p>
                                            <p data-mce-fragment="1"><strong data-mce-fragment="1">Principais
                                                    Características:</strong></p>
                                            <ul data-mce-fragment="1">
                                                <li data-mce-fragment="1">Design exclusivo.</li>
                                                <li data-mce-fragment="1">Confortável e durável.</li>
                                                <li data-mce-fragment="1">Ideal para entusiastas do Assembly.</li>
                                                <li data-mce-fragment="1">Seja notado por outros programadores.</li>
                                                <li data-mce-fragment="1">Disponível em tamanhos variados.</li>
                                            </ul>
                                            <p data-mce-fragment="1">Mostre ao mundo o seu compromisso com a programação
                                                Assembly com esta camiseta que é mais do que moda, é uma declaração de
                                                paixão. Peça a sua agora!</p>
                                        </div>
                                        <div class="product-tabs__trust-list hidden-pocket"><button is="toggle-button"
                                                class="product-tabs__trust-title icon-text link text--subdued hidden-phone"
                                                aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-1-drawer"
                                                aria-expanded="false"><svg fill="none" focusable="false" width="26"
                                                    height="24"
                                                    class="icon icon--picto-delivery-truck   product-tabs__trust-icon"
                                                    viewBox="0 0 26 24">
                                                    <path
                                                        d="M17 17H8.68004C8.68004 17 8 16 7 16M17 17V8M17 17H19.32M17 8V3H1V17H5.31996M17 8H23.5L25 12.5V17H22.68C22.68 17 22 16 21 16M21 16C22 16 23 17 23 18C23 19 22 20 21 20C20 20 19 19 19 18C19 17.6527 19.1206 17.3054 19.32 17M21 16C20.3473 16 19.6946 16.426 19.32 17M7 16C8 16 9 17 9 18C9 19 8 20 7 20C6 20 5 19 5 18C5 17.6527 5.12061 17.3054 5.31996 17M7 16C6.3473 16 5.69459 16.426 5.31996 17"
                                                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Rastreio</button>

                                            <button is="toggle-button"
                                                class="product-tabs__trust-title icon-text link text--subdued hidden-tablet-and-up"
                                                aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-1-popover"
                                                aria-expanded="false"><svg fill="none" focusable="false" width="26"
                                                    height="24"
                                                    class="icon icon--picto-delivery-truck   product-tabs__trust-icon"
                                                    viewBox="0 0 26 24">
                                                    <path
                                                        d="M17 17H8.68004C8.68004 17 8 16 7 16M17 17V8M17 17H19.32M17 8V3H1V17H5.31996M17 8H23.5L25 12.5V17H22.68C22.68 17 22 16 21 16M21 16C22 16 23 17 23 18C23 19 22 20 21 20C20 20 19 19 19 18C19 17.6527 19.1206 17.3054 19.32 17M21 16C20.3473 16 19.6946 16.426 19.32 17M7 16C8 16 9 17 9 18C9 19 8 20 7 20C6 20 5 19 5 18C5 17.6527 5.12061 17.3054 5.31996 17M7 16C6.3473 16 5.69459 16.426 5.31996 17"
                                                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Rastreio</button><button is="toggle-button"
                                                class="product-tabs__trust-title icon-text link text--subdued hidden-phone"
                                                aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-2-drawer"
                                                aria-expanded="false"><svg fill="none" focusable="false" width="24"
                                                    height="24"
                                                    class="icon icon--picto-credit-card   product-tabs__trust-icon"
                                                    viewBox="0 0 24 24">
                                                    <path d="M23 8V4H1V8M23 8V20H1V8M23 8H1M5 12H8M19 12V16H12V12H19Z"
                                                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Prioridade</button>

                                            <button is="toggle-button"
                                                class="product-tabs__trust-title icon-text link text--subdued hidden-tablet-and-up"
                                                aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-2-popover"
                                                aria-expanded="false"><svg fill="none" focusable="false" width="24"
                                                    height="24"
                                                    class="icon icon--picto-credit-card   product-tabs__trust-icon"
                                                    viewBox="0 0 24 24">
                                                    <path d="M23 8V4H1V8M23 8V20H1V8M23 8H1M5 12H8M19 12V16H12V12H19Z"
                                                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Prioridade</button><button is="toggle-button"
                                                class="product-tabs__trust-title icon-text link text--subdued hidden-phone"
                                                aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-3-drawer"
                                                aria-expanded="false"><svg fill="none" focusable="false" width="24"
                                                    height="24"
                                                    class="icon icon--picto-customer-support   product-tabs__trust-icon"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.00571 10C4.00571 10 3.50018 2 12 2C20.4997 2 19.9943 10 19.9943 10M4.00571 10C3.33714 10.3333 2 11 2 12.5C2 14 3 15 4.00571 15C4.81028 15 5.67048 15 6 15V10H4.00571ZM19.9943 10C20.6629 10.1667 22 10.9 22 12.5C22 14.1 20.6629 14.8333 19.9943 15M19.9943 10H18V15H19.9943M19.9943 15C20.1629 16.5 19.6 19.5 16 19.5M16 19.5C16 19 15.8 18 15 18C14.2 18 13 18 12.5 18C12 18 10.8 18 10 18C9.2 18 9 19 9 19.5C9 20 9.2 21 10 21C10.8 21 12 21 12.5 21H15C15.8125 21 16 20 16 19.5Z"
                                                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Suporte Profissional</button>

                                            <button is="toggle-button"
                                                class="product-tabs__trust-title icon-text link text--subdued hidden-tablet-and-up"
                                                aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-3-popover"
                                                aria-expanded="false"><svg fill="none" focusable="false" width="24"
                                                    height="24"
                                                    class="icon icon--picto-customer-support   product-tabs__trust-icon"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.00571 10C4.00571 10 3.50018 2 12 2C20.4997 2 19.9943 10 19.9943 10M4.00571 10C3.33714 10.3333 2 11 2 12.5C2 14 3 15 4.00571 15C4.81028 15 5.67048 15 6 15V10H4.00571ZM19.9943 10C20.6629 10.1667 22 10.9 22 12.5C22 14.1 20.6629 14.8333 19.9943 15M19.9943 10H18V15H19.9943M19.9943 15C20.1629 16.5 19.6 19.5 16 19.5M16 19.5C16 19 15.8 18 15 18C14.2 18 13 18 12.5 18C12 18 10.8 18 10 18C9.2 18 9 19 9 19.5C9 20 9.2 21 10 21C10.8 21 12 21 12.5 21H15C15.8125 21 16 20 16 19.5Z"
                                                        stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>Suporte Profissional</button>
                                        </div>
                                    </collapsible-content>
                                </div>
                            </div>
                            <div class="product-tabs__trust-list container hidden-lap-and-up"><button is="toggle-button"
                                    class="product-tabs__trust-title icon-text link text--subdued hidden-phone"
                                    aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-1-drawer"
                                    aria-expanded="false"><svg fill="none" focusable="false" width="26" height="24"
                                        class="icon icon--picto-delivery-truck   product-tabs__trust-icon"
                                        viewBox="0 0 26 24">
                                        <path
                                            d="M17 17H8.68004C8.68004 17 8 16 7 16M17 17V8M17 17H19.32M17 8V3H1V17H5.31996M17 8H23.5L25 12.5V17H22.68C22.68 17 22 16 21 16M21 16C22 16 23 17 23 18C23 19 22 20 21 20C20 20 19 19 19 18C19 17.6527 19.1206 17.3054 19.32 17M21 16C20.3473 16 19.6946 16.426 19.32 17M7 16C8 16 9 17 9 18C9 19 8 20 7 20C6 20 5 19 5 18C5 17.6527 5.12061 17.3054 5.31996 17M7 16C6.3473 16 5.69459 16.426 5.31996 17"
                                            stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>Rastreio</button>

                                <button is="toggle-button"
                                    class="product-tabs__trust-title icon-text link text--subdued hidden-tablet-and-up"
                                    aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-1-popover"
                                    aria-expanded="false"><svg fill="none" focusable="false" width="26" height="24"
                                        class="icon icon--picto-delivery-truck   product-tabs__trust-icon"
                                        viewBox="0 0 26 24">
                                        <path
                                            d="M17 17H8.68004C8.68004 17 8 16 7 16M17 17V8M17 17H19.32M17 8V3H1V17H5.31996M17 8H23.5L25 12.5V17H22.68C22.68 17 22 16 21 16M21 16C22 16 23 17 23 18C23 19 22 20 21 20C20 20 19 19 19 18C19 17.6527 19.1206 17.3054 19.32 17M21 16C20.3473 16 19.6946 16.426 19.32 17M7 16C8 16 9 17 9 18C9 19 8 20 7 20C6 20 5 19 5 18C5 17.6527 5.12061 17.3054 5.31996 17M7 16C6.3473 16 5.69459 16.426 5.31996 17"
                                            stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>Rastreio</button><button is="toggle-button"
                                    class="product-tabs__trust-title icon-text link text--subdued hidden-phone"
                                    aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-2-drawer"
                                    aria-expanded="false"><svg fill="none" focusable="false" width="24" height="24"
                                        class="icon icon--picto-credit-card   product-tabs__trust-icon"
                                        viewBox="0 0 24 24">
                                        <path d="M23 8V4H1V8M23 8V20H1V8M23 8H1M5 12H8M19 12V16H12V12H19Z"
                                            stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>Prioridade</button>

                                <button is="toggle-button"
                                    class="product-tabs__trust-title icon-text link text--subdued hidden-tablet-and-up"
                                    aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-2-popover"
                                    aria-expanded="false"><svg fill="none" focusable="false" width="24" height="24"
                                        class="icon icon--picto-credit-card   product-tabs__trust-icon"
                                        viewBox="0 0 24 24">
                                        <path d="M23 8V4H1V8M23 8V20H1V8M23 8H1M5 12H8M19 12V16H12V12H19Z"
                                            stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>Prioridade</button><button is="toggle-button"
                                    class="product-tabs__trust-title icon-text link text--subdued hidden-phone"
                                    aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-3-drawer"
                                    aria-expanded="false"><svg fill="none" focusable="false" width="24" height="24"
                                        class="icon icon--picto-customer-support   product-tabs__trust-icon"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.00571 10C4.00571 10 3.50018 2 12 2C20.4997 2 19.9943 10 19.9943 10M4.00571 10C3.33714 10.3333 2 11 2 12.5C2 14 3 15 4.00571 15C4.81028 15 5.67048 15 6 15V10H4.00571ZM19.9943 10C20.6629 10.1667 22 10.9 22 12.5C22 14.1 20.6629 14.8333 19.9943 15M19.9943 10H18V15H19.9943M19.9943 15C20.1629 16.5 19.6 19.5 16 19.5M16 19.5C16 19 15.8 18 15 18C14.2 18 13 18 12.5 18C12 18 10.8 18 10 18C9.2 18 9 19 9 19.5C9 20 9.2 21 10 21C10.8 21 12 21 12.5 21H15C15.8125 21 16 20 16 19.5Z"
                                            stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>Suporte Profissional</button>

                                <button is="toggle-button"
                                    class="product-tabs__trust-title icon-text link text--subdued hidden-tablet-and-up"
                                    aria-controls="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-3-popover"
                                    aria-expanded="false"><svg fill="none" focusable="false" width="24" height="24"
                                        class="icon icon--picto-customer-support   product-tabs__trust-icon"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.00571 10C4.00571 10 3.50018 2 12 2C20.4997 2 19.9943 10 19.9943 10M4.00571 10C3.33714 10.3333 2 11 2 12.5C2 14 3 15 4.00571 15C4.81028 15 5.67048 15 6 15V10H4.00571ZM19.9943 10C20.6629 10.1667 22 10.9 22 12.5C22 14.1 20.6629 14.8333 19.9943 15M19.9943 10H18V15H19.9943M19.9943 15C20.1629 16.5 19.6 19.5 16 19.5M16 19.5C16 19 15.8 18 15 18C14.2 18 13 18 12.5 18C12 18 10.8 18 10 18C9.2 18 9 19 9 19.5C9 20 9.2 21 10 21C10.8 21 12 21 12.5 21H15C15.8125 21 16 20 16 19.5Z"
                                            stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>Suporte Profissional</button>
                            </div><drawer-content
                                id="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-1-drawer"
                                class="drawer drawer--large hidden-phone">
                                <span class="drawer__overlay"></span>

                                <header class="drawer__header">
                                    <p class="drawer__title heading h6"><svg fill="none" focusable="false" width="26"
                                            height="24"
                                            class="icon icon--picto-delivery-truck   product-tabs__trust-icon"
                                            viewBox="0 0 26 24">
                                            <path
                                                d="M17 17H8.68004C8.68004 17 8 16 7 16M17 17V8M17 17H19.32M17 8V3H1V17H5.31996M17 8H23.5L25 12.5V17H22.68C22.68 17 22 16 21 16M21 16C22 16 23 17 23 18C23 19 22 20 21 20C20 20 19 19 19 18C19 17.6527 19.1206 17.3054 19.32 17M21 16C20.3473 16 19.6946 16.426 19.32 17M7 16C8 16 9 17 9 18C9 19 8 20 7 20C6 20 5 19 5 18C5 17.6527 5.12061 17.3054 5.31996 17M7 16C6.3473 16 5.69459 16.426 5.31996 17"
                                                stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>Rastreio</p>

                                    <button type="button" class="drawer__close-button tap-area" data-action="close"
                                        title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="drawer__content drawer__content--padded-start">
                                    <div class="rte">
                                        <p>Você receberá automaticamente um código de rastreio para acompanhar todo o
                                            status do seu pedido. </p>
                                    </div>
                                </div>
                            </drawer-content><popover-content
                                id="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-1-popover"
                                class="popover hidden-tablet-and-up">
                                <span class="popover__overlay"></span>

                                <header class="popover__header">
                                    <p class="popover__title heading h6"><svg fill="none" focusable="false" width="26"
                                            height="24"
                                            class="icon icon--picto-delivery-truck   product-tabs__trust-icon"
                                            viewBox="0 0 26 24">
                                            <path
                                                d="M17 17H8.68004C8.68004 17 8 16 7 16M17 17V8M17 17H19.32M17 8V3H1V17H5.31996M17 8H23.5L25 12.5V17H22.68C22.68 17 22 16 21 16M21 16C22 16 23 17 23 18C23 19 22 20 21 20C20 20 19 19 19 18C19 17.6527 19.1206 17.3054 19.32 17M21 16C20.3473 16 19.6946 16.426 19.32 17M7 16C8 16 9 17 9 18C9 19 8 20 7 20C6 20 5 19 5 18C5 17.6527 5.12061 17.3054 5.31996 17M7 16C6.3473 16 5.69459 16.426 5.31996 17"
                                                stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>Rastreio</p>

                                    <button type="button" class="popover__close-button tap-area tap-area--large"
                                        data-action="close" title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="popover__content">
                                    <div class="rte">
                                        <p>Você receberá automaticamente um código de rastreio para acompanhar todo o
                                            status do seu pedido. </p>
                                    </div>
                                </div>
                            </popover-content><drawer-content
                                id="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-2-drawer"
                                class="drawer drawer--large hidden-phone">
                                <span class="drawer__overlay"></span>

                                <header class="drawer__header">
                                    <p class="drawer__title heading h6"><svg fill="none" focusable="false" width="24"
                                            height="24" class="icon icon--picto-credit-card   product-tabs__trust-icon"
                                            viewBox="0 0 24 24">
                                            <path d="M23 8V4H1V8M23 8V20H1V8M23 8H1M5 12H8M19 12V16H12V12H19Z"
                                                stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>Prioridade</p>

                                    <button type="button" class="drawer__close-button tap-area" data-action="close"
                                        title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="drawer__content drawer__content--padded-start">
                                    <div class="rte">
                                        <p>Pedidos realizados no cartão de crédito são processados e enviados mais
                                            rapidamente. </p>
                                    </div>
                                </div>
                            </drawer-content><popover-content
                                id="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-2-popover"
                                class="popover hidden-tablet-and-up">
                                <span class="popover__overlay"></span>

                                <header class="popover__header">
                                    <p class="popover__title heading h6"><svg fill="none" focusable="false" width="24"
                                            height="24" class="icon icon--picto-credit-card   product-tabs__trust-icon"
                                            viewBox="0 0 24 24">
                                            <path d="M23 8V4H1V8M23 8V20H1V8M23 8H1M5 12H8M19 12V16H12V12H19Z"
                                                stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>Prioridade</p>

                                    <button type="button" class="popover__close-button tap-area tap-area--large"
                                        data-action="close" title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="popover__content">
                                    <div class="rte">
                                        <p>Pedidos realizados no cartão de crédito são processados e enviados mais
                                            rapidamente. </p>
                                    </div>
                                </div>
                            </popover-content><drawer-content
                                id="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-3-drawer"
                                class="drawer drawer--large hidden-phone">
                                <span class="drawer__overlay"></span>

                                <header class="drawer__header">
                                    <p class="drawer__title heading h6"><svg fill="none" focusable="false" width="24"
                                            height="24"
                                            class="icon icon--picto-customer-support   product-tabs__trust-icon"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M4.00571 10C4.00571 10 3.50018 2 12 2C20.4997 2 19.9943 10 19.9943 10M4.00571 10C3.33714 10.3333 2 11 2 12.5C2 14 3 15 4.00571 15C4.81028 15 5.67048 15 6 15V10H4.00571ZM19.9943 10C20.6629 10.1667 22 10.9 22 12.5C22 14.1 20.6629 14.8333 19.9943 15M19.9943 10H18V15H19.9943M19.9943 15C20.1629 16.5 19.6 19.5 16 19.5M16 19.5C16 19 15.8 18 15 18C14.2 18 13 18 12.5 18C12 18 10.8 18 10 18C9.2 18 9 19 9 19.5C9 20 9.2 21 10 21C10.8 21 12 21 12.5 21H15C15.8125 21 16 20 16 19.5Z"
                                                stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>Suporte Profissional</p>

                                    <button type="button" class="drawer__close-button tap-area" data-action="close"
                                        title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="drawer__content drawer__content--padded-start">
                                    <div class="rte">
                                        <p>Contamos com uma equipe de suporte especializada, pronta para resolver todos
                                            os seus problemas e tirar suas dúvidas. </p>
                                    </div>
                                </div>
                            </drawer-content><popover-content
                                id="product-template--21579557241133__product-content-553bb9e6-f8b0-4866-a021-6ec528d233a4-trust-3-popover"
                                class="popover hidden-tablet-and-up">
                                <span class="popover__overlay"></span>

                                <header class="popover__header">
                                    <p class="popover__title heading h6"><svg fill="none" focusable="false" width="24"
                                            height="24"
                                            class="icon icon--picto-customer-support   product-tabs__trust-icon"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M4.00571 10C4.00571 10 3.50018 2 12 2C20.4997 2 19.9943 10 19.9943 10M4.00571 10C3.33714 10.3333 2 11 2 12.5C2 14 3 15 4.00571 15C4.81028 15 5.67048 15 6 15V10H4.00571ZM19.9943 10C20.6629 10.1667 22 10.9 22 12.5C22 14.1 20.6629 14.8333 19.9943 15M19.9943 10H18V15H19.9943M19.9943 15C20.1629 16.5 19.6 19.5 16 19.5M16 19.5C16 19 15.8 18 15 18C14.2 18 13 18 12.5 18C12 18 10.8 18 10 18C9.2 18 9 19 9 19.5C9 20 9.2 21 10 21C10.8 21 12 21 12.5 21H15C15.8125 21 16 20 16 19.5Z"
                                                stroke="currentColor" stroke-width="1.1" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>Suporte Profissional</p>

                                    <button type="button" class="popover__close-button tap-area tap-area--large"
                                        data-action="close" title="Fechar"><svg focusable="false" width="14" height="14"
                                            class="icon icon--close   " viewBox="0 0 14 14">
                                            <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="1.1"
                                                fill="none"></path>
                                        </svg></button>
                                </header>

                                <div class="popover__content">
                                    <div class="rte">
                                        <p>Contamos com uma equipe de suporte especializada, pronta para resolver todos
                                            os seus problemas e tirar suas dúvidas. </p>
                                    </div>
                                </div>
                            </popover-content>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="shopify-section-template--21579557241133__product-recommendations"
            class="shopify-section shopify-section--product-recommendations">
            <style>
                #shopify-section-template--21579557241133__product-recommendations {
                    --heading-color: 40, 40, 40;
                    --text-color: 40, 40, 40;
                    --prev-next-button-background: 255, 255, 255;
                    --prev-next-button-color: 40, 40, 40;

                    --section-background: 255, 255, 255;
                    --section-products-per-row: 2;
                }

                @media screen and (min-width: 741px) {
                    #shopify-section-template--21579557241133__product-recommendations {
                        --section-products-per-row: 3;
                    }
                }

                @media screen and (min-width: 1200px) {
                    #shopify-section-template--21579557241133__product-recommendations {
                        --section-products-per-row: 4;
                    }
                }
            </style>

            <product-recommendations section-id="template--21579557241133__product-recommendations" intent="related"
                product-id="8953098567981" recommendations-count="6" class="section "></product-recommendations>

        </div>
        <div id="shopify-section-template--21579557241133__3bece99d-b538-4163-b550-00067fdca693"
            class="shopify-section shopify-section--recently-viewed-products">
            <style>
                #shopify-section-template--21579557241133__3bece99d-b538-4163-b550-00067fdca693 {
                    --heading-color: 40, 40, 40;
                    --text-color: 40, 40, 40;
                    --prev-next-button-background: 255, 255, 255;
                    --prev-next-button-color: 40, 40, 40;

                    --section-background: 255, 255, 255;
                    --section-products-per-row: 2;
                }

                @media screen and (min-width: 741px) {
                    #shopify-section-template--21579557241133__3bece99d-b538-4163-b550-00067fdca693 {
                        --section-products-per-row: 3;
                    }
                }

                @media screen and (min-width: 1200px) {
                    #shopify-section-template--21579557241133__3bece99d-b538-4163-b550-00067fdca693 {
                        --section-products-per-row: 4;
                    }
                }
            </style>

            <recently-viewed-products section-id="template--21579557241133__3bece99d-b538-4163-b550-00067fdca693"
                products-count="4" exclude-product-id="8953098567981" class="section "></recently-viewed-products>

        </div>
        <div id="shopify-section-static-text-with-icons" class="shopify-section shopify-section--text-with-icons"></div>
        <div id="shopify-section-static-newsletter" class="shopify-section shopify-section--newsletter"></div>
    </div>


    <script defer type="module" src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script defer nomodule src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js" defer></script>
    <?php require '../footer.php' ?>
    <style>
        .areviews_rating {
            display: none !important;
        }
    </style>
    <style>
        .shopify-payment-button {
            display: none !important;
        }
    </style>

    <!-- Não remova. Checkout Yampi. -->
    <link rel="preconnect" crossorigin href="https://api.dooki.com.br/">
    <link rel="preconnect" crossorigin href="https://api.yampi.io/">


    <script src="../../www.mercadopago.com/v2/security.js" view="item"></script>






    <link rel="stylesheet" href="../../cdn.yampi.me/shopify/checkout.css">
    <style>
        .yampi-loader {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            background: #fff;
            left: 0;
            top: 0;
            z-index: 99999
        }

        .yampi-loading {
            position: fixed;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 50px
        }

        .yampi-loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, .5)
        }

        .yampi-loading:not(:required) {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .yampi-loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 50px;
            height: 50px;
            margin-top: -.5em;
            border: 5px solid #999;
            border-radius: 100%;
            border-bottom-color: transparent;
            -webkit-animation: spinner 1s linear 0s infinite;
            animation: spinner 1s linear 0s infinite
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
    </style>

    <div class="yampi-loader">
        <div class="yampi-loading"></div>
    </div>

    <script type='text/javascript'>

        var currentPage = 'product'
            , cartEndpoint = 'https://api.dooki.com.br/v2/public/shopify/cart'
            , statusEndpoint = 'https://api.dooki.com.br/v2/public/shopify/status'
            , shop = '../'
            , shopifyInternalUrl = 'a452ab-2.myshopify.com'
            , ymp_hasUrlSupport = 'undefined' !== typeof URL && 'undefined' !== typeof URLSearchParams
            , ymp_utmCookieName = 'utmsTrack';

        window.yampiCheckoutUrl = '';

        var checkoutBtncss = '<style id="ymp-btn-style" type="text/css"> body .ymp-CrtpageMainFrm input[type="submit"]:not([name="update"]), body .ymp-CrtpageMainFrm button[type="submit"]:not([name="update"]), body .ymp_check_mainBtn[name="checkout"]:not([class*="ymp_elem_"]):not([name="update"]), body input.ymp_check_mainBtn:not([class*="ymp_elem_"]):not([name="update"]) { display: none !important; }body .ymp-CrtpageMainFrm .ymp_check_mainBtn.ymp_elem_mainBtn[type="submit"]:not(.bold_hidden){ display: inline-block !important; } </style>';

        function showYampiLoader() {
            var el = document.querySelector('.yampi-loader');
            el.style.display = 'block';
        }

        function hideYampiLoader() {
            var el = document.querySelector('.yampi-loader');
            el.style.display = 'none';
        }

        // Cart
        if (currentPage == 'cart') {
            showYampiLoader();

            getAjax('/cart.json', function (response) {
                var cartPayload = JSON.parse(response);

                var data = {
                    shop: window.location.host,
                    shopify_internal_domain: shopifyInternalUrl,
                    cart_payload: cartPayload
                };

                postAjax(cartEndpoint, JSON.stringify(data), function (response) {
                    var resp = JSON.parse(response);

                    if (!resp.active) {
                        hideYampiLoader();
                    } else {

                        var otherButtons = document.getElementsByClassName('cartX_check_mainBtn');

                        for (var i = 0; i < otherButtons.length; i++) {
                            otherButtons[i].setAttribute('style', 'display: none !important');
                        }

                        window.yampiCheckoutUrl = resp.checkout_direct_url;

                        if (resp.skip_cart && resp.checkout_direct_url != '') {
                            // Limpa o carrinho do Shopify
                            if (resp.fb_fallback && isAndroid() && isFacebookBrowser()) {
                                window.location = ymp_getUrlWithUtms(resp.checkout_direct_url);

                                setTimeout(function () {
                                    showYampiPurchaseConfirmation(resp.checkout_direct_url);
                                }, 500);
                            } else {
                                postAjax('../cart/clear.js', JSON.stringify({}), function () {
                                    window.location = ymp_getUrlWithUtms(resp.checkout_direct_url);
                                });
                            }

                        } else {
                            hideYampiLoader();

                            var getHead = document.getElementsByTagName('head')[0];
                            getHead.insertAdjacentHTML('beforeend', checkoutBtncss);
                            var getForm = document.getElementsByTagName('form'); var cartFrmId, getCheckoutBtn;

                            for (var i = 0; i < getForm.length; i++) {
                                var formAction = getForm[i].action; formAction = formAction.split(shop);

                                if (formAction.includes('/cart') == true || formAction[0].includes('/cart') == true) {
                                    if (getForm[i].getAttribute('id')) {
                                        cartFrmId = getForm[i].getAttribute('id');
                                    } else {
                                        getForm[i].setAttribute('id', 'ymp-CrtpageMainFrm'); cartFrmId = getForm[i].getAttribute('id');
                                    }
                                    getForm[i].classList.add('ymp-CrtpageMainFrm');
                                    getCheckoutBtn = getForm[i].elements['checkout'] || document.querySelector('a[href="/checkout"]') || document.querySelector('form[action="/cart"] input[type="submit"]');

                                    if (getCheckoutBtn.length == undefined) {
                                        var buttonValue = getCheckoutBtn.value ? getCheckoutBtn.value : getCheckoutBtn.textContent;
                                    } else {
                                        var lastBtnID = getCheckoutBtn.length - 1;
                                        var buttonValue = getCheckoutBtn[lastBtnID].value ? getCheckoutBtn[lastBtnID].value : getCheckoutBtn[lastBtnID].textContent;
                                    }
                                    var getSubBtnId = getCheckoutBtn.id;
                                    if (getSubBtnId) {
                                        getSubBtnId = getSubBtnId + 'ympButton';
                                    } else {
                                        getSubBtnId = 'ympBtn';
                                    }

                                    if (getCheckoutBtn.length == undefined) {
                                        var inptBtn = `<button type='submit' class='` + getCheckoutBtn.className + ` ymp_check_mainBtn ymp_elem_mainBtn' id='` + getSubBtnId + `'>` + buttonValue + `</button>`;
                                        getCheckoutBtn.insertAdjacentHTML('afterEnd', inptBtn);
                                    } else {
                                        var inptBtn = `<button type='submit' class='` + getCheckoutBtn[getCheckoutBtn.length - 1].className + ` ymp_check_mainBtn ymp_elem_mainBtn' id='` + getSubBtnId + `'>` + buttonValue + `</button>`;
                                        getCheckoutBtn[getCheckoutBtn.length - 1].insertAdjacentHTML('afterEnd', inptBtn);
                                    }

                                    document.getElementById(getSubBtnId).addEventListener('click', fakeClick);
                                }
                            }

                            // Tratamento com links dentro do carrinho.
                            if (window.$ || window.jQuery) {
                                var btns = $('a.btn-checkout[href="/checkout"]').not('.ymp_elem_mainBtn');
                                btns.hide();
                            }
                        }
                    }
                });

            });
        }

        function showYampiPurchaseConfirmation(purchaseUrl) {
            var element = document.getElementById('yampiPurchaseConfirmationWrapper');
            element.setAttribute('class', 'active');

            var button = document.getElementById('yampiPurchaseConfirmationButton');

            hideYampiLoader();
        }

        function getAjax(url, success) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            xhr.open('GET.html', url);
            xhr.onreadystatechange = function () {
                if (xhr.readyState > 3 && xhr.status == 200) success(xhr.responseText);
            };
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.send();
            return xhr;
        }

        function postAjax(url, data, success) {
            var params = typeof data == 'string' ? data : Object.keys(data).map(
                function (k) { return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
            ).join('&');

            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

            xhr.open('POST.html', url);
            xhr.onreadystatechange = function () {
                if (xhr.readyState > 3 && xhr.status == 200) { success(xhr.responseText); }
            };
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(params);

            return xhr;
        }

        // Product
        var ympData = '';

        if (window.$ || window.jQuery) {

            var checkoutButtons = $('.btn-checkout');
            checkoutButtons.each(function () {
                var t = $(this);

                if (t.attr('onclick') == "window.location='/checkout'") {
                    t.attr('onclick', "window.location='/cart'");
                }
            });

            if (currentPage == 'product' || currentPage == 'index') {
                var ympSelectors = $('input[name="add"] , button[name=\'add\'], #add-to-cart, .add-to-cart, #AddToCartText ,#AddToCart, .ProductForm__AddToCart');
                ympSelectors.attr('disabled', true);

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        ympData = JSON.parse(this.response);
                        if (ympData && ympData.data.active) {
                            ympSelectors = $('input[name="add"] , button[name=\'add\'], #add-to-cart, .add-to-cart, #AddToCartText ,#AddToCart, .ProductForm__AddToCart');
                            ympSelectors.addClass("ymp_mainBtn ymp_elem_0");
                            ympSelectors.removeAttr("disabled");

                            $('.ymp_mainBtn').on('click', function (event) {
                                event.preventDefault();
                                var form = $(this).parents('form[action="/cart/add"]');
                                var xhr = new XMLHttpRequest();
                                xhr.open('POST.html', '../cart/add.js', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.onreadystatechange = function () {
                                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                        window.location.href = '../cart1c80.html?ref=yampi_buy_button'
                                    }
                                }

                                xhr.send($(form).serialize());
                            });
                        } else {
                            ympSelectors.removeAttr('disabled');
                        }
                    }
                };
                xhttp.open('GET.html', 'https://api.dooki.com.br/v2/public/shopify/status?shop=' + window.location.host);
                xhttp.send();
            }
        }

        function fakeClick(event) {
            event.preventDefault();

            showYampiLoader();

            getAjax('/cart.json', function (response) {
                var cartPayload = JSON.parse(response);

                var data = {
                    shop: window.location.host,
                    cart_payload: cartPayload
                };

                postAjax(cartEndpoint, JSON.stringify(data), function (response) {
                    var resp = JSON.parse(response);

                    window.location.href = ymp_getUrlWithUtms(resp.checkout_direct_url);
                });
            });
        }

        function yampiClick() {

            showYampiLoader();

            getAjax('/cart.json', function (response) {
                var cartPayload = JSON.parse(response);

                var data = {
                    shop: window.location.host,
                    cart_payload: cartPayload
                };

                postAjax(cartEndpoint, JSON.stringify(data), function (response) {
                    var resp = JSON.parse(response);

                    window.location.href = ymp_getUrlWithUtms(resp.checkout_direct_url);
                });
            });
        }

        function getNewCheckoutURL() {
            getAjax('/cart.json', function (response) {
                var cartPayload = JSON.parse(response);

                var data = {
                    shop: window.location.host,
                    cart_payload: cartPayload
                };

                postAjax(cartEndpoint, JSON.stringify(data), function (response) {
                    var resp = JSON.parse(response);

                    postAjax('../cart/clear.js', JSON.stringify({}), function () {
                        window.location.href = ymp_getUrlWithUtms(resp.checkout_direct_url);
                    });
                });
            });
        }

        // Verifica se existem botões redirecionando para /a/checkout
        if (window.$ || window.jQuery) {
            var oldLinks = $('a[href="/a/checkout"]').not('.yampi-btn-finalize').addClass('yampi-btn-finalize-single');

            $('.yampi-btn-finalize-single').on('click', function (e) {
                e.preventDefault();

                if (currentPage == 'cart') {
                    window.location.href = ymp_getUrlWithUtms(window.yampiCheckoutUrl);
                } else {
                    window.location = '../cart.html';
                }

            });
        }

        function isFacebookBrowser() {
            var ua = navigator.userAgent || navigator.vendor || window.opera;
            return (ua.indexOf("FBAN") > -1) || (ua.indexOf("FBAV") > -1);
        }

        function isAndroid() {
            var ua = navigator.userAgent.toLowerCase();
            return ua.indexOf("android") > -1;
        }

        if (ymp_hasUrlSupport) {
            var ymp_terms = ['utm_source', 'utm_campaign', 'utm_term', 'utm_medium', 'utm_content'],
                ymp_currentUrl = new URL(window.location.href),
                ymp_urlParams = ymp_currentUrl.searchParams;

            ymp_terms.forEach(function (term) {
                if (ymp_urlParams.has(term)) {
                    ymp_setUtm(term, ymp_urlParams.get(term));
                }
            });
        }

        function ymp_getUrlWithUtms(url) {
            if (!ymp_hasUrlSupport || !url) {
                return url;
            }

            var currentUrl = new URL(url.html),
                _ga = ymp_getCookie('_ga'),
                cookiesUtms = ymp_getUtms();

            cookiesUtms.forEach(function (value, key) {
                currentUrl.searchParams.set(key, value);
            });

            if (_ga) {
                currentUrl.searchParams.set('_ga', _ga);
            }

            return currentUrl.href;
        }

        function ymp_setUtm(term, value) {
            var params = ymp_getUtms();

            params.set(term, value);
            ymp_setCookie(ymp_utmCookieName, params.toString(), 30);
        }

        function ymp_getUtms() {
            var currentUtms = ymp_getCookie(ymp_utmCookieName);

            if (currentUtms) {
                return new URLSearchParams(currentUtms);
            }

            return new URLSearchParams();
        }

        function ymp_setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function ymp_getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    </script>

    <style>
        .product-meta__title {
            letter-spacing: 0.1rem;
        }

        h3.heading {
            letter-spacing: 0.1rem;
        }

        .footer {
            background-color: #222222;
            color: #fafafa;
        }

        .footer__item-title {
            color: #fafafa;
        }

        .color-swatch__item {
            border-width: 0.1px;
            border-style: solid;
            border-color: #b1aca8;
        }

        .header__logo-image {
            position: unset;
        }

        @media (max-width: 767px) {
            .announcement-bar {
                flex-direction: column-reverse;
            }

            a[aria-controls="search-drawer"] {
                display: none;
            }
        }
    </style>
</body>

<!-- Mirrored from debugstyle.com/products/camiseta-assembly by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 02:40:50 GMT -->

</html>