@component('admin.layout.elements.body')
    @slot('title') Edit one item @endslot
    @slot('description') Edit info item @endslot
    <br/>
    <div >
        <div class="">
            <a href="{{ route("page") }}" class="btn btn-xs btn-primary">Back</a>
        </div>
        <br/>
        <form action="{{ route("page.edit", $page->id) }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$page->title}}" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Url</label>
                <input type="text" name="url" value="{{$page->url}}" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Body</label>
                <textarea rows="20" class="form-control" name="body">
                    {{ $page->body }}
                </textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Register" value="{{$page->title}}" class="btn btn-primary" />
            </div>
        </form>
    </div>
@endcomponent