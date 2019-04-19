<!-- ksoft::modal @modal -->
<?php $curModalId = isset($modal_id) ? $modal_id : 'modal-'.rand(10000,1111222); ?>
<div class="modal fade" id="{{$curModalId}}" tabindex="-1" role="dialog" aria-labelledby="{{$curModalId}}Label" aria-hidden="true">
  <div class="modal-dialog modal-{{isset($modal_size)?$modal_size:'sm'}}" role="document">
    <div class="modal-content">
      <div class="modal-header">
          @isset($modal_title)
              <h5 class="modal-title" id="{{$curModalId}}Label">{{$modal_title}}</h5>
          @endisset
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{$slot ?? ''}}
    </div>
  </div>
</div>
