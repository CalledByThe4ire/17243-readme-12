<?php
require_once('./helpers.php');
require_once('./config/init.php');

$head = include_template('partials/head.php', ['title' => 'readme: блог, каким он должен быть']);
$symbols = include_template('partials/symbols.php');
$page_header = include_template('partials/auth/header.php');
$page_content = include_template('partials/auth/main.php');
$page_footer = include_template('partials/footer.php', ['modifier' => 'main']);
$layout_content = include_template('partials/auth/layout.php', [
    'head' => $head,
    'symbols' => $symbols,
    'page_header' => $page_header,
    'page_content' => $page_content,
    'page_footer' => $page_footer,
]);

print($layout_content);
