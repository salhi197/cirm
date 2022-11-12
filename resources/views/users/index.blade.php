@extends('layouts.master')



@section('content')

<div class="container-fluid">

    <h1 class="mt-4"> users</h1>

    <div class="card mb-4">

        <div class="card-header">
            <button data-toggle="modal" data-target="#squarespaceModal" class="btn bubbly-button"><i class="fa fa-plus"></i>Ajouter
                user</button>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table " id="dataTable" width="100%" >
                    <thead>
                        <tr>
                            <th>ID user</th>

                            <th>email</th>
                            <th>Passwor Text</th>

                            <th>actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($users as $user)

                        <tr>

                            <td>{{$user->id ?? ''}}</td>

                            <td>
                                {{$user->email ?? ''}}
                            </td>


                            <td>{{$user->email ?? ''}}</td>



                            <td>

                                <div class="table-action">

                                    <a href="{{route('user.destroy',['id_user'=>$user->id])}}"
                                        onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">

                                        <i class="fas fa-trash"></i>

                                    </a>

                                    <!-- <a href="{{route('user.edit',['user'=>$user])}}" class="btn btn-info text-white">
                                        <i class="fas fa-edit"></i>
                                    </a> -->

                                </div>

                            </td>



                        </tr>



                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<div class="modal fade " id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content model1">
            <div class="modal-header">
                <h3 class="modal-title" id="lineModalLabel">Ajouter user</h3>
            </div>

            <div class="modal-body">
                <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="form-group">
                        <label for="exampleInputEmail1">Login : </label>
                        <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="nom"
                            placeholder="Login ">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password : </label>
                        <input type="text" class="form-control" value="{{ old('password') }}" name="password" id="password"
                            placeholder="Mot de passe">
                    </div>









                    <!-- <div class="form-group">

            <label for="exampleInputPassword1">date naissance</label>

            <input type="date" name="birth" class="form-control" id="birth" placeholder="">

        </div> -->
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn bubbly-button">Save</button>
                    </div>
                    <button type="button" class="btn bubbly-button" data-dismiss="modal" role="button">Fermer</button>

                </form>



            </div>


        </div>

    </div>

</div>










@endsection






@section('scripts')
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "order": [
            [0, "desc"]
        ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    function watchWilayaChanges() {

        $('#wilaya_select').on('change', function (e) {

            e.preventDefault();

            var $communes = $('#commune_select');

            var $communesLoader = $('#commune_select_loading');

            var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');

            var $iconDefault = $communes.parents('.input-group').find('.material-icons');

            $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();

            $communesLoader.show();

            $iconDefault.hide();

            $iconLoader.show();

            $.ajax({

                    dataType: "json",

                    method: "GET",

                    url: "/api/static/communes/ " + $(this).val()

                })

                .done(function (response) {

                    $.each(response, function (key, commune) {

                        $communes.append($('<option>', {
                            value: commune.id
                        }).text(commune.name));

                    });

                    $communes.prop('disabled', '').show();

                    $communesLoader.hide();

                    $iconLoader.hide();

                    $iconDefault.show();

                });

        });

    }



    $(document).ready(function () {

        watchWilayaChanges();

    });
</script>

@endsection