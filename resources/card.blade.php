<!-- ksoft::card $card_style, $card_class, $card_title, $card_tabs, $reload_btn -->
<div class="card {{$card_class ?? ''}}"{!! isset($card_style)? ' style="'.$card_style.'"':'' !!}>
    @isset($card_title)
        <div class="card-header">
            @isset($reload_btn)
                <a href="{{request()->fullUrl()}}"  data-toggle="tooltip" title="{{__('Reload')}}" class="text-primary float-right">
                    <i class="far fa-sync-alt"></i>
                </a>
            @endisset
            {!! $card_title !!}
        </div>
    @endisset
    @isset($tabs)
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                @php
                    $i = 0;
                @endphp
                @foreach ($tabs as $tabId => $tabLabel)
                    <li class="nav-item">
                        <a class="nav-link {{$i==0?' active':''}}"
                            href="#{{$tabId}}"
                            data-toggle="tab"
                            role="tab"
                            aria-controls="{{$tabId}}"
                            aria-selected="{{$i==0?'true':'false'}}">{{$tabLabel}}</a>
                    </li>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </ul>
        </div>
    @endisset
    <div class="card-body">
        {{ $slot ?? '' }}
    </div>
</div>
