@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   
                </div>
                
               
                <div class="card-body">
                <form action="/pegawai/store" method="post">
		            {{ csrf_field() }}
                    Nama <input type="text" name="nama" required="required"> <br/>
                    Jabatan <input type="text" name="jabatan" required="required"> <br/>
                    Umur <input type="number" name="umur" required="required"> <br/>
                    Alamat <textarea name="alamat" required="required"></textarea> <br/>
                    <input type="submit" value="Simpan Data">
                </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
