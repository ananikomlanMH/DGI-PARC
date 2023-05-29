<div @class(['mb-3' => !empty($label)])>
    @if(!empty($label)) <label for="{{ $name }}" class="form-label">{{ $label }}</label> @endif
    <select id="{{ $name }}" name="{{ $name }}" class="form-select" required>
        <option selected disabled value="">{{ $label }}...</option>
        @foreach($data as $item)
        <option value="{{ $item->id }}" @selected($value == $item->id)>{{ $item->designation }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback">
        Veuillez fournir un <span style="text-transform:lowercase;">{{ $label }}</span> valide.
    </div>
</div>
