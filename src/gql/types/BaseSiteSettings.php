<?php
namespace craft\gql\types;

use craft\gql\common\SchemaObject;
use GraphQL\Type\Definition\Type;

/**
 * Class BaseSiteSettings
 */
abstract class BaseSiteSettings extends SchemaObject
{
    /**
     * @inheritdoc
     */
    public static function getCommonFields(): array
    {
        return array_merge(parent::getCommonFields(), [
            'site' => Site::getType(),
            'hasUrls' => Type::boolean(),
            'uriFormat' => Type::string(),
            'template' => Type::string(),
        ]);
    }
}