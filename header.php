<!DOCTYPE html>
<html lang="ja">
<?php
$title = '';
$description = '';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">

  <!-- ファビコン -->
  <!-- 画像の用意がなければ設定しなくてよい -->
  <!-- <link rel="icon" sizes="192x192" href="assets/img/favicon.png">
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />
  <link rel="apple-touch-icon" href="assets/img/favicon.png" type="image/png" /> -->

  <!-- og-image -->
  <!-- 画像の用意がなければ設定しなくてよい -->
  <?php /* ?>
  <?php
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        $og_image_url = $protocol . $host . '/assets/img/og-image.jpg';
        ?>
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">
  <?php */ ?>

  <!-- Googleフォントを使用しないのであれば削除 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;600;800&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
  </script>

  <!-- Splide -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>