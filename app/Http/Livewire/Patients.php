<?php

namespace App\Http\Livewire;

use App\Models\{Choice,City,State,Contact,Country,Employer,
    Guardian,Misc,Patient,PrimaryInsurance,SecondaryInsurance,
    Stats,TertiaryInsurance,User,Language,Religion,Relationship,InsuranceAgent};
use Livewire\WithPagination;
use App\Http\Requests\{PatientRequest,ContactRequest,ChoiceRequest,EmployerRequest,StatsRequest,MiscRequest,GuardianRequest,PrimaryInsuranceRequest,SecondaryInsuranceRequest,TertiaryInsuranceRequest};
use Livewire\Component;
class Patients extends Component
{
    public $searchbox;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $identity_checkbox;
    public $contact_checkbox;
    public $choice_checkbox;
    public $employer_checkbox;
    public $stats_checkbox;
    public $misc_checkbox;
    public $guardian_checkbox;
    public $primary_insurance_checkbox;
    public $secondary_insurance_checkbox;
    public $tertiary_insurance_checkbox;

    public Patient $patient;
    public Contact $contact;
    public Choice $choice;
    public Employer $employer;
    public Stats $stats;
    public Misc $misc;
    public Guardian $guardian;
    public PrimaryInsurance $primary_insurance;
    public SecondaryInsurance $secondary_insurance;
    public TertiaryInsurance $tertiary_insurance;


    public function mount(Patient $patient, Contact $contact, Choice $choice, Employer $employer, Stats $stats, Guardian $guardian, PrimaryInsurance $primary_insurance, SecondaryInsurance $secondary_insurance, TertiaryInsurance $tertiary_insurance)
    {
        $this->countries = Country::orderBy('name')->get();
        $this->cities = City::orderBy('name')->get();
        $this->states = State::orderBy('name')->get();
        $this->languages = Language::orderBy('name')->get();
        $this->religions = Religion::orderBy('name')->get();
        $this->relationships = Relationship::orderBy('name')->get();
        $this->users = User::get();
        $this->patient = $patient;
        $this->contact = $contact;
        $this->choice = $choice;
        $this->employer = $employer;
        $this->stats = $stats;
        $this->guardian = $guardian;
        $this->primary_insurance = $primary_insurance;
        $this->secondary_insurance = $secondary_insurance;
        $this->tertiary_insurance = $tertiary_insurance;
    }

    public function rules()
    {
        // return array_merge(
            
            return (new PatientRequest())->rules();
            //   $this->identity_checkbox == 'checked' ?  (new PatientRequest())->rules() : array(),
            //   $this->contact_checkbox == 'checked' ?  (new ContactRequest())->rules() : array(),
                // (new ContactRequest())->rules(),
                // (new ChoiceRequest())->rules(),
                // (new EmployerRequest())->rules(),
                // (new StatsRequest())->rules(),
                // (new MiscRequest())->rules(),
                // (new GuardianRequest())->rules(),
                // (new PrimaryInsuranceRequest())->rules(),
                // (new SecondaryInsuranceRequest())->rules(),
                // (new TertiaryInsuranceRequest())->rules(),
            // );
    }


    public function render()
    {
        $searchbox = '%'.$this->searchbox.'%';
        return view('livewire.patients.index')
             ->with('patients',Patient::with('contacts')
             ->where('firstname','like',$searchbox)
             ->orWhere('lastname','like',$searchbox)
             ->orWhere('social_security_number','like',$searchbox)
             ->orWhere('date_of_birth','like',$searchbox)
             ->orWhere('external_id','like',$searchbox)
             ->paginate(10));
    }

    public function store()
    {
        if($this->identity_checkbox == 'checked')
        {
            $this->validate();
            return (new PatientRequest())->rules();
            $this->patient->save();
            session()->flash('success','Created Successfully.');
            $this->resetInputFields();
        }
        if($this->contact_checkbox == 'checked')
        {
            $this->validate();
            $this->contact->save();
            session()->flash('success','Created Successfully.');
            $this->resetInputFields();
        }
        if($this->choice_checkbox == 'checked')
        {
            $this->validate();
            $this->choice->save();
            session()->flash('success','Patient Choice Created Successfully.');
            $this->resetInputFields();
        }
        if($this->employer_checkbox == 'checked')
        {
            $this->validate();
            Employer::create($this->all());
            session()->flash('success','Patient Employer Created Successfully.');
            $this->resetInputFields();
        }
        if($this->stats_checkbox == 'checked')
        {
            $this->patient_id = 1;
            Stats::create($this->all());
            session()->flash('success','Patient Stats Created Successfully.');
            $this->resetInputFields();
        }
        if($this->misc_checkbox == 'checked')
        {
            $this->patient_id = 1;
            Misc::create($this->all());
            session()->flash('success','Patient Misc Created Successfully.');
            $this->resetInputFields();
        }
        if($this->guardian_checkbox == 'checked')
        {
            $this->patient_id = 1;
            Guardian::create($this->all());
            session()->flash('success','Patient Guardian Created Successfully.');
            $this->resetInputFields();
        }
        if($this->primary_insurance_checkbox == 'checked')
        {
            $this->patient_id = 1;
            PrimaryInsurance::create($this->all());
            session()->flash('success','Patient primary Created Successfully.');
            $this->resetInputFields();
        }
        if($this->secondary_insurance_checkbox == 'checked')
        {
            $this->patient_id = 1;
            SecondaryInsurance::create($this->all());
            session()->flash('success','Patient Secondary Created Successfully.');
            $this->resetInputFields();
        }
        if($this->tertiary_insurance_checkbox == 'checked')
        {
            $this->patient_id = 1;
            TertiaryInsurance::create($this->all());
            session()->flash('success','Patient Tertiary Created Successfully.');
            $this->resetInputFields();
        }

        session()->flash('alert', 'Make sure you have checked the box.');

    }

    public function cancel()
    {
        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        if($this->identity_checkbox == true)
        {
            $this->patient->firstname = null;
            $this->patient->lastname = null;
            $this->patient->date_of_birth = null;
            $this->patient->gender = null;
            $this->patient->marital_status = null;
            $this->patient->national_id = null;
            $this->patient->social_security_number = null;
            $this->patient->external_id = null;
            $this->patient->user_defined = null;
            $this->patient->billing_note = null;
        }

        if($this->contact_checkbox == true)
        {
            $this->patient_id = null;
            $this->address = null;
            $this->country = null;
            $this->city = null;
            $this->state = null;
            $this->county = null;
            $this->postal_code = null;
            $this->mother_name = null;
            $this->emergency_contact = null;
            $this->emergency_phone = null;
            $this->home_phone = null;
            $this->work_phone = null;
            $this->mobile_phone = null;
            $this->contact_email = null;
            $this->trusted_email = null;
        }
        if($this->choice_checkbox == true)
        {
            $this->provider = null;
            $this->referring_provider = null;
            $this->pharmacy = null;
            $this->hipaa_notice_received = null;
            $this->allow_voice_message = null;
            $this->leave_message_with = null;
            $this->allow_mail_message = null;
            $this->allow_sms = null;
            $this->allow_email = null;
            $this->allow_immunization_registry_use = null;
            $this->allow_immunization_info_sharing = null;
            $this->allow_health_information_exchange = null;
            $this->allow_patient_portal = null;
            $this->cms_portal_login = null;
            $this->immunization_registry_status = null;
            $this->immunization_registry_status_effective_date = null;
            $this->publicity_code = null;
            $this->publicity_code_effective_date = null;
            $this->protection_indicator = null;
            $this->protection_indicator_effective_date = null;
            $this->care_team_provider = null;
            $this->care_team_facility = null;
        }

        if($this->employer_checkbox == true)
        {
            $this->industry = null;
            $this->occupation = null;
            $this->employer_name = null;
            $this->employer_address = null;
        }

        if($this->stats_checkbox == true)
        {
            $this->language = null;
            $this->ethnicity = null;
            $this->race = null;
            $this->financial_review_date = null;
            $this->family_size = null;
            $this->monthly_income = null;
            $this->homeless = null;
            $this->interpreter = null;
            $this->migrant = null;
            $this->referral_source = null;
            $this->vfc = null;
            $this->religion = null;
        }

        if($this->misc_checkbox == true)
        {
            $this->date_deceased = null;
            $this->reason_deceased = null;
        }

        if($this->guardian_checkbox == true)
        {
            $this->name = null;
            $this->relationship = null;
            $this->phone = null;
            $this->email = null;
        }

        if($this->primary_insurance_checkbox == true)
        {
            $this->primary_insurance_provider = null;
            $this->plan_name = null;
            $this->subscriber = null;
            $this->effective_date = null;
            $this->policy_number = null;
            $this->group_number = null;
            $this->social_security_number = null;
            $this->subscriber_employer = null;
            $this->subscriber_employer_address = null;
            $this->subscriber_address = null;
            $this->subscriber_employer_city = null;
            $this->subscriber_employer_state = null;
            $this->subscriber_employer_zipcode = null;
            $this->zipcode = null;
            $this->subscriber_employer_country = null;
            $this->subscriber_phone = null;
            $this->co_payment = null;
            $this->accept_assignment = null;
        }

        if($this->secondary_insurance_checkbox == true)
        {
            $this->secondary_insurance_provider = null;
            $this->plan_name = null;
            $this->subscriber = null;
            $this->effective_date = null;
            $this->policy_number = null;
            $this->group_number = null;
            $this->social_security_number = null;
            $this->subscriber_employer = null;
            $this->subscriber_employer_address = null;
            $this->subscriber_address = null;
            $this->subscriber_employer_city = null;
            $this->subscriber_employer_state = null;
            $this->subscriber_employer_zipcode = null;
            $this->zipcode = null;
            $this->subscriber_employer_country = null;
            $this->subscriber_phone = null;
            $this->co_payment = null;
            $this->accept_assignment = null;
        }

        if($this->tertiary_insurance_checkbox == true)
        {
            $this->tertiary_insurance_provider = null;
            $this->plan_name = null;
            $this->subscriber = null;
            $this->effective_date = null;
            $this->policy_number = null;
            $this->group_number = null;
            $this->social_security_number = null;
            $this->subscriber_employer = null;
            $this->subscriber_address = null;
            $this->subscriber_employer_address = null;
            $this->subscriber_employer_city = null;
            $this->subscriber_employer_state = null;
            $this->subscriber_employer_zipcode = null;
            $this->zipcode = null;
            $this->subscriber_employer_country = null;
            $this->subscriber_phone = null;
            $this->co_payment = null;
            $this->accept_assignment = null;
        }
    }

}
