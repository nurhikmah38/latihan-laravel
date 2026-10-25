<x-app>


    <x-slot:title>Student</x-slot:title>

    <a class="btn btn-primary mb-3" href="{{ route('student.create')}}" role="button">Create Student</a>

    <table class="table table-bordered border-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Nim</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($students as $students)
        
    
    
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $students -> name}}</td>
        <td>{{ $students -> nim}}</td>
        <td>
            
        </td>
    </tr>
    @endforeach

  </tbody>
</table>

</x-app>