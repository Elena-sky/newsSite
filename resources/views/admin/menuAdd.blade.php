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
                <li class="breadcrumb-item active">Управление меню</li>
                <li class="breadcrumb-item active">Добавить в меню вложеность</li>

            </ol>

            <div class="container">


                {!! Form::model('', array('route' => array('actionAddMenu'))
                ) !!}

                <div class="form-group">
                    {!! Form::label('menuName', 'Название:') !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', '', ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group ">
                    {!! Form::label('parentMenu', 'Теги:') !!}
                    <div class="col-sm-10">
                        {!! Form::select('parent_id', $listMenu , null, ['class' => 'form-control', 'multiple']) !!}
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-sm-offset-2 col-sm-10 btn btn-success">
                        {!! Form::submit('Создать подпункт') !!}
                    </div>
                </div>



                {!! Form::close() !!}
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
