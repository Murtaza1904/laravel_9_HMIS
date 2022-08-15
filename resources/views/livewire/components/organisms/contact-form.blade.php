<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">

        <input type="hidden" value="" wire:model.lazy='contact.patient_id' />

        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Address" type="text" name="contact.address"
                    placeholder="Enter address" errorName="patient.address" message="$message" />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="Country" selectName="contact.country" errorName="contact.country"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="City" selectName="contact.city" errorName="contact.city"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.select-field label="State" selectName="contact.state" errorName="contact.state"
                    message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.select-field label="County" selectName="contact.county" errorName="contact.county"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Postal Code" type="number" name="contact.postal_code"
                    placeholder="Enter postal code" errorName="contact.postal_code" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Mother name" type="number" name="contact.mother_name"
                    placeholder="Enter mother name" errorName="contact.mother_name" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Emergency Contact" type="number" name="contact.emergency_contact"
                    placeholder="Enter emergency number" errorName="contact.emergency_contact" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Emergency Phone Number" type="number" name="contact.emergency_phone"
                    placeholder="Enter emergency phone number" errorName="contact.emergency_phone" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Home Phone" type="number" name="contact.home_phone"
                    placeholder="Enter home phone number" errorName="contact.home_phone" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Work Phone" type="number" name="contact.work_phone"
                    placeholder="Enter work phone number" errorName="contact.work_phone" message="$message" />
            </div>
        </div>
        <livewire:components.atoms.button redirect="store" class="btn-primary" text="Submit" />
        <livewire:components.atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <livewire:components.atoms.error-if-not-checked />
    </form>
</div>
