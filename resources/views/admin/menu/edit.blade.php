@extends('admin.layouts.master')
@section('title') {{trans('admin.create',['name'=> trans('admin.menu')])}} @endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.create',['name'=> trans('admin.menu')])}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($menu,[
                        'route'     => ['page.update',$menu->id],
                        'method'  =>  'PATCH',
                        'role'    =>   'form',
                        'files'   =>    true
                ]) !!}
                <input type="hidden" name="id" value="{{$menu->id}}">
                <div class="box-body">
                    @include('admin.menu.form')

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
            <!-- /.box -->

        </div>

    </div>
@endsection
