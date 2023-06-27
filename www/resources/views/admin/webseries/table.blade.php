<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Poster</th>
            <th>Directed by</th>
            <th>Produced by</th>
            <th>Main cast</th>
            <th>Released date</th>
            <th>Published</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->title }}</td>
                <td>
                    <img src="/{{ $row->poster_landscape_url }}" alt="" height="40px">
                </td>
                <td>{{ $row->directed_by }}</td>
                <td>{{ $row->produced_by }}</td>
                <td>{{ $row->main_cast }}</td>
                <td>{{ $row->release_date_formatted }}</td>
                <td>
                    @if ($row->status == 'RELEASED')
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
                            @can('webseries.edit')
                                <a class="dropdown-item" onclick="showMovieEditModel(event)"
                                    href="{{ route('webseries.edit', $row->id) }}">Edit</a>
                            @endcan

                            @if ($row->is_active == 'Y')
                                <a class="dropdown-item" href="{{ route('webseries.status', $row->id) }}">Inactive</a>
                            @else
                                <a class="dropdown-item" href="{{ route('webseries.status', $row->id) }}">Active</a>
                            @endif
                            @can('webseries.destroy')
                                <a class="dropdown-item"
                                    onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                    Delete</a>
                                <form id="delete-{{ $row->id }}" action="{{ route('webseries.destroy', $row->id) }}"
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
