@extends('layouts.dashboard')
@section('title', 'Departemant')
@section('header', 'Departemant')
@section('link-header', 'Departemant')
@section('content')
<div class="position-relative" style="margin-left:10%">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Departemant</th>
        <th scope="col">Departemant Leader</th>
        <th scope="col">Employee List</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
        <tbody>
            @foreach ($departemants as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->leader['name'] }}</td>
                    <td>
                        @foreach ($item->employee as $data)
                            - {{$data['name']}}<br>
                        @endforeach
                    </td>
                    <td>
                        <!-- Call to action buttons -->
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-primary"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <i class="ri-edit-2-line"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-danger"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <i class="ri-delete-bin-line"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-success"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <i class="ri-order-play-line"></i>
                                </button>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
  </table>
</div>
@endsection

