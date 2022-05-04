<?php
require_once 'bootstrap.php';

$id = $argv[1];

/**
 * @var \Doctrine\ORM\EntityManagerInterface $em
 */
$productRepo = $em->getRepository(Product::class);
$product = $productRepo->find($id);

if ($product === null) {
    echo "No product find with ID: $id";
    echo PHP_EOL;
    exit(1);
}

echo sprintf("Product Name: %s", $product->getName());
echo PHP_EOL;
