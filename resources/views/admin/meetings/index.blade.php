@extends('layouts.admin')

@section('title', 'Админка консультаций')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Консультации</h1>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="btn btn-sm btn-outline-secondary" href="{{route('admin.drugs.create')}}">Добавить консультацию</a>
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
        {{-- @forelse ($meetingsList as $meeting)
        <tr>
          <td>{{ $meeting->id }}</td>
          <td>{{ $meeting->title }}</td>  
          <td>{{ $meeting->description }}</td>
          <td>{{ $meeting->created_at }}</td>
          <td>{{ $meeting->updated_at }}</td>
          <td>{{ $meeting->status }}</td>
          {{-- <td><a href="{{route('admin.meetings.edit', $meeting->id)}}">Изм.</a> &nbsp; <a href="javascript:;" class="delete" rel="{{ $meeting->id }}" style=" color: red;">Уд.</a></td> --}}
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



