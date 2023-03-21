@extends('layouts.admin')

@section('title', 'Админка осмотров')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Осмотры</h1>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="btn btn-sm btn-outline-secondary" href="{{route('admin.doctor_reviews.create')}}">Добавить осмотр</a>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
      {{-- <div class="btn-group mr-2">
        <button class="btn btn-sm btn-outline-secondary">Share</button>
        <button class="btn btn-sm btn-outline-secondary">Export</button>
      </div> --}}
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#ID</th>
          <th>Название</th>       
          <th>Описание</th>
          <th>Дата добавления</th>
          <th>Дата изменения</th>
          <th>Статус</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        {{-- @forelse ($doctor_reviewsList as $doctor_reviews)
        <tr>
          <td>{{ $doctor_review->id }}</td>
          <td>{{ $doctor_review->title }}</td>  
          <td>{{ $doctor_review->description }}</td>
          <td>{{ $doctor_review->created_at }}</td>
          <td>{{ $doctor_review->updated_at }}</td>
          <td>{{ $doctor_review->status }}</td>
          {{-- <td><a href="{{route('admin.doctor_reviews.edit', $doctor_review->id)}}">Изм.</a> &nbsp; <a href="javascript:;" class="delete" rel="{{ $doctor_review->id }}" style=" color: red;">Уд.</a></td> --}}
          {{-- <td><a href="#">Изм.</a> &nbsp; <a href="#">Вкл.</a> &nbsp; <a href="#" class="delete" style=" color: red;">Выкл.</a></td>
        </tr>            
        @empty
        <tr>
          <td colspan="7">Записей нет</td>
        </tr>            
        @endforelse --}}
      </tbody>

    </table>

    {{-- {{ $pagesList->links() }} --}}

  </div>

@endsection



