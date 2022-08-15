<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='stats.patient_id' />
                    <span class="text-danger">@error('stats.patient_id'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Language" selectName="stats.language" errorName="stats.language"
                    message="$message" />
            </div>
            <div class="col">
                <x-molecules.select-field label="Ethnicity" selectName="stats.ethnicity" errorName="stats.ethnicity"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="Race" selectName="stats.race" errorName="stats.race"
                    message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Financial Review Date" type="date" name="stats.financial_review_date"
                    placeholder="Enter financial review date" errorName="stats.financial_review_date"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Family Size" type="text" name="stats.family_size"
                    placeholder="Enter family size" errorName="stats.family_size" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Monthly Income" type="text" name="stats.monthly_income"
                    placeholder="Enter monthly income" errorName="stats.monthly_income" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Homeless" type="number" name="stats.homeless"
                    placeholder="Enter homeless" errorName="stats.homeless" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Interpreter" type="text" name="stats.interpreter"
                    placeholder="Enter interpreter" errorName="stats.interpreter" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Migrant/Seasonal" type="text" name="stats.migrant"
                    placeholder="Enter migrant" errorName="stats.migrant" message="$message" />
            </div>
            <div class="col">
                <x-molecules.select-field label="Referral Source" selectName="stats.referral_source"
                    errorName="stats.referral_source" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.select-field label="VFC" selectName="stats.vfc" errorName="stats.vfc"
                    message="$message" />
            </div>
            <div class="col">
                <x-molecules.select-field label="Religion" selectName="stats.religion" errorName="stats.religion"
                    message="$message" />
            </div>
        </div>
        <x-atoms.button redirect="store" class="btn-primary" text="Submit" />
        <x-atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <x-atoms.error-if-not-checked />
    </form>
</div>
