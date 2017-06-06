<?php namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Transformers\AbstractTransformer;

class EServiceTransformer extends AbstractTransformer
{
    public function transformModel(Model $item)
    {
        $services = collect();

            $services->push([
                'name' => 'Account Registration / Enrollment',
                'enabled' => $item->account_registration
            ]);

            $services->push([
                'name' => 'Authentication',
                'enabled' => $item->authentication
            ]);

            $services->push([
                'name' => 'Application',
                'enabled' => $item->application
            ]);

            $services->push([
                'name' => 'Decision',
                'enabled' => $item->decision
            ]);

            $services->push([
                'name' => 'Issuance',
                'enabled' => $item->issuance
            ]);

            $services->push([
                'name' => 'Issue Resolution and Feedback',
                'enabled' => $item->issue_resolution
            ]);

        $score = 0;

        $total_enabled = $services->whereStrict('enabled', 1)->count();
        $total_disabled = $services->whereStrict('enabled', 0)->count();
        $total_services = $total_enabled + $total_disabled;

        if ($total_services) {
            $score = $total_enabled / $total_services * 100;
        }

        $output = [
            'score' => $score,
            'services' => $services->count() ? $services : null
        ];

        return $output;
    }
}