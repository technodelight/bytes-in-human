<?php

namespace Technodelight\BytesInHuman;

class BytesInHuman
{
    const BASE = 1024;

    private $bytes = 0;

    public static function fromBytes($bytes)
    {
        $instance = new self;
        $instance->bytes = (int) $bytes;
        return $instance;
    }

    public function asString()
    {
        switch (true) {
            case $this->bytes >= self::BASE && $this->bytes < pow(self::BASE, 2):
                return sprintf('%.2fK', $this->bytes / self::BASE);
            case $this->bytes >= pow(self::BASE, 2) && $this->bytes < pow(self::BASE, 3):
                return sprintf('%.2fM', $this->bytes / pow(self::BASE, 2));
            case $this->bytes >= pow(self::BASE, 3):
                return sprintf('%.2fG', $this->bytes / pow(self::BASE, 3));
            default:
                return sprintf('%dB', $this->bytes);
        }
    }

    public function __toString()
    {
        return $this->asString();
    }

    protected function __construct() {}
}
