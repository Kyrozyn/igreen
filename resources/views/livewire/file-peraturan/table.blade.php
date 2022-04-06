<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">List File Peraturan</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Menu</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List File Peraturan</li>
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
                <h3 class="block-title">Data</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Nama File</th>
                            <th>URL</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Ditambahkan Tanggal</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fileperaturan as $file)
                            <tr>
                                <th class="text-center" scope="row">{{$file->id}}</th>
                                <th class="text-center" scope="row">{{$file->nama_file}}</th>
                                <th class="text-center" scope="row">{{$file->getfirstmediaurl('file')}}</th>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-warning">{{$file->created_at}}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-danger js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete" wire:click="delete({{$file->id}})">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
</main>
