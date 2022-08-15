<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='secondary_insurance.patient_id' />
                    <span class="text-danger">@error('secondary_insurance.patient_id'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Primary Insurance Provider"
                    selectName="secondary_insurance.secondary_insurance_provider"
                    errorName="secondary_insurance.secondary_insurance_provider" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Plan Name" type="text" name="secondary_insurance.plan_name"
                    placeholder="Enter plan name" errorName="secondary_insurance.plan_name" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber" type="text" name="secondary_insurance.subscriber"
                    placeholder="Enter subscriber" errorName="secondary_insurance.subscriber" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Effective Date" type="date" name="Effective Date"
                    errorName="Effective Date" placeholder="Enter effective date" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Relationship" selectName="secondary_insurance.relationship"
                    errorName="secondary_insurance.relationship" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Policy Number" type="number" name="secondary_insurance.policy_number"
                    placeholder="Enter policy number" errorName="secondary_insurance.policy_number" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Date OF Birth" type="date" name="secondary_insurance.date_of_birth"
                    placeholder="Enter date of birth" errorName="secondary_insurance.date_of_birth" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Group Number" type="number" name="secondary_insurance.group_number"
                    placeholder="Enter group number" errorName="secondary_insurance.group_number" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Social Security" type="number"
                    name="secondary_insurance.social_security_number" placeholder="Enter social security number"
                    errorName="secondary_insurance.social_security_number" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Employer" type="text"
                    name="secondary_insurance.subscriber_employer" placeholder="Enter subscriber employer"
                    errorName="secondary_insurance.subscriber_employer" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.radio-field label="Gender" radioName="secondary_insurance.gender"
                    errorName="secondary_insurance.gender" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Employer Address" type="text"
                    name="secondary_insurance.subscriber_employer_address" placeholder="Enter subscriber employer address"
                    errorName="secondary_insurance_address.subscriber_employer" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Address" name="secondary_insurance.gender"
                    errorName="secondary_insurance.gender" type="text" placeholder="Enter subscriber address"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Subscriber Employer Country"
                    selectName="secondary_insurance.subscriber_employer_country"
                    errorName="secondary_insurance.subscriber_employer_country" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="Country" selectName="secondary_insurance.country"
                    errorName="secondary_insurance.country" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Subscriber Employer City"
                    selectName="secondary_insurance.subscriber_employer_city"
                    errorName="secondary_insurance.subscriber_employer_city" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="City" selectName="secondary_insurance.city"
                    errorName="secondary_insurance.city" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Subscriber Employer state"
                    selectName="secondary_insurance.subscriber_employer_state"
                    errorName="secondary_insurance.subscriber_employer_state" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="state" selectName="secondary_insurance.state"
                    errorName="secondary_insurance.state" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Employer Zip Code" type="number"
                    name="secondary_insurance.subscriber_employer_zipcode" placeholder="Enter subscriber employer zipcode"
                    errorName="secondary_insurance.subscriber_employer_zipcode" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Zip Code" type="number" name="secondary_insurance.zipcode"
                    placeholder="Enter zipcode" errorName="secondary_insurance.zipcode" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Phone" type="number"
                    name="secondary_insurance.subscriber_phone" placeholder="Enter subscriber phone number zipcode"
                    errorName="secondary_insurance.subscriber_phone" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Co-Payment" type="number" name="secondary_insurance.co_payment"
                    placeholder="Enter copayment" errorName="secondary_insurance.co_payment" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Accept Assignment" type="text"
                    name="secondary_insurance.accept_assignment" placeholder="Enter accept assignment"
                    errorName="secondary_insurance.accept_assignment" message="$message" />
            </div>
        </div>
        <livewire:components.atoms.button redirect="store" class="btn-primary" text="Submit" />
        <livewire:components.atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <livewire:components.atoms.error-if-not-checked />
    </form>
</div>
