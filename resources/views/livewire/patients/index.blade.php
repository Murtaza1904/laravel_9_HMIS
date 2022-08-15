<div x-data="{ create: false }">
    <div x-show="create === true">
        @include('livewire.components.templates.indetity-page')
        @if (session('success'))
            <div x-model="create = false"></div>
            <script>
                swal(
                    '<?php echo session('success'); ?>', "", "success")
            </script>
        @endif
    </div>
    <div x-show="create === false">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-primary">Patients</h6>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here..." wire:model='searchbox'>
                    </div>
                </div>
                <div class="col-md-2">
                    <button x-on:click="create = true" class="btn btn-primary">Add New</button>
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
                        @forelse ($patients as $p)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->firstname }}{{ $p->lastname }}</td>
                                <td>{{ optional($p->contacts)->home_phone ?: 'NULL' }}</td>
                                <td>{{ $p->social_security_number }}</td>
                                <td>{{ $p->date_of_birth }}</td>
                                <td>{{ $p->external_id }}</td>
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
        <div class="pt-5">
            {{ $patients->links() }}
        </div>
    </div>
</div>
