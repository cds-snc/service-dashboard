<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class ProgramTransformer extends AbstractTransformer
{
    public function transformModel(Model $program)
    {
        $output = [
            'id' => $program->id,
            'name' => $program->name,
            'services' => ServiceTransformer::transform($program->services),
            'volumes' => $program->volumes
        ];

        return $output;
    }
}