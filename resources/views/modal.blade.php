<div class="modal-header">
    <h5 class="modal-title">{{ $data->name_product }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="summary">
        <div class="img-fluid">
            @if ($data->image_product != '')
                <img src="{{ $data->image_product }}" class="img-fluid">
            @else
                <img src="/asset/etc/no_image.jpg" class="img-fluid">
            @endif
        </div>
        <div class="summary-item">
            <p>
                {{ $data->description_product }}
            </p>
            <span>
                <h2>@currency($data->price)</h2>
            </span>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
