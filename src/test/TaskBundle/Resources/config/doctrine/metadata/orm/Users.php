<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'users',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'id' => true,
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'unsigned' => false,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'userName',
   'columnName' => 'user_name',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'password',
   'columnName' => 'password',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'emailAddress',
   'columnName' => 'email_address',
   'type' => 'string',
   'length' => 45,
   'fixed' => false,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'createdDate',
   'columnName' => 'created_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'modifiedDate',
   'columnName' => 'modified_date',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);