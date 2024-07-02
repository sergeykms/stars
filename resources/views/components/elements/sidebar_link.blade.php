@props(['active' => 'active'])

<a {{ $attributes }}
   @class([
    'sidebar__item sidebar__item_active ' => $active,
    'sidebar__item' => !$active
    ])>
    {{ $slot }}
</a>
