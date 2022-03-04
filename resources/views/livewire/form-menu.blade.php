<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Tambah Menu</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Menu</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">Detail Menu</div>
            <div class="block-content">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label for="idmenu">ID Menu</label>
                            <input type="text" class="form-control" id="idmenu" name="idmenu" placeholder="idmenu"
                                   wire:model="idmenu">
                            @error('idmenu')
                            <div id="error">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Menu</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama"
                                   wire:model="name">
                            @error('nama')
                            <div id="error">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label class="d-block">Apakah memiliki Submenu?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="submenu1" name="submenu" value="1" wire:model="havesubmenu">
                                <label class="form-check-label" for="submenu1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="submenu0" name="submenu" value="0" wire:model="havesubmenu">
                                <label class="form-check-label" for="submenu0">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-header block-header-default">Aksi</div>
            <div class="block-content">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group">
                            <button onclick="history.back()"class="btn btn-alt-info" id="btnsubmit" name="btnsubmit">Kembali</button>

                            <button class="btn btn-primary" id="btnsubmit" name="btnsubmit" wire:click="submitdata">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
