<div class="card-body plivewire:components.0 pt-0 pb-2">
    <form class="container">
        {{-- <input type="hidden" value="@livewire('patient_id',$patient_id)" wire:model.lazy='id'> --}}
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Firstname" type="text" name="patient.firstname"
                    placeholder="Enter Firstname" errorName="patient.firstname" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Last Name" type="text" name="patient.lastname"
                    placeholder="Enter Lastname" errorName="patient.lastname" message="$message" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="Date OF Birth" type="date" name="patient.date_of_birth"
                    placeholder="Enter date of birth" errorName="patient.date_of_birth" message="{$message}" />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.radio-field label="Gender" radioName="patient.gender" errorName="patient.gender" message="$message" />
            </div>
            {{-- {{ dd($cities) }} --}}
            <div class="col">
                <livewire:components.molecules.select-field label="Marital Status" selectName="patient.marital_status" errorName="patient.marital_status" message="$message" />
            </div>
                {{-- <div class="form-group">
                    <label class="text-lg">City</label>
                    <select class="form-control" >
                        <option value="">Select City</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('contact.city')
                    <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                </div> --}}

        </div>
        <div class="row">
            <div class="col">
                <livewire:components.molecules.input-field label="License/ID" type="number" name="patient.national_id"
                    placeholder="Enter license or national id number" errorName="patient.national_id"
                    message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="Social Security Number" type="nummber"
                    name="patient.social_security_number" placeholder="Enter social security number"
                    errorName="patient.social_security_number" message="$message" />
            </div>
            <div class="col">
                <livewire:components.molecules.input-field label="External ID" type="number" name="patient.external_id"
                    placeholder="Enter external id number" errorName="patient.external_id" message="$message" />
            </div>
        </div>
            <div class="row">
                <div class="col">
                    <livewire:components.molecules.input-field label="User Defined" type="text" name="patient.user_defined"
                        placeholder="Enter user defined" errorName="patient.user_defined" message="$message" />
                </div>
            </div>
            <div class="row">
                <div class="col">
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
