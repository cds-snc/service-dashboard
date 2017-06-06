<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class DepartmentTransformer extends AbstractTransformer
{
    public function transformModel(Model $department)
    {
        $output = [
            'name' => $department->name,
            'volumes' => $department->volumes
        ];

        if (in_array('services', $this->options)) {
            $output['services'] = ServiceTransformer::transform($department->services);
        }

        if (in_array('programs', $this->options)) {
            $output['programs'] = ProgramTransformer::transform($department->programs);
        }

        return $output;
    }
}