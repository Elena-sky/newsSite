@extends('admin.template')


@section('content')
    <!-- Page Content -->

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('adminPageView')}}">Админпанель</a>
                </li>
                <li class="breadcrumb-item active">Список меню</li>
            </ol>

            <div class="container">

                <!-- Example DataTables Card-->
                <div class="card mb-3">


                    <div class="card-header">
                        <i class="fa fa-table"></i> Список категорий
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Родитель</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Родитель</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($allMenu as $menu)
                                    <tr>
                                        <td>{{$menu->id}}</td>
                                        <td>{{$menu->name}}</td>
                                        <td>{{$menu->parent_id}}</td>
                                        {{--<td>--}}
                                            {{--<a href="{{route('categoryViewPage', [$category->id])}}">--}}
                                                {{--<button type="button" class="btn btn-info"><span--}}
                                                            {{--class="glyphicon glyphicon-pencil"></span> Просмотр--}}
                                                {{--</button>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                        <td>
                                            <a href="{{route('viewUpdateMenu', [$menu->id])}}">
                                                <button type="button" class="btn btn-warning"><span
                                                            class="glyphicon glyphicon-pencil"></span> Изменить
                                                </button>
                                            </a>
                                        </td>
                                        {{--<td>--}}
                                            {{--<a href="{{route('actionDeleteCategory', [$category->id])}}">--}}
                                                {{--<button type="button" class="btn btn-danger"><span--}}
                                                            {{--class="glyphicon glyphicon-remove"></span> Удалить--}}
                                                {{--</button>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Your Website 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current
                            session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../../../../sites/newsSite/public/js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="../../../../sites/newsSite/public/js/sb-admin-datatables.min.js"></script>
    </div>



@endsection
