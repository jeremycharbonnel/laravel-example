@props(['name'])

@error($name)
    <p class="text-sm text-red-400 italic mt-1">{{ $message }}</p>
@enderror
