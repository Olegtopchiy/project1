<?php
//    $input = 'abBbbbc d  . _-sb00';
//    $pattern  ='#b{2}#i';
//    $count = preg_match_all($pattern, $input, $matches );
//    var_dump($input);
//    var_dump($pattern);
//    var_dump($count);
//    var_dump($matches);

$input = '<link rel="stylesheet" href="//upst.fwdcdn.com/css/1517577129/top_links.css">
<link rel="stylesheet" href="//upst.fwdcdn.com/css/??portal/normalize.css,portal/slick.css,portal/core.css">
<link rel="stylesheet" href="//upst.fwdcdn.com/css/16/portal/main.css">';
$pattern = '#<link(.*?)href="(.*?)"</>#i';
$replace = preg_replace_callback($pattern, function($matches){
    var_dump($matches);
    list(, $before, $href, $after) = $matches;
    $postfix = rand();
    $tag = <<<LINK
    <link $before href="$href?v=$postfix" $after></>
LINK;
    return $tag;
}, $input);
var_dump($input);
var_dump($replace);