@if (session()->has('alert'))
<span class="text-danger text-sm">{{ session('alert') }}</span>
@endif
