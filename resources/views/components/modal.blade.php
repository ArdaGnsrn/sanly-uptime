<div class="modal fade" id="{{$name}}" tabindex="-1" role="dialog"
     aria-labelledby="{{$name}}Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{$name}}Title">
                    {{$title}}
                </h5>
                <button type="button"
                        class="bg-transparent border-0 text-white"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
            <div class="modal-footer">
                <button class="btn btn-light-dark" data-bs-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-primary" id="{{$okId}}">
                    {{$okText}}
                </button>
            </div>
        </div>
    </div>
</div>
