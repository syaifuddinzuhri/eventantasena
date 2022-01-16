@extends('admin.layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        Data Partner
                        <a href="{{ route('partner.create') }}" class="btn btn-sm btn-primary">Tambah Partner</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('error'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert bg-danger text-white">
                                        {{ Session::get('error') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert bg-success text-white">
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <table id="partner-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Logo</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Logo</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="delete-partner-modal" tabindex="-1" role="dialog" aria-labelledby="delete-partner-modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-partner-modal">Apakah Anda ingin menghapus data ini?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pilih <strong>Hapus</strong> untuk menghapus data.
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Kembali</button>
                    <form id="form-delete-partner" class="d-inline" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button id="delete-partner-button" type="submit" class="btn btn-danger btn-submit">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <!-- DataTables -->
    <script src="{{ asset('assets/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
        $("#partner-table").DataTable({
            responsive: true,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: {
                url: APP_URL + "/partner",
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    className: "text-center",
                    width: "4%",
                },
                {
                    data: "nama",
                    name: "nama",
                },
                {
                    data: "gambar",
                    className: "text-center",
                    render: function(data) {
                        if (data != null) {
                            return (
                                '<img src="' +
                                data +
                                '" class="img-responsive" style="width: 100px"/>'
                            );
                        } else {
                            return "";
                        }
                    },
                },
                {
                    data: "action",
                    name: "action",
                    className: "text-center",
                    orderable: false,
                    searchable: false,
                },
            ],
        });

        var sid = "";
        $("#partner-table").on("click", ".btn-delete", function(e) {
            sid = $(this).data("id");
        });

        $("#form-delete-partner").on("submit", function(e) {
            var url = APP_URL + "/partner/" + sid;
            var form = $(this);
            $.ajax({
                url: url,
                type: "DELETE",
                data: form.serialize(),
                success: function(res) {
                    if (res) {
                        $("#partner-table").DataTable().ajax.reload();
                        $("#delete-partner-modal").modal("hide");
                    }
                    setTimeout(function() { // wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                    }, 2000);
                },
                error: (e, x, settings, exception) => {},
            });
            e.preventDefault();
        });
    </script>
@endsection
