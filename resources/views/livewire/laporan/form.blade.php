<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Tambah Laporan</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Laporan</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Laporan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <form wire:submit.prevent="submit">
            <div class="col-lg-8 col-xl-8">
                <div class="form-group">
                    <label for="example-select">Pilih Menu</label>
                    <select class="form-control" id="example-select" name="example-select" wire:model="parentmenu">
                        <option value="">Pilih Parent</option>
                        @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{$menu->id_menu}} {{ $menu->name }}</option>
                        @endforeach
                    </select>
                    @error('parentmenu') <div id="error" style="color: red">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="idlaporan">ID Laporan</label>
                    <input type="text" class="form-control" id="idlaporan" name="idlaporan" placeholder="ID Laporan" wire:model="idlaporan">
                    @error('idlaporan') <div id="error" style="color: red">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="namalaporan">Nama Laporan</label>
                    <input type="text" class="form-control" id="namalaporan" name="namalaporan" placeholder="Nama Laporan" wire:model="namalaporan">
                    @error('namalaporan') <div id="error" style="color: red">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label class="d-block">Jenis Laporan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenislaporan1" name="jenislaporan" value="image" checked="" wire:model="jenislaporan">
                        <label class="form-check-label" for="jenislaporan1">Gambar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenislaporan2" name="jenislaporan" value="video" wire:model="jenislaporan">
                        <label class="form-check-label" for="jenislaporan2">Video</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenislaporan3" name="jenislaporan" value="imagevideo" wire:model="jenislaporan">
                        <label class="form-check-label" for="jenislaporan3">Gambar&Video</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenislaporan4" name="jenislaporan" value="text" wire:model="jenislaporan">
                        <label class="form-check-label" for="jenislaporan4">Teks</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenislaporan5" name="jenislaporan" value="option" wire:model="jenislaporan">
                        <label class="form-check-label" for="jenislaporan5">Opsi Ya/Tidak</label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="btnsubmit" name="btnsubmit" type="submit" >Submit</button>
                </div>
            </div>
        </form>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
</main>
