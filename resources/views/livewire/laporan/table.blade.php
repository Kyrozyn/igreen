<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">List Laporan</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Menu</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List Laporan</li>
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
                <h3 class="block-title">Aksi</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="form-group">
                    <button onclick="history.back()" class="btn btn-alt-info" id="btnsubmit" name="btnsubmit">Kembali</button>
                    <a href="{{url('/dashboard/laporan/add/'.$menu_id)}}" class="btn btn-primary" id="btnsubmit" name="btnsubmit" type="submit">Tambah Laporan</a>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
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
                        <th>Nama Laporan</th>
                        <th>Jenis Laporan</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Ditambahkan Tanggal</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($laporans as $laporan)
                        <tr>
                            <td class="font-w600">
                                <a href="#">{{$laporan->name}}</a>
                            </td>
                            <th scope="row">{{$laporan->type}}</th>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-warning">{{$laporan->created_at}}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    {{--                                <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">--}}
                                    {{--                                    <i class="fa fa-pencil-alt"></i>--}}
                                    {{--                                </button>--}}
                                    <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete" wire:click="delete({{$laporan->id}})">
                                        <i class="fa fa-times"></i>
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
