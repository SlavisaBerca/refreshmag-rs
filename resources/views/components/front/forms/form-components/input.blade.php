@props([
    'type'=>'text',
    'class'=>'',
    'is_model'=>false,
    'is_live'=>false,
    'debounce_time'=>null,
    'name'=>null,
    'model'=>null,
    'placeholder'=>null,
    'id'=>null,
])
<input class="form-control  {{ $class }}" 
type="{{ $type }}" 
@if($is_model)   
    @if($is_live)
    @if($debounce_time)
    wire:model.live.debounce.{{ $debounce_time }}="{{ $model }}"
    @else
    wire:model.live="{{ $model }}"
    @endif 
    @else  
    wire:model="{{ $model }}"    
    @endif  
@endif 
@if($name) name="{{ $name }}" @endif  placeholder="{{ $placeholder }}" id="{{ $id }}"
>