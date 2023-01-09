<div class="form-group">
    @if($type != "hidden")
    <label for="{{ $name }}" class="form-label">{{ $placeholder }}</label>
    @endif
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}" aria-describedby="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}" {{ $attribute }}>
</div>