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
                    <a href="{{route('viewCategoryAdmin')}}">Управление категориями</a>
                </li>
                <li class="breadcrumb-item active">Добавить новую категорию</li>
            </ol>
            <!-- Area Chart Example-->


            <div class="container">

                    {!! Form::model('', array('route' => array('actionAddCategory'))
                    ) !!}

                    <div class="form-group">
                        {!! Form::label('categoryName', 'Название:') !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', '', ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group ">
                        {!! Form::label('productStatus', 'На сайте:') !!}
                        <div class="col-sm-10">
                            {!! Form::radio('status', 1, true) !!} Отображать
                            {!! Form::radio('status', 0) !!} Не отображать
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10 btn btn-success">
                            {!! Form::submit('Добавить категорию') !!}
                        </div>
                    </div>



                    {!! Form::close() !!}

                {{--@if (session('alert'))--}}
                    {{--<div class="alert alert-success">--}}
                        {{--{{ session('alert') }}--}}
                    {{--</div>--}}
                {{--@endif--}}

            </div>


        </div>

        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
