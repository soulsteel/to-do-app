@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a task</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tasks.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="deadline">Deadline:</label>
              <input id="deadline" type="text" class="form-control" name="deadline" placeholder="Select date" />
          </div>

          <div class="form-group">
              <label for="deadline">Category:</label>
               <select class="form-control" id="category" name="category_id">
                @foreach ($categoriesOptions as $id => $name)
                  <option value="{{ $id }}">{{ $name }}</option>  
                @endforeach
              </select>
          </div>

          <button type="submit" class="btn btn-primary">Add task</button>
      </form>
  </div>
</div>
</div>
@endsection
<script>
  flatpickr("#deadline", {});
</script>