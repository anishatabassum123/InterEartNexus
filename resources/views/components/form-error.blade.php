@props(['name'])
@error($name)
    <p class="text-danger fw-semibold" style="font-size: 0.75rem;">{{ $message }}</p>
@enderror
