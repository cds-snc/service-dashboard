<?php

namespace App\Console\Commands;

use App\Department;
use App\Importers\InventoryDataImport;
use App\ServiceType;
use Illuminate\Console\Command;

class ImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * @var InventoryDataImport
     */
    private $import;

    /**
     * Create a new command instance.
     *
     * @param InventoryDataImport $import
     */
    public function __construct(InventoryDataImport $import)
    {
        parent::__construct();

        $this->import = $import;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $entries = $this->import->all()->first();

        foreach ($entries as $entry) {
            $department_name = trim($entry->service_owner);

            $department = Department::firstOrCreate([
                'name' => $department_name
            ]);

            $program = $department->programs()->firstOrCreate([
                'name' => trim($entry->program_name),
                'program_id_number' => trim($entry->program_id_number)
            ]);

            $responsibility_area = $department->responsibilityAreas()->firstOrCreate([
                'name' => $entry->responsibility_area
            ]);

            $service_name = trim($entry->service_name, "\n\" ");

            $service = $program->services()->create([
                'name' => $service_name,
                'service_id_number' => $entry->service_idnumber,
                'description' => $entry->service_description,
                'service_type_id' => $this->getServiceTypeId($entry),
                'responsibility_area_id' => $responsibility_area->id,
                'authority' => $entry->authority,
                'service_agreements' => $this->getServiceAgreements($entry),
                'service_orientation' => $this->getServiceOrientation($entry),
                'user_fee' => $this->getUserFee($entry),
                'service_standards' => $this->getServiceStandards($entry),
                'performance_targets' => $this->getPerformanceTargets($entry)
            ]);

            $this->attachSpecialDesignations($service, $entry);
            $this->attachTargetGroups($service, $entry);

            $this->createChannelVolumes($service, $entry);
            $this->createEServices($service, $entry);
        }
    }

    protected function getServiceOrientation($entry)
    {
        // 1 = external; 2 = internal; 3 = both;

        if ($value = $entry->external_service_or_internal_enterprise_service) {
            if (str_contains($value, ['Internal', 'Int.'])) {
                if (str_contains($value, ['External', 'Ext.'])) {
                    return 3;
                }
                return 2;
            }
            if (str_contains($value, ['External', 'Ext.'])) {
                return 1;
            }
        }
        return null;
    }

    public function getServiceTypeId($entry)
    {
        if ($serviceType = ServiceType::where('name', $entry->service_type)->first()) {
            return $serviceType->id;
        }
        return null;
    }

    public function attachSpecialDesignations($service, $entry)
    {
        $service->specialDesignations()->detach();

        if ($designations = $entry->special_designations) {
            if (str_contains($designations, 'None') || str_contains($designations, 'Do Not Know')) {
                return;
            }

            if (str_contains($designations, 'Priority')) {
                $service->specialDesignations()->attach(1);
            }

            if (str_contains($designations, 'Mission') || str_contains($designations, 'Critical')) {
                $service->specialDesignations()->attach(2);
            }

            if (str_contains($designations, 'Essential')) {
                $service->specialDesignations()->attach(3);
            }
        }

        return;
    }

    protected function attachTargetGroups($service, $entry)
    {
        $service->targetGroups()->detach();

        if (filter_var($entry->target_group_persons)) {
            $service->targetGroups()->attach(1);
        }

        if (filter_var($entry->target_group_non_profit_institutions_and_organizations)) {
            $service->targetGroups()->attach(2);
        }

        if (filter_var($entry->target_group_economic_segments_businesses)) {
            $service->targetGroups()->attach(3);
        }

        if (filter_var($entry->target_group_foreign_entities)) {
            $service->targetGroups()->attach(4);
        }

        if (filter_var($entry->target_group_provinces_territories_and_communities)) {
            $service->targetGroups()->attach(5);
        }

        if (filter_var($entry->target_group_internal_to_government)) {
            $service->targetGroups()->attach(6);
        }

        if (filter_var($entry->target_group_environmental)) {
            $service->targetGroups()->attach(7);
        }

        return;
    }

    protected function createChannelVolumes($service, $entry)
    {
        // Online
        $service->channelVolumes()->create([
            'channel_id' => 1,
            'applications' => filter_var($entry->online_a, FILTER_VALIDATE_INT) ?: null,
            'outputs' => filter_var($entry->online_o, FILTER_VALIDATE_INT) ?: null
        ]);

        // In person
        $service->channelVolumes()->create([
            'channel_id' => 2,
            'applications' => filter_var($entry->in_person_a, FILTER_VALIDATE_INT) ?: null,
            'outputs' => filter_var($entry->in_person_o, FILTER_VALIDATE_INT) ?: null
        ]);

        // Telephone
        $service->channelVolumes()->create([
            'channel_id' => 3,
            'applications' => filter_var($entry->telephone_a, FILTER_VALIDATE_INT) ?: null,
            'outputs' => filter_var($entry->telephone_o, FILTER_VALIDATE_INT) ?: null
        ]);

        $service->channelVolumes()->create([
            'channel_id' => 4,
            'applications' => filter_var($entry->mail_a, FILTER_VALIDATE_INT) ?: null,
            'outputs' => filter_var($entry->mail_o, FILTER_VALIDATE_INT) ?: null
        ]);
    }

    protected function createEServices($service, $entry)
    {
        $service->eservices()->create([
            'score' => filter_var($entry->e_service_estimated_of_the_service_completed_online, FILTER_VALIDATE_FLOAT) ?: null,
            'account_registration' => $this->getBooleanOrNull($entry->e_service_account_registration_enrollment),
            'authentication' => $this->getBooleanOrNull($entry->e_service_authentication),
            'application' => $this->getBooleanOrNull($entry->e_service_application),
            'decision' => $this->getBooleanOrNull($entry->e_service_decision),
            'issuance' => $this->getBooleanOrNull($entry->e_service_issuance),
            'issue_resolution' => $this->getBooleanOrNull($entry->e_service_issue_resolution_and_feedback)
        ]);
    }

    protected function getBooleanOrNull($item) {
        if ($item == 'N/A') {
            return null;
        }
        return filter_var($item, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param $entry
     * @return mixed
     */
    public function getUserFee($entry)
    {
        return filter_var($entry->user_fee, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param $entry
     * @return mixed
     */
    public function getServiceStandards($entry)
    {
        return filter_var($entry->service_standards, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param $entry
     * @return mixed
     */
    public function getPerformanceTargets($entry)
    {
        return filter_var($entry->operational_performance_targets, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param $entry
     * @return mixed
     */
    public function getServiceAgreements($entry)
    {
        return filter_var($entry->service_agreements, FILTER_VALIDATE_BOOLEAN);
    }
}
