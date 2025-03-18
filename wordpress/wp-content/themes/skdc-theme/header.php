<!DOCTYPE html>
<html lang="ja">
<?php
$title = '';
$description = '';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <title>マウスピース矯正（インビザライン）｜品川港南歯科クリニック</title>
  <meta name="description" content="品川のマウスピース矯正（インビザライン）専門歯科クリニック。前歯のみの部分矯正にも対応。人気のインビザライン矯正が、75万円。品川近郊で、矯正歯科・すきっ歯・口ゴボ・歯のガタガタなどの歯並びの改善をご希望の方は、透明で目立ちにくいインビザライン矯正（マウスピース矯正）をおすすめします。品川区近郊で歯の矯正や目立ちにくい矯正治療をご希望の方は、インビザライン矯正。" />
  <meta name="keywords" content="品川,マウスピース矯正,インビザライン,品川港南歯科クリニック,品川駅">
  <meta property="og:title" content="マウスピース矯正（インビザライン）｜品川港南歯科クリニック">
  <meta property="og:description" content="品川のマウスピース矯正（インビザライン）専門歯科クリニック。前歯のみの部分矯正にも対応。人気のインビザライン矯正が、75万円。品川近郊で、矯正歯科・すきっ歯・口ゴボ・歯のガタガタなどの歯並びの改善をご希望の方は、透明で目立ちにくいインビザライン矯正（マウスピース矯正）をおすすめします。品川区近郊で歯の矯正や目立ちにくい矯正治療をご希望の方は、インビザライン矯正。">

  <!-- ファビコン -->
  <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/png">

   <!-- og-image -->
  <!-- 画像の用意がなければ設定しなくてよい -->

  <?php
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        $og_image_url = $protocol . $host . '/assets/img/og-image.jpg';
        ?>
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">
 
  
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- CSS -->
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">-->

  <?php wp_head(); ?> 
</head>

<body>