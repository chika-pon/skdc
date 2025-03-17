<?php

// 不要なタグを削除
remove_action('wp_head', 'wp_generator'); // WordPressのバージョン情報削除
remove_action('wp_head', 'rsd_link'); // RSDリンク削除
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writerリンク削除

function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'my-theme-style', // スタイルのハンドル名（ユニークな名前にする）
        get_stylesheet_directory_uri() . '/assets/css/style.css', // CSSファイルのパス
        array(), // 依存関係（他のスタイルシートなど）
        '1.0.0', // バージョン
        'all' // メディアタイプ（通常は all）
    );

    wp_enqueue_script(
        'my-theme-script', // スクリプトのハンドル名（ユニークな名前にする）
        'https://code.jquery.com/jquery-3.5.1.min.js', // jQueryのURL
        array(), // 依存関係
        null, // バージョン（通常は null にすると自動で最新）
        true // フッターで読み込む（通常は true ）
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
