@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#e93f45] focus:ring-[#e93f45] rounded-md shadow-sm']) !!}>
