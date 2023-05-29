<div @class(['mb-3' => !empty($label)])>
   @if(!empty($label)) <label for="{{ $name }}" class="form-label">{{ $label }}</label> @endif
    <input autocomplete="off" type="{{ $type }}" class="form-control" id="{{ $name }}"  name="{{ $name }}" value="{{ $value }}" aria-describedby="{{ $name }}Help" required>
    <div class="invalid-feedback">
        Veuillez fournir un <span style="text-transform:lowercase;">{{ $label }}</span> valide.
    </div>
</div>
