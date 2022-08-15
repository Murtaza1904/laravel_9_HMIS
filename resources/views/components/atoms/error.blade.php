@aware(['errorName'])

@error("{{ $errorName }}")
    <div class="form-text text-danger">{{ $message }}</div>
@enderror

