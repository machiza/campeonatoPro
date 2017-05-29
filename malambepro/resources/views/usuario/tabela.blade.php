<table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach($users as $key => $user)
        <tr class="id{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->rolename }}</td>
            <td class="text-center"><button class='btn btn-info btn-xs btn-edit' value="{{ $user->id }}"><span class="glyphicon glyphicon-edit"></span> Edit</button> <button value="{{ $user->id }}" class="btn btn-danger btn-xs btn-dell"><span class="glyphicon glyphicon-trash"></span> Delete</button></td>
        </tr>
    @endforeach
</table>