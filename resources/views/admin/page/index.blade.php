@component("admin.layout.elements.body")
    @slot('title') List of pages @endslot
    @slot('description') List all pages @endslot

    <div style="margin: 10px 0px;">
        <a href="{{ route("page.nova") }}" class="btn btn-primary">Nova</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->title}}</td>
                    <td class="text-right">
                        <a href="{{ route("page.show", $page->id) }}" >Show</a>
                        <a href="{{ route("page.edit", $page->id) }}" >Edit</a>
                        <a href="{{ route("page.delete", $page->id) }}" >Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}
@endcomponent
