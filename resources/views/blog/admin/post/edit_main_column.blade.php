<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if($post->is_published)
                    Опубликовано
                @else
                    Черновик
                @endif
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#main">Основные данные</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#dop">Дополнительные данные</a>
                    </li>
                </ul>

                <div class="tab-content clearfix mt-3">
                    <div class="tab-pane fade show active" id="main">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Заголовок</label>
                            <input
                                type="text"
                                class="form-control"
                                id="formGroupExampleInput"
                                placeholder="Заголовок"
                                name="title"
                                value="{{$post->title}}"
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание</label>
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="10"
                                name="content_raw"
                            >{{ old('description', $post->content_raw) }}
                            </textarea>
                        </div>
                        <div class="form-check">
                            <input
                                type="hidden"
                                value="0"
                                name="is_published"
                            >
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="exampleCheck1"
                                name="is_published"
                                value="@if($post->is_published) '1' @else '0' @endif"
                                @if($post->is_published) checked @endif
                            >
                            <label class="form-check-label" for="exampleCheck1">Опубликовано</label>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="dop">
                        <div class="form-group">
                            <label for="formGroupSelect">Категория</label>
                            <select class="form-control" id="formGroupSelect" name="parent_id">
                                @foreach($categories as $category)
                                    @if($category->id == $post->category_id + 1)
                                        <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Идентификатор</label>
                            <input
                                type="text"
                                class="form-control"
                                id="formGroupExampleInput"
                                placeholder="Заголовок"
                                name="slug"
                                value="{{$post->slug}}"
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Выжимка</label>
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="10"
                                name="excerpt"
                            >{{ old('description', $post->excerpt) }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
