<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;
class PatientManager extends Component
{
    use WithPagination;

    public $patient, $firstname, $lastname, $patient_id, $date_of_birth,
           $gender,$marital_status,$national_id, $external_id, $user_defined,
           $billing_note, $updateMode = false , $createMode = false, $contact_form=false;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $patients = Patient::get();
        return view('livewire.patient.index')->with('patients',$patients);
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'national_id' => 'required',
            'external_id' => 'required',
            'user_defined' => 'required',
            'billing_note' => 'required',
        ]);

        Patient::create($validatedDate);

        session()->flash('message','Patient Created Successfully.');

        $this->resetInputFields();
        $this->createMode= false;
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        $this->patient_id = $id;
        $this->title = $patient->firstname;
        $this->body = $patient->lastname;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $patient = Patient::find($this->patient_id);
        $patient->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Patient Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Patient::find($id)->delete();
        session()->flash('message','Patient Deleted Successfully.');
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->createMode = false;
        $this->resetInputFields();
    }

    private function resetInputFields(){
        $this->firstname = null;
        $this->lastname = null;
        $this->date_of_birth = null;
        $this->gender = null;
        $this->marital_status = null;
        $this->national_id = null;
        $this->external_id = null;
        $this->user_defined = null;
        $this->billing_note = null;
    }


    public function contact_form()
    {
        $this->contact_form = true;
    }

}
