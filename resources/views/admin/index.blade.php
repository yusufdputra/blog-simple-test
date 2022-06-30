@extends('layouts.app')

@section('content')
<div class="col lg-12">
  <div class="pt-32pt">
    <div class="page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
      <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
          <h2 class="mb-0">{{$data['title']}}</h2>
          <ol class="breadcrumb p-0 m-0">
            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
            <li class="breadcrumb-item">Instruktor</li>
            <li class="breadcrumb-item active">index</li>
          </ol>
        </div>
      </div>

      <div class="row" role="tablist">
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-rounded _add" data-toggle="modal" data-target="#modal-tambah">
            <i class="material-icons icon--left">add</i> Add
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class=" page__container page-section">
    <div class="card mb-lg-32pt pd-30">

      @include('alert')

      <div class="table-responsive">
        <table id="data-table-basic" class="table table-striped">
          <thead>
            <tr>
              <th>Title</th>
              <th>Detail</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data['articles'] AS $key=>$value)
            <tr>
              <td >{{$value->title}}</td>
              <td class="text-line-5">{{$value->detail}}</td>
              <td>
                <div class="button-list">

                  <button type="button" data-toggle="modal" data-idarticle="{{Crypt::encrypt($value->id)}}" data-target="#modal-edit" class="btn btn-success btn-rounded btn-sm _edit">Edit</button>
                  <button type="button" data-toggle="modal" data-title="{{$value->title}}" data-name="{{$value->title}}" data-idarticle="{{Crypt::encrypt($value->id)}}" data-target="#modal-delete" class="btn btn-accent  btn-rounded btn-sm _delete">Delete</button>
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

<!-- Modal -->
<div class="modal fade " data-backdrop="false" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('article.updateOrInsert')}}" enctype="multipart/form-data" autocomplete="off" method="post">
        @csrf
        <div class="modal-body">
          <div class="was-validated">
            <div class="form-row">
              <div class="col-12 col-md-12 mb-3">
                <label class="form-label" for="validationSample01">Title</label>
                <input type="text" class="form-control" id="validationSample01" placeholder="Type here..." value="{{old('title')}}" name="title" required="">
                <div class="invalid-feedback">Please provide a title.</div>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-12 col-md-12 mb-3">
                <label class="form-label" for="validationSample02">Details</label>
                <textarea type="text" rows="10" class="form-control" id="validationSample02" placeholder="Type here..." name="detail" required="">{{old('detail')}}</textarea>
                <div class="invalid-feedback">Please provide a detail.</div>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-12 col-md-12 mb-3">
                <label class="form-label" for="validationSample04">Picture</label>
                <input type="file" class="form-control" id="validationSample04" accept="image/png, image/jpeg" placeholder="Choose File" name="file_picture" required>
                <div class="invalid-feedback">Please provide a picture.</div>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade " data-backdrop="false" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('article.updateOrInsert')}}" enctype="multipart/form-data" autocomplete="off" method="post">
        @csrf
        <input type="hidden" name="id_article" id="id_article">
        <div class="modal-body">
          <div class="was-validated">
            <div class="form-row">
              <div class="col-12 col-md-12 mb-3">
                <label class="form-label" for="validationSample01">Title</label>
                <input type="text" class="form-control" id="validationSample01" placeholder="Type here..." value="{{old('title')}}" name="title" required="">
                <div class="invalid-feedback">Please provide a title.</div>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-12 col-md-12 mb-3">
                <label class="form-label" for="validationSample02">Overview</label>
                <textarea type="text" rows="5" class="form-control" id="validationSample02" placeholder="Type here..." name="detail" required="">{{old('detail')}}</textarea>
                <div class="invalid-feedback">Please provide an detail.</div>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-12">


                <label class="form-label" for="validationSample04">Picture</label>
              </div>
              <div class="col-3 col-3">
                <div class="loader loader-info" id="loader-avatar"></div>
                <div class="avatar avatar-xl ">
                  <img src="" alt="Avatar" id="avatar-article" class="avatar-img rounded-circle ">
                </div>
              </div>
              <div class="col-9 col-md-9 mb-3">
                <input type="file" class="form-control" id="validationSample04" accept="image/png, image/jpeg" placeholder="Choose File" name="file_picture">
                <input type="hidden" id="file_lama" name="file_lama">
              </div>


            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade " data-backdrop="false" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Article (<span id="delete_name"></span>)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('article.delete')}}" enctype="multipart/form-data" autocomplete="off" method="post">
        @csrf
        <input type="hidden" name="id_article" id="id_article">
        <div class="modal-body">
          <div class="was-validated">
            <p>Are you sure?</p>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('._add').click(function() {
    _clearForm('modal-tambah')
  });

  $('._edit').click(function() {
    _clearForm('modal-edit')
    $('#modal-edit').find('#avatar-article').hide()
    $('#modal-edit').find('#loader-avatar').show()

    var idarticle = $(this).data('idarticle');
    $.ajax({
      type: "GET",
      url: "{{url('getArticleByID')}}/" + idarticle,
      dataType: "json",
      success: function(response) {

        if (response.status == 200) {
          var url_file = "{{ url('storage') }}/" + response.message.url_file
          $('#modal-edit').find('#id_article').val(idarticle);
          $('#modal-edit').find('#validationSample01').val(response.message.title);
          $('#modal-edit').find('#validationSample02').val(response.message.detail);
          $('#modal-edit').find('#file_lama').val(response.message.url_file);
          $('#modal-edit').find('#avatar-article').show()
          $('#modal-edit').find('#loader-avatar').hide()
          $('#modal-edit').find('#avatar-article').attr('src', url_file);
        } else {
          toastr.info(response.message);
        }

      },
      error: function(response) {
        toastr.info("Error while fetching data.");
      }
    });


  });

  $('._delete').click(function() {
    var idarticle = $(this).data('idarticle');
    var name = $(this).data('name');
    $('#modal-delete').find('#id_article').val(idarticle);
    $('#modal-delete').find('#delete_name').html(name);
  });



  function _clearForm($modal) {
    $('#' + $modal).find('#id_article').val('');
    $('#' + $modal).find('#validationSample01').val('');
    $('#' + $modal).find('#validationSample02').val('');
    $('#' + $modal).find('#validationSample03').val('');
    $('#' + $modal).find('#validationSample04').val('');
  }
</script>

@endsection