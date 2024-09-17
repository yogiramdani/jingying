<?php
use League\CommonMark\CommonMarkConverter;

function convertMarkdownToHtml($markdown)
{
    $converter = new CommonMarkConverter();
    return $converter->convertToHtml($markdown);
}
