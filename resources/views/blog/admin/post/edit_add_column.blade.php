
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Сохранить</button>
                <a class="btn btn-danger" href="{{route('blog.admin.posts.destroy', [$post->id])}}">Удалить</a>
            </div>
        </div>
    </div>
</div>
@if($post->exists)
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">ID поста: {{$post->id}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Создано</label>
                        <input class="form-control" type="text" value="{{$post->created_at}}" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <label>Изменено</label>
                        <input class="form-control" type="text" value="{{$post->updated_at}}" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <label>Удалено</label>
                        <input class="form-control" type="text"  value="{{$post->deleted_at}}" placeholder="" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
