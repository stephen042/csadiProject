<div class="card">
    <div class="card-body">
        <h5 class="card-title">All Members</h5>
        <div class="table-responsive table-responsive-x">
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $item => $member)
                    <tr>
                        <th scope="row">{{$item+1}}</th>
                        <td>{{$member->name}}</td>
                        <td>{{$member->position}}</td>
                        <td>{{date('Y - M/d', strtotime($member->created_at))}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('edit_member',[$member->id])}}" class="btn btn-sm btn-primary m-1"><i
                                        class="bi bi-pencil-square"></i>
                                    view
                                </a>
                            </div>
                            <div class="btn-group" role="group">
                                <form action="{{ route('delete_member', [$member->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger m-1 confirm">
                                        <i class="bi bi-archive-fill"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr></tr>
                    @endforelse

                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
</div>