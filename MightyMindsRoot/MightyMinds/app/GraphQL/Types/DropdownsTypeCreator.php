<?php

namespace MyProject\GraphQL;

use GraphQL\Type\Definition\Type;
use SilverStripe\GraphQL\TypeCreator;
use SilverStripe\GraphQL\Pagination\Connection;

class DropdownsTypeCreator extends TypeCreator
{
    public function attributes()
    {
        return [
            'name' => 'dropdowns'
        ];
    }

    public function fields()
    {   
        $yearConnection = Connection::create('dropdown1')
            ->setConnectionType(function () {
                return $this->manager->getType('dropdown');
            });
        $subjectsConnection = Connection::create('dropdown2')
            ->setConnectionType(function () {
                return $this->manager->getType('dropdown');
            });
        return [
            'year' => [
                'type' => $yearConnection->toType(),
                'args' => $yearConnection->args(),
                'resolve' => function ($obj, $args, $context) use ($yearConnection) {
                    return $yearConnection->resolveList(
                        $obj->Groups(),
                        $args,
                        $context
                    );
                }
            ],
            'subjects' => [
                'type' => $subjectsConnection->toType(),
                'args' => $subjectsConnection->args(),
                'resolve' => function ($obj, $args, $context) use ($subjectsConnection) {
                    return $subjectsConnection->resolveList(
                        $obj->Groups(),
                        $args,
                        $context
                    );
                }
            ]
        ];
          
    }
}