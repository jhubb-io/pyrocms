<?php namespace Pyro\FieldType;


interface RelationshipInterface
{
    public function getFieldTypeRelationshipOptions();

    public function getFieldTypeRelationshipResults($query);

    public function getFieldTypeRelationshipTitle();
}
