@extends('templates.layout')
@section('title', 'Pengguna')
@section('nav-menu-pengguna', 'active')
@section('content-header')
<h2>Pengguna</h2>
@endsection
@section('content')
<div class="card">
    <div class="card-header">Data Pengguna Aplikasi</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-sm datatables">
                <thead>
                    <tr class="bg-dark text-white text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $n=1;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-center">{{$user->level}}</td>
                            <td>
                                <img src="{{$user->pic}}" alt="{{$user->pic}}" width="200">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-warning text-white btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection