<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='primary_insurance.patient_id' />
                    <span class="text-danger">@error('primary_insurance.patient_id'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Primary Insurance Provider"
                    selectName="primary_insurance.primary_insurance_provider"
                    errorName="primary_insurance.primary_insurance_provider" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Plan Name" type="text" name="primary_insurance.plan_name"
                    placeholder="Enter plan name" errorName="primary_insurance.plan_name" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber" type="text" name="primary_insurance.subscriber"
                    placeholder="Enter subscriber" errorName="primary_insurance.subscriber" message="$message" />
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
                <livewire:components.molecules.select-field label="Relationship" selectName="primary_insurance.relationship"
                    errorName="primary_insurance.relationship" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Policy Number" type="number" name="primary_insurance.policy_number"
                    placeholder="Enter policy number" errorName="primary_insurance.policy_number" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Date OF Birth" type="date" name="primary_insurance.date_of_birth"
                    placeholder="Enter date of birth" errorName="primary_insurance.date_of_birth" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Group Number" type="number" name="primary_insurance.group_number"
                    placeholder="Enter group number" errorName="primary_insurance.group_number" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Social Security" type="number"
                    name="primary_insurance.social_security_number" placeholder="Enter social security number"
                    errorName="primary_insurance.social_security_number" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Employer" type="text"
                    name="primary_insurance.subscriber_employer" placeholder="Enter subscriber employer"
                    errorName="primary_insurance.subscriber_employer" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.radio-field label="Gender" radioName="primary_insurance.gender" errorName="primary_insurance.gender" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Employer Address" type="text"
                    name="primary_insurance.subscriber_employer_address" placeholder="Enter subscriber employer address"
                    errorName="primary_insurance.subscriber_employer_address" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Address" name="primary_insurance.gender"
                    errorName="primary_insurance.gender" type="text" placeholder="Enter subscriber address"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Subscriber Employer Country"
                    selectName="primary_insurance.subscriber_employer_country"
                    errorName="primary_insurance.subscriber_employer_country" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="Country" selectName="primary_insurance.country"
                    errorName="primary_insurance.country" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Subscriber Employer City"
                    selectName="primary_insurance.subscriber_employer_city"
                    errorName="primary_insurance.subscriber_employer_city" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="City" selectName="primary_insurance.city"
                    errorName="primary_insurance.city" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Subscriber Employer state"
                    selectName="primary_insurance.subscriber_employer_state"
                    errorName="primary_insurance.subscriber_employer_state" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="state" selectName="primary_insurance.state"
                    errorName="primary_insurance.state" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Employer Zip Code" type="number"
                    name="primary_insurance.subscriber_employer_zipcode"
                    placeholder="Enter subscriber employer zipcode"
                    errorName="primary_insurance.subscriber_employer_zipcode" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Zip Code" type="number" name="primary_insurance.zipcode"
                    placeholder="Enter zipcode" errorName="primary_insurance.zipcode" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Subscriber Phone" type="number"
                    name="primary_insurance.subscriber_phone" placeholder="Enter subscriber phone number zipcode"
                    errorName="primary_insurance.subscriber_phone" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Co-Payment" type="number" name="primary_insurance.co_payment"
                    placeholder="Enter copayment" errorName="primary_insurance.co_payment" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Accept Assignment" type="text"
                    name="primary_insurance.accept_assignment" placeholder="Enter accept assignment"
                    errorName="primary_insurance.accept_assignment" message="$message" />
            </div>
        </div>
        <livewire:components.atoms.button redirect="store" class="btn-primary" text="Submit" />
        <livewire:components.atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <livewire:components.atoms.error-if-not-checked />
    </form>
</div>
