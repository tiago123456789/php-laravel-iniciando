@component('admin.layout.elements.body')
    @slot('title') Show one item @endslot
    @slot('description') Show details item @endslot
    <br/>
    <div >
        <div class="">
            <a href="{{ route("page") }}" class="btn btn-xs btn-primary">Back</a>
        </div>
        <br/>
        <form action="">

            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="" value="{{$page->title}}" class="form-control" disabled/>
            </div>

            <div class="form-group">
                <label for="">Url</label>
                <input type="text" name="" value="{{$page->url}}" class="form-control" disabled/>
            </div>

            <div class="form-group">

                    {!! $page->body !!}
            </div>
        </form>
    </div>
@endcomponent