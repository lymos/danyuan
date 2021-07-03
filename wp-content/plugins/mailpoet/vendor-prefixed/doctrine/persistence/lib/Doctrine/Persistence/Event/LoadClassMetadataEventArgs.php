<?php
 namespace MailPoetVendor\Doctrine\Persistence\Event; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\Common\EventArgs; use MailPoetVendor\Doctrine\Persistence\Mapping\ClassMetadata; use MailPoetVendor\Doctrine\Persistence\ObjectManager; class LoadClassMetadataEventArgs extends \MailPoetVendor\Doctrine\Common\EventArgs { private $classMetadata; private $objectManager; public function __construct(\MailPoetVendor\Doctrine\Persistence\Mapping\ClassMetadata $classMetadata, \MailPoetVendor\Doctrine\Persistence\ObjectManager $objectManager) { $this->classMetadata = $classMetadata; $this->objectManager = $objectManager; } public function getClassMetadata() { return $this->classMetadata; } public function getObjectManager() { return $this->objectManager; } } 