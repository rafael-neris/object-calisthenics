<?php

namespace Rafaelneris\ObjectCalisthenics\Case6\Solved;

class Document
{
    public function __construct(
        public readonly string $number,
        public readonly string $type,
    ) {
    }
}