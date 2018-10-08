@component('admin.layout.elements.body')
    @slot('title') New page @endslot
    @slot('description') Register new page @endslot
    <br/>
    <div >
        <div class="">
            <a href="{{ route("page") }}" class="btn btn-xs btn-primary">Back</a>
        </div>
        <br/>
        <form action="/page/new" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Url</label>
                <input type="text" name="url" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" rows="20" class="form-control" >
                </textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary"/>
            </div>
        </form>
    </div>
@endcomponent