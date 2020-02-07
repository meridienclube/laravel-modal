
@php
$idModal = isset($id)? $id : 'modal' . rand();
@endphp

@if(isset($btn))
    @btnShow(["class" => $idModal . " btn btn-brand btn-sm btn-upper", "data" => ["toggle" => "modal", "target" => "#" . $idModal ]])
    {!! $btn['label'] ?? 'Modal' !!}
    @endbtnShow
@endif

<div class="modal fade" id="{{ $idModal }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id ?? 'Modal' }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title ?? 'Modal' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('Fechar') }}</button>
                <button type="button" class="btn btn-primary save">{{ trans('Salvar') }}</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $("#{{ $idModal }} .modal-footer .save").click(function() {
            $("#{{ $idModal }} .modal-body form").submit();
        });
    </script>
@endpush
