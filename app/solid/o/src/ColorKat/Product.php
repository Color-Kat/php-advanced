<?php

namespace ColorKat;

class Product
{
    private $products = [];

    public function __construct(private \ColorKat\Logger\LoggerInterface $logger)
    {
    }

    public function addProduct(string $title, string $description)
    {
        $this->logger->debug("Trying to creat new poduct - $title");

        if (array_key_exists($title, $this->products)) {
            $this->logger->error('Product already exists');
        } else {
            $this->products[$title] = $description;
        }
    }
}
