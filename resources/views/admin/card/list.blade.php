@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body mt-5">
        <h5 class="card-title float-right">
            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Soru Oluştur</a>
        </h5>
        <h5 class="card-title float-left">
          <a href="" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left mr-1"></i>Quizlere dön</a>
        </h5>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Kategori</th>
                <th scope="col">Fotoğraf</th>
                <th scope="col">Başlık</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Fiyat</th>
                <th scope="col" style="width: 100px">İşlemler</th>
              </tr>
            </thead>
            <tbody>
                   
              <tr>
                <td scope="row"></td>
                <td>
                  
                    <a href="" class="btn btn-sm btn-secondary" target="_blank">Görüntüle</a>
                  
                </td>
                <td></td>
                <td></td>

                <td class="text-success"></td>
                <td>   
                    <form action="" method="post">
                      @csrf @method('delete')
                      <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="submit" class="btn btn-sm btn-danger" title="Sil"><i class="fa fa-times"></i></button>
                    </form>
                </td>
              </tr>
            
            </tbody>
        </table>
        
    </div>
</div>
@endsection