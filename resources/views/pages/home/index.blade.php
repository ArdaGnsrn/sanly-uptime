<x-app>
    <div class="col-12">
        <button class="btn btn-sm btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#newMonitor">
            Yeni Monitör
        </button>
    </div>

    @push('content-after')
        <x-modal name="newMonitor"
                 ok-id="saveNewMonitor"
                 ok-text="Kaydet"
                 title="Yeni Monitör">
            <form>
                <div class="row mb-3">
                    <label for="name" class="col-sm-4 col-form-label">Site Adı</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" required id="name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="url" class="col-sm-4 col-form-label">URL</label>
                    <div class="col-sm-8">
                        <input type="url" class="form-control" required id="url">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="interval" class="col-sm-4 col-form-label">Kontrol Aralığı (dk)</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" required id="interval">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="timeout" class="col-sm-4 col-form-label">Zaman Aşımı (sn)</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" required id="timeout">
                    </div>
                </div>
            </form>
        </x-modal>
    @endpush
</x-app>
