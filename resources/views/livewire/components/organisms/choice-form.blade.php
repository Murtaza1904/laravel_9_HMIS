{{-- <div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='choice.patient_id' />
                    <span class="text-danger">@error('choice.patient_id'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Provider" selectName="choice.provider" errorName="choice.provider"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="Referring Provider" selectName="choice.referring_provider"
                    errorName="choice.referring_provider" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Pharmacy" selectName="choice.pharmacy" errorName="choice.pharmacy"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="HIPAA Notice Received" selectName="choice.hipaa_notice_received"
                    errorName="choice.hipaa_notice_received" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Voice Message" selectName="choice.allow_voice_message"
                    errorName="choice.allow_voice_message" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Leave Message With" type="text" name="choice.leave_message_with"
                    placeholder="Enter leave message with" errorName="choice.leave_message_with" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Mail Message" selectName="choice.allow_mail_message"
                    errorName="choice.allow_mail_message" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Allow SMS" selectName="choice.allow_sms" errorName="choice.allow_sms"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Email" selectName="choice.allow_email"
                    errorName="choice.allow_email" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Immunization Registry Use"
                    selectName="choice.allow_immunization_registry_use"
                    errorName="choice.allow_immunization_registry_use" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Immunization Info Sharing"
                    selectName="choice.allow_immunization_info_sharing"
                    errorName="choice.allow_immunization_info_sharing" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Health Information Exchange"
                    selectName="choice.allow_health_information_exchange"
                    errorName="choice.allow_health_information_exchange" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Allow Patient Portal" selectName="choice.allow_patient_portal"
                    errorName="choice.allow_patient_portal" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="CMS Portal Login" type="number" name="choice.cms_portal_login"
                    placeholder="Enter CMS portal login" errorName="choice.cms_portal_login" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Immunization Registry Status"
                    selectName="choice.immunization_registry_status" errorName="choice.immunization_registry_status"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Immunization Registry Status Effective Date" type="date"
                    name="choice.immunization_registry_status_effective_date" placeholder="Enter work phone number"
                    errorName="choice.immunization_registry_status_effective_date" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Publicity Code" selectName="choice.publicity_code"
                    errorName="choice.publicity_code" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Publicity Code Effective Date" type="date"
                    name="choice.publicity_code_effective_date" placeholder="Enter publicity code effective date"
                    errorName="choice.publicity_code_effective_date" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Protection Indicator" selectName="choice.protection_indicator"
                    errorName="choice.protection_indicator" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Protection Indicator Effective Date" type="date"
                    name="choice.protection_indicator_effective_date"
                    placeholder="Enter protection indicator effective date"
                    errorName="choice.protection_indicator_effective_date" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Care Team Provider" type="text" name="choice.care_team_provider"
                    placeholder="Enter care team provider" errorName="choice.care_team_provider"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Care Team Facility" type="text" name="choice.care_team_facility"
                    placeholder="Enter care team facility" errorName="choice.care_team_facility"
                    message="$message" />
            </div>
        </div>
        <livewire:components.atoms.button redirect="store" class="btn-primary" text="Submit" />
        <livewire:components.atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <livewire:components.atoms.error-if-not-checked />
    </form>
</div> --}}
