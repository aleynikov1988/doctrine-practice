<?php
require_once 'bootstrap.php';

/**
 * @var \Doctrine\ORM\EntityManagerInterface $em
 */
$productRepo = $em->getRepository(Product::class);
$products = $productRepo->findAll();

foreach ($products as $product) {
    echo sprintf("ID: %d, Name: %s", $product->getId(), $product->getName());
    echo PHP_EOL;
}
