<?php

namespace App\Casts\Types;

use Illuminate\Contracts\Support\Arrayable;

class Mobile implements Arrayable
{
    private string $code;
    private string $number;

    public function __construct(string $code, string $number)
    {
        $this->code = $code;
        $this->number = $number;
    }

    public static function make(string $code, string $number): self
    {
        return new self($code, $number);
    }

    public function full($separator = ' '): string
    {
        return sprintf('%s%s%s', $this->code(), $separator, $this->number());
    }

    public function code(): string
    {
        return $this->code;
    }

    public function number(): string
    {
        return $this->number;
    }

    public function toArray()
    {
        return [
            'code' => $this->code(),
            'number' => $this->number(),
        ];
    }
}
