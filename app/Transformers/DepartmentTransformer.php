<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class DepartmentTransformer extends AbstractTransformer
{
    public function transformModel(Model $department)
    {
        $output = [
            'name' => $department->name,
            'services' => ServiceTransformer::transform($department->services)
        ];

        return $output;
    }
}