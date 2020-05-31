


<?php


function path(string $url): void

{
    header("Location: $url");
    die();
}
?>