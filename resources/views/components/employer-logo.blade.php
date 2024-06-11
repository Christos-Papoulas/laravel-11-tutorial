@props(['employer', 'width' => 90])

@php
if (filter_var($employer->logo, FILTER_VALIDATE_URL) === FALSE) {
    $link = asset('storage/' . $employer->logo);
} else {
    $link = $employer->logo;
}
@endphp
<img class="rounded-xl" src="{{ $link }}" width="{{ $width }}" alt="">
