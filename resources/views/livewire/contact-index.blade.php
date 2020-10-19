<div>
   
    {{-- @livewire('contact-create', ['contacts' => $contacts]) --}}
    @livewire('contact-create')
    <hr>    
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($contacts as $contact)
            @php
            $no ++; 
            @endphp
            <tr>
            <th scope="row">{{$no}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
            @endforeach
         
        
        </tbody>
      </table>
</div>
