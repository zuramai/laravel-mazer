@props(['active', 'icon', 'link', 'name'])

@php
$classes = ($active ?? false)
            ? 'sidebar-item  active'
            : 'sidebar-item';
@endphp

<li class="sidebar-item">
    <a href="{{ $link }}" class='sidebar-link'>
        <i class="{{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>
</li>