<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        <div class="row">
            <div class="col">
                <div class="pb-3">
                    <label>Patient ID</label>
                    <input type="number" class="form-control" wire:model.lazy='guardian.patient_id' />
                    <span class="text-danger">
                        @error('guardian.patient_id')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <livewire:components.molecules.radio-field label="Gender" radioName="guardian.gender" errorName="guaedian.gender" message="$message" />
            </div>
            <div class="col-9">
                <livewire:components.molecules.select-field label="Relationship" selectName="guardian.relationship"
                    errorName="guardian.relationship" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Address" name="guardian.address" errorName="guardian.address"
                    placeholder="Enter address" type="text" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Country" selectName="guardian.country" errorName="guardian.country"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="City" selectName="guardian.city" errorName="guardian.city"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="State" selectName="guardian.state" errorName="guardian.state"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Postal Code" name="guardian.postal_code"
                    errorName="guardian.postal_code" type="number" placeholder="Enter postal code"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Phone" type="number" name="guardian.phone"
                    placeholder="Enter phone number" errorName="guardian.phone" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Work Phone" type="number" name="guardian.work_phone"
                    placeholder="Enter work phone number" errorName="guardian.work_phone" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Email" type="email" name="guardian.email"
                    placeholder="Enter email address" errorName="guardian.email" message="$message" />
            </div>
        </div>
        <livewire:components.atoms.button redirect="store" class="btn-primary" text="Submit" />
        <livewire:components.atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <livewire:components.atoms.error-if-not-checked />
    </form>
</div>
