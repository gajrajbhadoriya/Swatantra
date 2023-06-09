@include('admin.header')
@include('admin.sidebar')

@if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @elseif(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
@endif

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      All Clients Case Status
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Clients Case Status</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      
      <table class="table table-striped b-t b-light">
        <div class="alert alert-success">
        </div>
        <thead>
          <tr>
            <th>Lawyer Name</th>
            <th>Case Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Client Id</th>
            <th>Next Hearing</th>
            <th style="width:30px;"></th> 
          </tr>
        </thead>
        <tbody>
            @foreach ($legalStatus as $Status)
          <tr>
            <td>{{ $Status['lawyer_name'] }}</td>
              <td>{{ $Status['case_name'] }}</td>
              <td>{{ $Status['description'] }}</td>
              <td>{{ $Status['status'] }}</td>
              <td>{{ $Status['client_id'] }}</td>
              <td>{{ $Status['next_hearing'] }}</td>
            <td><span class="input-group-btn">
            <form action="{{ route('remove_status')}}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="id" id="id" value="{{$Status['client_id']}}">
            <td>
                <button type="submit" class="btn btn-danger">Remove</button>
            </td>
        </form>
          </span></td>
          </tr>
          @endforeach
        </tbody>
      </table>
<!-- </form> -->
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@include('admin.footer')

</section>



