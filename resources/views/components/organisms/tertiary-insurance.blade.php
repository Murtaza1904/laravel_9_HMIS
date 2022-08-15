<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='tertiary_insurance.patient_id' />
                    <span class="text-danger">@error('tertiary_insurance.patient_id'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Primary Insurance Provider"
                    selectName="tertiary_insurance.tertiary_insurance_provider"
                    errorName="tertiary_insurance.tertiary_insurance_provider" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Plan Name" type="text" name="tertiary_insurance.plan_name"
                    placeholder="Enter plan name" errorName="tertiary_insurance.plan_name" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Subscriber" type="text" name="tertiary_insurance.subscriber"
                    placeholder="Enter subscriber" errorName="tertiary_insurance.subscriber" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Effective Date" type="date" name="Effective Date"
                    errorName="Effective Date" placeholder="Enter effective date" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Relationship" selectName="tertiary_insurance.relationship"
                    errorName="tertiary_insurance.relationship" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Policy Number" type="number" name="tertiary_insurance.policy_number"
                    placeholder="Enter policy number" errorName="tertiary_insurance.policy_number"
                    message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Date OF Birth" type="date" name="tertiary_insurance.date_of_birth"
                    placeholder="Enter date of birth" errorName="tertiary_insurance.date_of_birth"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Group Number" type="number" name="tertiary_insurance.group_number"
                    placeholder="Enter group number" errorName="tertiary_insurance.group_number" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Social Security" type="number"
                    name="tertiary_insurance.social_security_number" placeholder="Enter social security number"
                    errorName="tertiary_insurance.social_security_number" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Subscriber Employer" type="text"
                    name="tertiary_insurance.subscriber_employer" placeholder="Enter subscriber employer"
                    errorName="tertiary_insurance.subscriber_employer" message="$message" />
            </div>
            <div class="col">
                <x-molecules.radio-field label="Gender" radioName="tertiary_insurance.gender"
                    errorName="tertiary_insurance.gender" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Subscriber Employer Address" type="text"
                    name="tertiary_insurance.subscriber_employer_address"
                    placeholder="Enter subscriber employer address"
                    errorName="tertiary_insurance_address.subscriber_employer" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Subscriber Address" name="tertiary_insurance.gender"
                    errorName="tertiary_insurance.gender" type="text" placeholder="Enter subscriber address"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Subscriber Employer Country"
                    selectName="tertiary_insurance.subscriber_employer_country"
                    errorName="tertiary_insurance.subscriber_employer_country" message="$message" />
            </div>
            <div class="col">
                <x-molecules.select-field label="Country" selectName="tertiary_insurance.country"
                    errorName="tertiary_insurance.country" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Subscriber Employer City"
                    selectName="tertiary_insurance.subscriber_employer_city"
                    errorName="tertiary_insurance.subscriber_employer_city" message="$message" />
            </div>
            <div class="col">
                <x-molecules.select-field label="City" selectName="tertiary_insurance.city"
                    errorName="tertiary_insurance.city" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Subscriber Employer state"
                    selectName="tertiary_insurance.subscriber_employer_state"
                    errorName="tertiary_insurance.subscriber_employer_state" message="$message" />
            </div>
            <div class="col">
                <x-molecules.select-field label="state" selectName="tertiary_insurance.state"
                    errorName="tertiary_insurance.state" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Subscriber Employer Zip Code" type="number"
                    name="tertiary_insurance.subscriber_employer_zipcode"
                    placeholder="Enter subscriber employer zipcode"
                    errorName="tertiary_insurance.subscriber_employer_zipcode" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Zip Code" type="number" name="tertiary_insurance.zipcode"
                    placeholder="Enter zipcode" errorName="tertiary_insurance.zipcode" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Subscriber Phone" type="number"
                    name="tertiary_insurance.subscriber_phone" placeholder="Enter subscriber phone number zipcode"
                    errorName="tertiary_insurance.subscriber_phone" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Co-Payment" type="number" name="tertiary_insurance.co_payment"
                    placeholder="Enter copayment" errorName="tertiary_insurance.co_payment" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Accept Assignment" type="text"
                    name="tertiary_insurance.accept_assignment" placeholder="Enter accept assignment"
                    errorName="tertiary_insurance.accept_assignment" message="$message" />
            </div>
        </div>
        <x-atoms.button redirect="store" class="btn-primary" text="Submit" />
        <x-atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <x-atoms.error-if-not-checked />
    </form>
</div>
