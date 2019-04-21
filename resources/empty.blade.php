<!-- ksoft::empty empty_icon, empty_text,  -->
<div class="text-center my-5">
    <div class="mt-4 text-muted">
        <i class="fal fa-{{$empty_icon ?? 'folder-open'}} fa-4x"></i>
    </div>
    <p class="h4 display-4">{{ $empty_text ?? __('No records found!') }}</p>
    {{ $slot ?? '' }}
</div>
