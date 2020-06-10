<?php

namespace InstagramScraper\Exception;

class IntagramRequiresLoginException extends InstagramException
{
    public function __construct($message = "", $code = 500, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}