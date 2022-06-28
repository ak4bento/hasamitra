@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#department').on('change', function() {
        console.log('Submit');
        this.form.submit();
    });
    $('button[id=btnSelect]').click(function() {
        // var selector = $(this).data('selector');
        // alert(selector);

        // $.getJSON("/data/employee/" + selector, function(result){
        //     $("#modal-lg").find('tbody').find('tr').remove();
        //     $.each(result, function(i, field){
        //         $("#modal-lg").find('tbody').append(`<tr>
        //             <td>${field.nik}</td>
        //             <td>${field.name}</td>
        //             <td>
        //                 <a href="/employees/${field.id}/edit">
        //                     <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Edit</button>
        //                 </a>
        //             </td>
        //             </tr>`);
        //     });
        // });
    });
});

var getJSON = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status === 200) {
        callback(null, xhr.response);
      } else {
        callback(status, xhr.response);
      }
    };
    xhr.send();
};

function clickFunction(params) {
    // alert('/data/employee/' + params);
    getJSON('/data/employee/' + params,
    function(err, data) {
        if (err !== null) {
            alert('Something went wrong: ' + err);
        } else {
            console.log(data);
            var modal = document.getElementById('tbodyModal');
            modal.innerHTML = '';
            let count = 1;
            data.forEach(myFunction);
    
            function myFunction(item, index) {
                var modal = document.getElementById('tbodyModal');
                modal.innerHTML += `<tr>
                    <td>${count++}</td>
                    <td>${item.nik}</td>
                    <td>${item.name}</td>
                    <td>
                        <a href="/employees/${item.id}/edit">
                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Edit</button>
                        </a>
                    </td>
                    </tr>`;
                // text += index + ": " + item + "<br>"; 
            }
        }
    });
}
</script>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Organizationals</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('organizationals.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body">
                @php
                $items = App\Models\Company::pluck('name', 'id');
                $items->prepend('-- SELECT COMPANY --', '');
                @endphp
                
                {!! Form::open(['route' => 'organizationals.store']) !!}
                    {!! Form::select('company', $items, $selected_company, ['id' => 'department','class' => 'js-example-basic-multiple form-control']) !!}
                {!! Form::close() !!}
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                @include('organizationals.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

