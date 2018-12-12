<?php

include_once 'interfaces/IPrintDocument.php';
//include_once 'traits/NodeTrait.php';
include_once 'classes/HTMLNode.php';

$html = new HTMLNode('html');
$head = new HTMLNode('head');
$body = new HTMLNode('body');
$div = new HTMLNode('div');

$html->AddNode($head);
$head->AddNode($body);
$body->AddNode($div);
$body->AddNode($div);

?>

<pre>
    <?php
    $html->PrintDocument($html);
    ?>
</pre>
