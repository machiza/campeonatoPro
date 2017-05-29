<table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new clubes</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Emblema</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach($clubes as $key => $clube)
        <tr class="id{{ $clube->id }}">
            <td>{{ $clube->id }}</td>
            <td>{{ $clube->name }}</td>
            <td><img src="imagens/{{$clube->path}}" alt="" {{-- style="width:100px;" --}}/></td>
            <td class="text-center"><button class='btn btn-info btn-xs btn-edit' value="{{ $clube->id }}"><span class="glyphicon glyphicon-edit"></span> Edit</button> <button value="{{ $clube->id }}" class="btn btn-danger btn-xs btn-dell"><span class="glyphicon glyphicon-trash"></span> Delete</button></td>
        </tr>
    @endforeach
</table>

{!!$clubes->render()!!}