<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class EServiceTransformer extends AbstractTransformer
{
    public function transformModel(Model $item)
    {
        $services = collect();

        if (!is_null($item->account_registration)) {
            $services->push([
                'name' => 'Account Registration / Enrollment',
                'enabled' => $item->account_registration ? true : false
            ]);
        }

        if (!is_null($item->authentication)) {
            $services->push([
                'name' => 'Authentication',
                'enabled' => $item->authentication ? true : false
            ]);
        }

        if (!is_null($item->application)) {
            $services->push([
                'name' => 'Application',
                'enabled' => $item->application ? true : false
            ]);
        }

        if (!is_null($item->decision)) {
            $services->push([
                'name' => 'Decision',
                'enabled' => $item->decision ? true : false
            ]);
        }

        if (!is_null($item->issuance)) {
            $services->push([
                'name' => 'Issuance',
                'enabled' => $item->issuance ? true : false
            ]);
        }

        if (!is_null($item->issue_resolution)) {
            $services->push([
                'name' => 'Issue Resolution and Feedback',
                'enabled' => $item->issue_resolution ? true : false
            ]);
        }

        $score = 0;

        if ($services->count()) {
            $total_services = $services->count();
            $total_enabled = $services->where('enabled', true)->count();
            $score = $total_enabled / $total_services * 100;
        }

        $output = [
            'score' => $score,
            'services' => $services->count() ? $services : null
        ];

        return $output;
    }
}