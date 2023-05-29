<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control"  cols="30" rows="5">{{ $value }}</textarea>
    <div class="invalid-feedback">
        Veuillez fournir un <span style="text-transform:lowercase;">{{ $label }}</span> valide.
    </div>
</div>
