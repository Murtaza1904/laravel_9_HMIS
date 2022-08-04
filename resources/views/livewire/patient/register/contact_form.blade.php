<div class="card-header pb-0">
    <h6 class="text-primary">Add New Contact</h6>
</div>
<div class="card-body px-0 pt-0 pb-2">
    <form class="container" wire:submit.prevent="store_contact">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" wire:model="firstname" class="form-control" placeholder="Enter firstname">
                    @error('firstname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" wire:model="lastname" class="form-control" placeholder="Enter lastname">
                    @error('lastname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Date OF Birth</label>
            <input type="date" wire:model="date_of_birth" class="form-control" placeholder="Enter date of birth">
            @error('date_of_birth')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <label>Gender</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="male" wire:model="gender">
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="female" wire:model="gender">
                        <label class="form-check-label">Female</label>
                    </div>
                </div>
                @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Marital Status</label>
                    <select class="form-control" wire:model="marital_status">
                        <option value="">Select Status</option>
                        <option value="married">Married</option>
                        <option value="single">Single</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                        <option value="separated">Separated</option>
                        <option value="domestic_partner">Domestic Partner</option>
                    </select>
                    @error('marital_status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>License/ID</label>
                    <input type="number" wire:model="national_id" class="form-control"
                        placeholder="Enter license or national id number">
                    @error('national_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>External ID</label>
                    <input type="number" wire:model="external_id" class="form-control"
                        placeholder="Enter external id number">
                    @error('external_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>User Defined</label>
            <input type="text" wire:model="user_defined" class="form-control" placeholder="Enter user defined">
            @error('user_defined')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Billing Note</label>
            <input type="text" wire:model="billing_note" class="form-control" placeholder="Enter billing note">
            @error('billing_note')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button wire:click.prevent="cancel" class="btn btn-danger">Cancel</button>
    </form>
</div>
