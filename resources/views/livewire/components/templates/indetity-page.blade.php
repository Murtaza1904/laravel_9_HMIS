<div livewire:components.data="{ tabs: ['Identity', 'Contact', 'Choice', 'Stats', 'Misc', 'Insurance', 'Guardian'], activeTab: 'Identity' }">
    <div class="p-3">
        <template livewire:components.for="tab in tabs">
            <button livewire:components.on:click="activeTab = tab " livewire:components.text="tab" class='btn rounded-pill'
                :class="activeTab === tab ? 'btn-outline-primary' : 'btn-primary'"></button>
        </template>
    </div>
    <div livewire:components.show="activeTab === 'Identity'">
        <livewire:components.molecules.card-heading-field key='heading => Patient' checkbox_name="patient_checkbox" />
        <livewire:components.organisms.identity-form />
    </div>
    <div livewire:components.show="activeTab === 'Contact'">
        <livewire:components.molecules.card-heading-field heading="Contact" checkbox_name="contact_checkbox" />
        <livewire:components.organisms.contact-form />
    </div>
    <div livewire:components.show="activeTab === 'Choice'">
        <livewire:components.molecules.card-heading-field heading="Choice" checkbox_name="choice_checkbox" />
        <livewire:components.organisms.choice-form />
    </div>
    <div livewire:components.show="activeTab === 'Stats'">
        <livewire:components.molecules.card-heading-field heading="Stats" checkbox_name="stats_checkbox" />
        <livewire:components.organisms.stats-form />
    </div>
    <div livewire:components.show="activeTab === 'Misc'">
        <livewire:components.molecules.card-heading-field heading="Misc" checkbox_name="misc_checkbox" />
        <livewire:components.organisms.misc-form />
    </div>
    <div livewire:components.show="activeTab === 'Insurance'">
        <livewire:components.molecules.card-heading-field heading="Primary Insurance" checkbox_name="primary_insurance_checkbox" />
        <livewire:components.organisms.primary-insurance-form />
    </div>
    <div livewire:components.show="activeTab === 'Guardian'">
        <livewire:components.molecules.card-heading-field heading="Guardian" checkbox_name="guardian_checkbox" />
        <livewire:components.organisms.guardian-form />
    </div>

</div>
