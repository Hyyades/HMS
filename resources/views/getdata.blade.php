

<div class="container " style="margin-top:400px; margin-bottom:200px">
        <div class="table">
            <table class="table table-bordered table-hover table-striped table-dark">
            <thead>
                <tr>
                    <th>CNIC</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Days</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
            @csrf   
                @foreach ($D as $key)
            <tr>
                <td>{{ $key->b_cnic}}</td>
                <td>{{ $key->b_name }}</td>
                <td>{{ $key->b_contact }}</td>
                <td>{{ $key->b_bookdays }}</td>
                <td>{{ $key->b_arrivaldate }}</td>
                <td>{{ $key->b_departuredate }}</td>
                <td> <a href="getdata/{{$key->b_cnic}}">Delete</a> 
                     <a href="editdata/{{$key->b_cnic}}">Edit</a> </td>
                <td> <a href="update/{{$key->b_cnic}}">Update</a> </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
