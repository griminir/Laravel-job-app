@props(['employer', 'width' => 90])

{{--had to add a asset_url to .env file for url/storage to make asset work--}}
<img src="{{ asset($employer->logo) }}" alt="logo" width="{{ $width }}" class="rounded-xl"/>

{{-- http://picsum.photos/seed/{{ rand(0,1000) }}/{{ $width }}--}}
