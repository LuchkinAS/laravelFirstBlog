
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if($foundCategory->exists)
<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-text">ID категории: {{$foundCategory->id}}</div>
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
                    <input class="form-control" type="text" value="{{$foundCategory->created_at}}" placeholder="" readonly>
                </div>
                <div class="form-group">
                    <label>Изменено</label>
                    <input class="form-control" type="text" value="{{$foundCategory->updated_at}}" placeholder="" readonly>
                </div>
                <div class="form-group">
                    <label>Удалено</label>
                    <input class="form-control" type="text"  value="{{$foundCategory->deleted_at}}" placeholder="" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
