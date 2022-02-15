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
        <!-- Your Block -->
        <form wire:submit.prevent="submit">
            <div class="col-lg-8 col-xl-5">
                <div class="form-group">
                    <label for="idmenu">ID Menu</label>
                    <input type="text" class="form-control" id="idmenu" name="idmenu" placeholder="idmenu" wire:model="idmenu">
                    @error('idmenu') <div id="error">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="name">Nama Menu</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" wire:model="nama">
                    @error('nama') <div id="error">{{$message}}</div> @enderror
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
