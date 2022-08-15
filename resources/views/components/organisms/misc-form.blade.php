<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='misc.patient_id' />
                    <span class="text-danger">@error('misc.patient_id'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-molecules.input-field label="Date Deceased" type="date" name="misc.date_deceased"
                    placeholder="Enter date deceased" errorName="misc.date_deceased" message="$message" />
            </div>
            <div class="col">
                <x-molecules.input-field label="Reason Deceased" type="date" name="misc.reason_deceased"
                    placeholder="Enter reason deceased" errorName="misc.reason_deceased" message="$message" />
            </div>
        </div>
        <x-atoms.button redirect="store" class="btn-primary" text="Submit" />
        <x-atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <x-atoms.error-if-not-checked />
    </form>
</div>
