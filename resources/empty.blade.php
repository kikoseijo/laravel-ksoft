<!-- ksoft::empty empty_icon, empty_text,  -->
<div class="text-center my-5">
    <div class="mt-5 text-muted">
        <i class="fal fa-4x fa-{{$empty_icon ?? 'folder-open'}}"></i>
    </div>
    <p class="h4 text-muted {{$empty_text_style ?? ''}}">{{ $empty_text ?? __('No records found!') }}</p>
    {{ $slot ?? '' }}
</div>
