<div class="form-group">
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="gender" type="radio" value="male" wire:model.lazy="{{ $radioName }}">
        <label class="form-check-label">Male</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="gender" type="radio" value="female" wire:model.lazy="{{ $radioName }}">
        <label class="form-check-label">Female</label>
    </div>
</div>
