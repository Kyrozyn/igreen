<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Tambah Account</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Account</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Detail Account</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <form wire:submit.prevent="submit">
                    <div class="col-lg-8 col-xl-8">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" wire:model="nama">
                            @error('nama') <div id="error" style="color: red">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" wire:model="email">
                            @error('email') <div id="error" style="color: red">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" wire:model="password">
                            @error('email') <div id="error" style="color: red">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <button onclick="history.back()" type="button" class="btn btn-alt-info" id="btnsubmit" name="btnsubmit">Kembali</button>
                            <button class="btn btn-primary" id="btnsubmit" name="btnsubmit" wire:click="tambah">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Your Block -->
        <!-- Your Block -->

        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
</main>
