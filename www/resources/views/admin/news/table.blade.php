<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Link</th>
            <th>Published</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->title }}</td>
                <td>{{ $row->link }}</td>
                <td>
                    @if ($row->is_published == 'Y')
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </td>
                <td>
                    @if ($row->is_active == 'Y')
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            @can('news.edit')
                                <a class="dropdown-item" onclick="showNewsEditModel(event)"
                                    href="{{ route('news.edit', $row->id) }}">Edit</a>
                            @endcan

                            @if ($row->is_active == 'Y')
                                <a class="dropdown-item" href="{{ route('news.status', $row->id) }}">Inactive</a>
                            @else
                                <a class="dropdown-item" href="{{ route('news.status', $row->id) }}">Active</a>
                            @endif
                            @can('news.destroy')
                                <a class="dropdown-item"
                                    onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                    Delete</a>
                                <form id="delete-{{ $row->id }}" action="{{ route('news.destroy', $row->id) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            @endcan
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
