@extends('layouts.tem')
<title>Kelola cv</title>
@section('content')    
<h1 class="h3 mb-2 text-gray-800">Kelola Curriculum vitae anda</h1>
<br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-2">
                         <br>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0%">
                                    <thead>
                                        <tr>
<th>No</th>

<th>Nama Users</th>
<th>Users Agent</th>
<th>Waktu login</th>
<th>Aksi</th> 

                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                    <tr> 
                        <td class="align-middle">test</td>
                      
                        <td class="align-middle">test</td>
                        <td class="align-middle">Test</td>
                        <td class="align-middle">Test</td>
                        
                        <td class="align-middle">
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                     
                    </tr>
               
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection