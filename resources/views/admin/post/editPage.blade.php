@extends('admin.layout.master')
@section("content")
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5 mt-5">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Post Edit</h3>
                        </div>
                    </div>

                    <form action="{{ route('news#editPost',$post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="d-flex justify-content-center mt-5">
                                <div class="shadow-md overflow-hidden border rounded-3 mx-3" >
                                    <img id="previewImage" class="w-100" src="{{ asset('storage/'.$post->image) }}" alt="">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-11">
                                    <label for="files">Add Image</label>
                                    <input value="{{ old('image') }}" class="form-control" onchange="previewFile('previewImage','file')"  type="file" class="hidden" name="image" id="file">
                                    @error('image')
                                    <div class="position-relative">
                                        <small class="position-absolute text-danger ms-1">
                                            {{ $message }}
                                        </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center py-5">
                            <div class="col-11">

                                <div class="form-group">
                                    <label for="category" class="control-label mb-1">Catgory</label>
                                    <select class="form-control" name="categoryId" id="category">
                                        <option value="">Choose post category...</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($post->category_id == $category->id) selected @endif>{{ $category->category_name }}</option>
                                    @endforeach
                                    </select>
                                    @error('title')
                                    <div class="position-relative">
                                        <small class="position-absolute text-danger ms-1">
                                            {{ $message }}
                                        </small>
                                    </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="title" class="control-label mb-1">Title</label>
                                    <input id="title" name="title" type="text" class="form-control "aria-required="true" aria-invalid="false" placeholder="Enter Post Title..." value="{{ old('title',$post->title) }}">
                                    @error('title')
                                    <div class="position-relative">
                                        <small class="position-absolute text-danger ms-1">
                                            {{ $message }}
                                        </small>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="description" class="control-label mb-1">Description</label>
                                    <textarea id="description" name="description" type="text" class="form-control  " aria-required="true" aria-invalid="false" placeholder="Enter Post Description..." cols="30" rows="3">{{ old('description',$post->description) }}</textarea>
                                    @error('description')
                                    <div class="position-relative">
                                        <small class="position-absolute text-danger ms-1">
                                            {{ $message }}
                                        </small>
                                    </div>
                                    @enderror
                                </div>

                                <div class=" mt-4">
                                    <button type="submit" class="btn btn-dark w-100 p-2 fs-5">
                                        <i class="fas fa-arrow-up"></i>
                                        Update Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

@section('script')
<script>
     //for preview image
     function previewFile(previewImage,fileName) {
      let preview = document.getElementById(previewImage);
      let file = document.getElementById(fileName).files[0];
      const reader = new FileReader();

      reader.addEventListener(
        "load",
        () => {
          // convert image file to base64 string
          preview.src = reader.result;
        },
        false
      );

      if (file) {
        reader.readAsDataURL(file);
      }
    }
</script>
@endsection
