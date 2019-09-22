<?php

interface Example {
    public function method(array $array): iterable;
}

class ExampleImplementation implements Example {
    public function method(iterable $iterable): array {
        // Parameter broadened and return type narrowed.
    }
}