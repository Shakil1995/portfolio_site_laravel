@extends('Layout.app')


@section('content')

<div id="mainDiv" class="container d-none">
    <div class="row">
    <div class="col-md-12 p-5">
    <table  id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm ">Image</th>
          <th class="th-sm">Name</th>
          <th class="th-sm">Description</th>
          <th class="th-sm">Edit</th>
          <th class="th-sm">Delete</th>
        </tr>
      </thead>
                    <tbody  id="service_table">

                    </tbody>
    </table>

    </div>
    </div>
    </div>



    <div id="loaderDiv" class="conatiner " >
    <div class="row">
        <div class="col-md-12 text-center ">
            <img class="loading-icon m-5" src="{{ asset('images/loading.svg') }}" alt="" srcset="">

        </div>
    </div>

    </div>

    <div id="wrongDiv"  class="conatiner d-none" >
        <div class="row">
            <div class="col-md-12 text-center">
               <h3>Something want wrong</h3>

            </div>
        </div>

        </div>





@endsection


<!-- Modal -->
<div
  class="modal fade"
  id="deleteModal"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-body text-center p-3 ">
        <h1 class="mt-5">Do you want to Delete?</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
       No
        </button>
        <button type="button" class="btn btn-danger">yes</button>
      </div>
    </div>
  </div>
</div>





@section('script')

<script types="text/javascript">
        getServicesData();
</script>

@endsection

