<x-app>
    <div class="col-12">
        <button class="btn btn-sm btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#newMonitor">
            Yeni Monitör
        </button>
    </div>

    @push('content-after')
        <x-modal name="newMonitor" ok-id="saveNewMonitor" ok-text="Kaydet" title="Yeni Monitör">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur, assumenda beatae blanditiis
            consectetur fugiat nam obcaecati praesentium quaerat reprehenderit sed sint tenetur totam vitae voluptatem!
            Eos quos repellat sed.
        </x-modal>
    @endpush
</x-app>
