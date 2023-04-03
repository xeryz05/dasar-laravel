@extends('layouts.dashboard')
@section('title', 'Employees')
@section('header', 'Employees')
@section('link-header', 'Employees')
@section('content')
<div class="position-relative" style="margin-left:10%">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">NIP</th>
        <th scope="col">Gender</th>
        {{-- <th scope="col">Departemant</th> --}}
        <th scope="col">Action</th>
      </tr>
    </thead>
        <tbody>
            @foreach ($employees as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->gender }}</td>
                    {{-- <td>{{ $item->departemant['name'] }}</td> --}}
                    <td>
                        <!-- Call to action buttons -->
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a type="button" class="btn btn-primary" href="{{route('employees.show', $item->id)}}"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <i class="ri-edit-2-line"></i>
                                </a>
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

