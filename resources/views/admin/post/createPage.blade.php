@extends('admin.layout.master')
@section("content")
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5 mt-5">
                <div class="card rounded-4">
                    <div class="card-body p-4">
                        <div class="card-title">
                            <h3 class="text-center title-2">Post Create</h3>
                        </div>
                    </div>

                    <form action="{{ route('news#createPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="d-flex justify-content-center mt-5">
                                <div class=" shadow shadow-md overflow-hidden border rounded-3 mx-3" >
                                    <img id="previewImage" class="w-100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALkAAAB7CAMAAAAfU9HRAAAAZlBMVEXm6ezMz9Hp7O/i5ejU19nBxsrv8vXs7/LZ3N/P0dSBiY/Hy8/KztLW2d2orrP09/q5vsKMk5mepKmXnaIsPUivtLlSXWVxeoBncHhMWGF5gYdbZW1EUVozQk38/v8+TFUTLDkfMj9e5jrqAAADPElEQVR4nO2Ya5fbJhBAyYAYQEK8il72Ztv//ycLstyuc+JNeur1hpO5H4x5WL4eDSDDGEEQBEEQBEEQBEEQBEEQBEEQHwd/l8+2ewf15V3UZ/vdR7xvLj7b7z5k/nzI/PmQ+fP5x1ypsrQLddCQuebAiygczU2Zs2Jur+a6NXMtDpqLeYsztHXzdmeoaHaGius/iubM283zds31sfnb5szb3EOh0bXly77la3vQULbcgcw/ADJ/PmT+fNo1b/cst93zc4IgCIIgiF8GANhff2Lkm9c7nc8EtfcK0A8//Gp+GaK/26m6Zz82Yg5dtwk5dkfU4SayNxWjgUEf4JsA77es+0PB5f3NBYCxm/JxgDaupMsix14NvIixoR5jAR8slkINCmtbrZTGuQzYOICtQ+uzOeegmFCHuWJKMLD1bxIosV+t9NVeax/ujtmXS6JnOcRYpJTJKUItQpSQQ571XslVXY5ejhkhp2y0zD1An11KoWRRNZcnM60hnteELK3nWQA358ksiGFdN3y0ecmSUgDGKF3OYLiU0ePM0CUvNykhuKDc15ooJcTGGoAhSGSG1fzqRhe8g0vM5YtB/xpwXHV/Um4xGFfN58nFSfFTerD6Yb6XxYOXJAadbJLlfhfnxB2TJ5+92YehnzvYPwJJXc3VNc/li0d17mQ/9cjzuBi2GVd+h5u3MpW2x4of2QICDvNUpGzQEWuAUeqwCVyGrusvK4eckWGs2RHFd8xzNcd+GvSrycV8DhLiistp20x6sDn0Nbxy+TfmgF3kxjHsIxuk5LObEVFeJhiWOYq5pDoEPnaId8x1PMmvm4GwOBdXt23O/cx+8R/VU7YidPJiLsdoB6Nq0W8M5s76JH2yIl5OJ3CBejN6myMOxuotOnOY/6nkX8X8xcv+PHSvZltnGKbZTJMU5yWc46OnKAM/lujBYBmzA9Sahb1RldVvjGO1Gkd9LM97bqlx9HU5iWM/oL/kkY0cyyg+itKtoAu5yxx1ymmSqGPyH7DHAry9k3B9GICbyu2O8rb5Tc+xFe1vsfYOSekplHREfP7Dwf8BrDmfQ5uHSQiPn5kEQRAEQRAEQRAEQRAEQRAE8TvyNzHtKuj9jbYKAAAAAElFTkSuQmCC" alt="">
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
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
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
                                    <input id="title" name="title" type="text" class="form-control "aria-required="true" aria-invalid="false" placeholder="Enter Post Title..." value="{{ old('title') }}">
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
                                    <textarea id="description" name="description" type="text" class="form-control  " aria-required="true" aria-invalid="false" placeholder="Enter Post Description..." cols="30" rows="3">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="position-relative">
                                        <small class="position-absolute text-danger ms-1">
                                            {{ $message }}
                                        </small>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="" class="control-label mb-1">News Type</label> <br>

                                    <div class="d-flex gap-3">
                                        <div class="d-flex align-items-center gap-2
                                        ">
                                            <input type="radio" id="popularNew" name="newType" value="Popular New">
                                            <label class="text-muted mt-2
                                            " for="popular">Popular New</label>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="radio" id="trendNew" name="newType" value="Trend New">
                                            <label class="text-muted mt-2
                                            " for="trendNew">Trend New</label>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="radio" id="titleNew" name="newType" value="Title New">
                                            <label class="text-muted mt-2
                                            " for="titleNew">Title New</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=" mt-4">
                                    <button type="submit" class="btn btn-dark w-100 p-2 fs-5">
                                        <i class="fas fa-arrow-up"></i>
                                        Create
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
