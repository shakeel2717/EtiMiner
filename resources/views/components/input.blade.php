@if($type != "hidden")
<label class="mt-4" for="{{ $name }}">{{ $placeholder }}</label>
@endif
<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}" {{ $attribute }}>