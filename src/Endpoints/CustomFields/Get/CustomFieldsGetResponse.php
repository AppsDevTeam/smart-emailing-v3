<?php

declare(strict_types=1);

namespace SmartEmailing\v3\Endpoints\CustomFields\Get;

use SmartEmailing\v3\Endpoints\AbstractItemResponse;
use SmartEmailing\v3\Models\CustomFieldDefinition;
use SmartEmailing\v3\Models\Model;

/**
 * @extends AbstractItemResponse<CustomFieldDefinition>
 */
class CustomFieldsGetResponse extends AbstractItemResponse
{
    protected function createDataItem($dataItem): Model
    {
        return CustomFieldDefinition::fromJSON($dataItem);
    }
}
