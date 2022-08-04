<div>
    @if ($updateMode)
        @include('livewire.patient.update')
    @elseif($createMode)
        @include('livewire.patient.create')
    @else
        @if (session()->has('success'))
            <span style="color:lightgreen">
                {{ session('success') }}
            </span>
        @endif
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-primary">Patients</h6>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" wire:click.prevent="create" class="btn btn-primary">Add New</button>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-center font-weight-bolder opacity-7">#</th>
                            <th class="text-uppercase text-center font-weight-bolder opacity-7">Full Name</th>
                            <th class="text-uppercase text-center font-weight-bolder opacity-7 ps-2">Home Phone</th>
                            <th class="text-uppercase text-center font-weight-bolder opacity-7">SSN</th>
                            <th class="text-uppercase text-center font-weight-bolder opacity-7">Date Of Birth</th>
                            <th class="text-uppercase text-center font-weight-bolder opacity-7">External ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($patients as $patient)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $patient->firstname }}{{ $patient->lastname }}</td>
                                <td>Null</td>
                                <td>Null</td>
                                <td>{{ $patient->date_of_birth }}</td>
                                <td>{{ $patient->external_id }}</td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td class="text-danger" colspan="6">No Record Found!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
