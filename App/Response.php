<?php


class Response
{
    public static function redirect(string $url = '/')
    {
        header('Location: ' . $url);
        exit;
    }
}