@props(['id' => 'modal', 'btnok' => '', 'btncancel' => '', 'btnoktype' => 'btn-primary'])

<div class="modal modal-blur fade" {{ $attributes->merge(['id' => $id]) }} tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title">{{ $title ?? ''}}</div>
          <div>{{ $slot }}</div>
        </div>
        <div class="modal-footer">
          @if (!empty($btncancel))
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">{{ $btncancel }}</button>
          @endif
          @if (!empty($btnok))
            <button type="button" {{ $attributes->merge(['class' => 'btn '.$btnoktype]) }} data-bs-dismiss="modal">{{ $btnok }}</button>
          @endif
        </div>
      </div>
    </div>
</div>