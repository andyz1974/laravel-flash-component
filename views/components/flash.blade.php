{{-- Setting properties --}}
@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-200 border-green-600 text-green-600',
        'error' => 'bg-red-200 border-red-600 text-red-600',
        'info' => 'bg-indigo-200 border-indigo-600 text-indigo-600'
    ],
    'timeout' => false
])

@if(session()->has($type))
    <div 
        x-data="{show: true}" 
        x-show.transition.duration.800ms="show"

        @if($timeout)

            x-init="setTimeout(() => show = false, {{$timeout*1000}})" 

        @endif

        class="{{$colors[$type]}} border-l-4 p-2 flex justify-between mb-4" role="alert"
    >
        <p class="mt-1">
            {{session($type)}}
        </p>
        
        <button
            @click="show = false"             
            class="mx-3"
        >
        x
        </button>
    </div>
@endif