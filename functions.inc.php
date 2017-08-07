<?php
$allowed_tags = '<h1><h2><h3><a><p><br><img><ul><ol><li><div><span>';

function clean_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
} // End of function clean_input

function clean_content($content) {
    global $allowed_tags;
    $content = trim($content);
    $content = strip_tags($content, $allowed_tags);
    return $content;
} // end of function clean_content($content)

function site_required_php_version() {
    if (version_compare(PHP_VERSION, '5.3.7', '<')) {
        echo 'This site requires PHP version 5.3.7 or higher.<br>';
        echo 'Please ask your hosting to upgrade your PHP to version 5.3.7 or higher';
        exit;
    } // end of if (version_compare(PHP_VERSION, '5.3.7', '<'))
} // end of function site_required_php_version()
site_required_php_version();
?>