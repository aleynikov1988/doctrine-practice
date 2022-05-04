<?php
require_once 'bootstrap.php';

$name = $argv[1];
$product = new Product();
$product->setName($name);

/**
 * @var \Doctrine\ORM\EntityManagerInterface $em
 */
$em->persist($product);
$em->flush();

echo "created with ID #{$product->getId()}\n";
