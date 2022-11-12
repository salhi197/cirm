@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('cirm/assets/css/statics.css')}}">
@endsection

@section('content')
<div class="product-area gray-bg pt-50 pb-50 mt-5 mb-5">
    <div class="container">
        <div class="t-product-wrap">
            <div class="row">

                <div class="col-lg-3 order-1 order-lg-0">
                    <aside class="product-sidebar">
                        <div class="widget">
                            <div class="single-product-widget mb-30">
                                <h4 class="p-sidebar-title text-right">القائمة الرئيسية</h4>
                                <div class="p-sidebar-cat">
                                    <ul class="text-right">
                                        <li><a class=" active_profil  " href="{{route('home')}}"
                                                class="active"><i class="fa fa-user float-left"></i> الحساب </a></li>
                                        <li><a class=" " href="{{route('reclamation.index')}}"> <i
                                                    class="fa fa-list float-left"></i> الشكاوي</a></li>
                                        <li><a class=" " href="#"><i
                                                    class="fa fa-book-open float-left"></i> قائمة الإنتظار</a></li>
                                        <li><a class=" " href="#"><i
                                                    class="fa fa-key float-left"></i>كلمة السر</a></li>
                                        <li><a onclick="return confirm(' هل انت متاكد  ?')"
                                                href="#"><i
                                                    class="fa fa-power-off float-left"></i>تسجيل الخروج</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-9 order-2 order-lg-1">
                    <div class="col-md-12">
                    </div>
                    <div class="row card">
                        <form action="{{route('user.update',['user'=>Auth::user()->id ?? ''])}}" method="POST" class=" p-5"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row text-right">


                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold d-block " for="input-last-name">
                                        <span> اللقب</span>
                                        <strong class="text-danger ">*</strong>
                                    </label>
                                    <input type="text" class="form-control" name="nom" value="{{Auth::user()->name}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold d-block " for="input-last-name">
                                        <span>الإسم </span>
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" name="prenom" value="{{Auth::user()->prenom}}" required>
                                </div>

                                <div class="form-group col-md-6">

                                    <label class="font-weight-bold d-block " for="input-first-name">
                                        <span>رقم الهاتف</span>
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" name="telephone" value="{{Auth::user()->telephone}}">
                                </div>

                                <div class="form-group col-md-6">

                                    <label class="font-weight-bold d-block " for="input-first-name">
                                        <span>البريد الاكتروني</span>
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}"
                                        disabled>
                                </div>



                                <div class="form-group d-block m-auto text-center">
                                    <button type="submit" class="btn btn-primary ">حفظ</button>
                                </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')

@endsection