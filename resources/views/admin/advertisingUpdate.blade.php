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
                <li class="breadcrumb-item">
                    <a href="{{route('viewAdvertising')}}">Управление рекламой</a>
                </li>
                <li class="breadcrumb-item active">Редактировать рекламу</li>
            </ol>


            <div class="container">

                {!! Form::model($advertising, array('route' => array('advertisingUpdateSave'))
                ) !!}
                <input name="id" type="hidden" value="{{$advertising->id}}">


                <div class="form-group">
                    {!! Form::label('advertisingName', 'Название:') !!}
                    <div class="col-sm-10">
                        {!! Form::text('name', $advertising->name, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('advertisingPrise', 'Цена:') !!}
                    <div class="col-sm-10">
                        {!! Form::text('prise', $advertising->prise, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('advertisingCompany', 'Фирма:') !!}
                    <div class="col-sm-10">
                        {!! Form::text('company', $advertising->company, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group ">
                    {!! Form::label('advertisingLeft', 'Левая колонка:') !!}
                    <div class="col-sm-10">
                        {!! Form::radio('leftadvertising', 1) !!} Да
                        {!! Form::radio('leftadvertising', 0) !!} Нет
                    </div>
                </div>


                <div class="form-group ">
                    <div class="col-sm-offset-2 col-sm-10 btn btn-success">
                        {!! Form::submit('Сохранить') !!}
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
