<!-- ksoft::empty empty_icon, empty_text,  -->
<div class="text-center my-5">
    <div class="mt-5 text-70">
        <i class="fal fa-4x fa-{{$empty_icon ?? 'folder-open'}}"></i>
    </div>
    <p class="h4 text-70 {{$empty_text_style ?? ''}} mt-3">
        {{ $empty_text ?? __('No records found!') }}
    </p>
    {{ $slot ?? '' }}
</div>
