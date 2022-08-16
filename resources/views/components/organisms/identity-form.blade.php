<!-- Patient Identity Form (mandatory) -->
<div class="card-body px-0 pt-0 pb-2">

    <form class="container">

        <div class="row">

            <div class="col">
                <!-- Patient firstname  -->
                <x-molecules.input-field label="Firstname" type="text" name="patient.firstname"
                    placeholder="Enter Firstname" errorName="patient.firstname" message="$message" />
                <!-- print error if firstname field is empty or above 255 character -->
            </div>

            <div class="col">
                <!-- Patient lastname  -->
                <x-molecules.input-field label="Last Name" type="text" name="patient.lastname"
                    placeholder="Enter Lastname" errorName="patient.lastname" message="$message" />
                <!-- print error if lastname field is empty or above 255 character -->
            </div>

        </div>

        <div class="row">

            <div class="col">
                <!-- Patient date of birth  -->
                <x-molecules.input-field label="Date OF Birth" type="date" name="patient.date_of_birth"
                    placeholder="Enter date of birth" errorName="patient.date_of_birth" message="{$message}" />
                <!-- print error if date of birth field is empty or not date type -->
            </div>

        </div>
        <div class="row">

            <div class="col">
                <!-- Patient gender  -->
                <x-molecules.radio-field label="Gender" radioName="patient.gender" errorName="patient.gender"
                    message="$message" />
                <!-- print error if date of gender field is empty or not date type -->

            </div>

            <div class="col">
                <!-- Patient marital status  -->
                <x-molecules.select-field label="Marital Status" selectName="patient.marital_status"
                    errorName="patient.marital_status" message="$message" />
                <!-- print error if marital status field is empty -->
            </div>

        </div>

        <div class="row">

            <div class="col">
                <!-- Patient national id  -->
                <x-molecules.input-field label="License/ID" type="number" name="patient.national_id"
                    placeholder="Enter license or national id number" errorName="patient.national_id"
                    message="$message" />
                <!-- print error if national id field is empty -->
            </div>

            <div class="col">
                <!-- Patient social security number -->
                <x-molecules.input-field label="Social Security Number" type="number"
                    name="patient.social_security_number" placeholder="Enter social security number"
                    errorName="patient.social_security_number" message="$message" />
                <!-- print error if social security field is empty -->

            </div>

            <div class="col">
                <!-- Patient external id  -->
                <x-molecules.input-field label="External ID" type="number" name="patient.external_id"
                    placeholder="Enter external id number" errorName="patient.external_id" message="$message" />
                <!-- print error if external id field is empty -->
            </div>

        </div>

        <div class="row">

            <div class="col">
                <!-- Patient user define  -->
                <x-molecules.input-field label="User Defined" type="text" name="patient.user_defined"
                    placeholder="Enter user defined" errorName="patient.user_defined" message="$message" />
                <!-- print error if user define field is empty -->
            </div>

        </div>

        <div class="row">

            <div class="col">
                <!-- Patient billing note  -->
                <x-molecules.input-field label="Billing Note" type="text" name="patient.billing_note"
                    placeholder="Enter billing note" errorName="patient.billing_note" message="$message" />
                <!-- print error if billing note field is empty -->
            </div>
        </div>

        <x-atoms.button redirect="store" class="btn-primary" text="Submit" />
        <x-atoms.button redirect="cancel" class="btn-danger" text="Cancel" /><br>
        <x-atoms.error-if-not-checked />

    </form>

</div>