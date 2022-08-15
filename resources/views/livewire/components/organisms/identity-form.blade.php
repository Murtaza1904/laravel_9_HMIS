<!-- Patient Identity Form (mandatory)-->
<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">

        <!-- Patient id  generated from patient class-->
        <input type="hidden" value="{{ $patient_id }}" wire:model.lazy='id'>
        <!-- patient id is  empty -->
        
        <div class="row">

            <div class="col">
                <!-- Patient firstname  -->
                <livewire:components.molecules.input-field label="Firstname" type="text" name="patient.firstname"
                    placeholder="Enter Firstname" errorName="patient.firstname" message="$message" />
                <!-- print error if firstname  is empty or above 255 character  -->
            </div>

            <div class="col">
                <!-- Patient lastname  -->
                <livewire:components.molecules.input-field label="Last Name" type="text" name="patient.lastname"
                    placeholder="Enter Lastname" errorName="patient.lastname" message="$message" />
                <!-- print error if lastname is empty or above 255 character  -->
            </div>

        </div>

        <div class="row">

            <div class="col">
                <!-- Patient date of birth  -->
                <livewire:components.molecules.input-field label="Date OF Birth" type="date"
                    name="patient.date_of_birth" placeholder="Enter date of birth" errorName="patient.date_of_birth"
                    message="{$message}" />
                <!-- print error if date of birth is empty or above 255 character  -->
            </div>

        </div>
        <div class="row">
            <div class="col">
                <!-- Patient gender  -->
                <livewire:components.molecules.radio-field label="Gender" radioName="patient.gender"
                    errorName="patient.gender" message="$message" />
            </div>

            <div class="col">
                <!-- Patient marital status  -->
                <livewire:components.molecules.select-field label="Marital Status" selectName="patient.marital_status"
                    errorName="patient.marital_status" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Patient national id  -->
                <livewire:components.molecules.input-field label="License/ID" type="number" name="patient.national_id"
                    placeholder="Enter license or national id number" errorName="patient.national_id"
                    message="$message" />
            </div>
            <div class="col">
                <!-- Patient social security number -->
                <livewire:components.molecules.input-field label="Social Security Number" type="number"
                    name="patient.social_security_number" placeholder="Enter social security number"
                    errorName="patient.social_security_number" message="$message" />
            </div>
            <div class="col">
                <!-- Patient external id  -->
                <livewire:components.molecules.input-field label="External ID" type="number" name="patient.external_id"
                    placeholder="Enter external id number" errorName="patient.external_id" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Patient user define  -->
                <livewire:components.molecules.input-field label="User Defined" type="text" name="patient.user_defined"
                    placeholder="Enter user defined" errorName="patient.user_defined" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Patient billing note  -->
                <livewire:components.molecules.input-field label="Billing Note" type="text" name="patient.billing_note"
                    placeholder="Enter billing note" errorName="patient.billing_note" message="$message" />
            </div>
        </div>
        <livewire:components.atoms.button redirect="store" class="btn-primary" text="Submit" />
        <livewire:components.atoms.button redirect="cancel" class="btn-danger" text="Cancel" />
        <br>
        <livewire:components.atoms.error-if-not-checked />
    </form>
</div>