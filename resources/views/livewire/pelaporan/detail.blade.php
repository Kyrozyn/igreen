<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Pelaporan Detail</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Menu</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pelaporan Detail</li>
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
                <h3 class="block-title">Pelaporan #{{$detail->id}}</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Status : {{$detail->status}}
                        </h3>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Detail : {{$detail->status_detail}}
                        </h3>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Dilaporkan Oleh : {{$detail->user->name}}
                        </h3>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Tanggal Penyelesaian : {{$detail->tanggal_penyelesaian_awal ?? "???"}}
                            s/d {{$detail->tanggal_penyelesaian_akhir}}
                        </h3>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Catatan : {{$detail->catatan}}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Isi Laporan</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <code></code>
                    </div>
                </div>
            </div>
            <div class="block-content">
                @foreach($detail->laporanuser as $laporanuser)
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                {{$laporanuser->laporan->name}} : @if($laporanuser->content == 'yes')
                                    Ya
                                @elseif($laporanuser->content == 'no')
                                    Tidak
                                @else
                                    {{$laporanuser->content ?? ""}}
                                @endif
                            </h3>
                        </div>
                    </div>
                @endforeach
                @foreach($detail->getMedia() as $key => $media)
                    <a href="{{$media->getUrl()}}" target="_blank">Download File {{$key+1}}</a>
                @endforeach
            </div>
        </div>
        <!-- END Your Block -->
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
            @if($detail->status != 'Selesai')
            <div class="block-content">
                <div class="form-group">
                    <button class="btn btn-primary w-100" wire:click="terima">Terima</button>
                    <button class="btn btn-danger w-100 mt-4" wire:click="tolak">Tolak</button>
                    {{--                    <a href="{{url('/dashboard/laporan/add/'.$menu_id)}}" class="btn btn-primary" id="btnsubmit" name="btnsubmit" type="submit">Tambah Laporan</a>--}}
                </div>
            </div>
                @endif
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
</main>
