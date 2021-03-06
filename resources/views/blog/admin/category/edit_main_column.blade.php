<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
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
                                value="{{$foundCategory->title}}"
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Идентификатор</label>
                            <input
                                type="text"
                                class="form-control"
                                id="formGroupExampleInput"
                                placeholder="Идентификатор"
                                name="slug"
                                value="{{ $foundCategory->slug }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="formGroupSelect">Родительская категория</label>
                            <select class="form-control" id="formGroupSelect" name="parent_id">
                                @foreach($categoryList as $category)
                                    @if($category->id == $foundCategory->parent_id + 1)
                                        <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание</label>
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="3"
                                name="description"
                            >
                                {{ old('description', $foundCategory->description) }}
                            </textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dop">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5>Доп информация</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
