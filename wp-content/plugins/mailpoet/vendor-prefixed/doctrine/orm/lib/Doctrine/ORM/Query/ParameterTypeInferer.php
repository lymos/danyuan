<?php
 namespace MailPoetVendor\Doctrine\ORM\Query; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Connection; use MailPoetVendor\Doctrine\DBAL\Types\Type; class ParameterTypeInferer { public static function inferType($value) { if (\is_int($value)) { return \MailPoetVendor\Doctrine\DBAL\Types\Type::INTEGER; } if (\is_bool($value)) { return \MailPoetVendor\Doctrine\DBAL\Types\Type::BOOLEAN; } if ($value instanceof \DateTime || $value instanceof \DateTimeInterface) { return \MailPoetVendor\Doctrine\DBAL\Types\Type::DATETIME; } if ($value instanceof \DateInterval) { return \MailPoetVendor\Doctrine\DBAL\Types\Type::DATEINTERVAL; } if (\is_array($value)) { return \is_int(\current($value)) ? \MailPoetVendor\Doctrine\DBAL\Connection::PARAM_INT_ARRAY : \MailPoetVendor\Doctrine\DBAL\Connection::PARAM_STR_ARRAY; } return \PDO::PARAM_STR; } } 