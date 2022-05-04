<?php
require_once 'bootstrap.php';

$id = $argv[1];
$newName = $argv[2];

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

$product->setName($newName);
$em->flush();

