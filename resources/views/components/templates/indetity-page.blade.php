<div x-data="{ tabs: ['Identity', 'Contact', 'Choice', 'Stats', 'Misc', 'Insurance', 'Guardian'], activeTab: 'Identity' }">
    <div class="p-3">
        <template x-for="tab in tabs">
            <button x-on:click="activeTab = tab " x-text="tab" class='btn rounded-pill'
                :class="activeTab === tab ? 'btn-outline-primary' : 'btn-primary'"></button>
        </template>
    </div>
    <div x-show="activeTab === 'Identity' ">
        <x-molecules.card-heading-field heading='Patient' checkbox_name="patient_checkbox" />
        <x-organisms.identity-form />
    </div>
    <div x-show="activeTab === 'Contact' ">
        <x-molecules.card-heading-field heading="Contact" checkbox_name="contact_checkbox" />
        <x-organisms.contact-form />
    </div>
    <div x-show="activeTab === 'Choice' ">
        <x-molecules.card-heading-field heading="Choice" checkbox_name="choice_checkbox" />
        <x-organisms.choice-form />
    </div>
    <div x-show="activeTab === 'Stats' ">
        <x-molecules.card-heading-field heading="Stats" checkbox_name="stats_checkbox" />
        <x-organisms.stats-form />
    </div>
    <div x-show="activeTab === 'Misc' ">
        <x-molecules.card-heading-field heading="Misc" checkbox_name="misc_checkbox" />
        <x-organisms.misc-form />
    </div>
    <div x-show="activeTab === 'Insurance' ">
        <x-molecules.card-heading-field heading="Primary Insurance" checkbox_name="primary_insurance_checkbox" />
        <x-organisms.primary-insurance-form />
    </div>
    <div x-show="activeTab === 'Guardian' ">
        <x-molecules.card-heading-field heading="Guardian" checkbox_name="guardian_checkbox" />
        <x-organisms.guardian-form />
    </div>

</div>
