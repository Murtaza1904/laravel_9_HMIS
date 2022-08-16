@aware(['selectName'])
<select class="form-select" wire:model.lazy="{{ $selectName }}">
    
    <option value="" selected>Select</option>
    
    <option value="single">Single</option>
    
    @foreach ($collection as $item)
        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
    @endforeach

</select>
