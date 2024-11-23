@extends('layouts.admin')

@section('content')
   <div class="container">

      <div class="row justify-content-center">

         <div class="col-md-11 mt-4">

            <div class="card">

               <h2 class="card-header">{{ __('Create Ticket') }}</h2>

               <div class="card-body">

                  @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                  @endif

                  <form method="POST" action="{{ route('admin.ticket.store') }}">
                     @csrf

                     <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text"
                           name="title"
                           id="title"
                           class="form-control"
                           required>
                     </div>

                     <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea name="description"
                           id="description"
                           class="form-control"
                           rows="4"
                           required></textarea>
                     </div>

                     <div class="form-group">
                        <label for="operator_id">{{ __('Select Operator') }}</label>
                        <select name="operator_id"
                           id="operator_id"
                           class="form-control"
                           required>
                           <option value="">-- Select Operator --</option>
                           @foreach ($operatorsArray as $operator)
                              <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="category_id">{{ __('Select Category') }}</label>
                        <select name="category_id"
                           id="category_id"
                           class="form-control"
                           required>
                           <option value="">-- Select Category --</option>
                           @foreach ($categoriesArray as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select name="status"
                           id="status"
                           class="form-control"
                           required>
                           <option value="Assigned">Assigned</option>
                           <option value="InProgress">InProgress</option>
                           <option value="Closed">Closed</option>
                        </select>
                     </div>

                     <button type="submit" class="btn btn-primary mt-2">{{ __('Create new Ticket') }}</button>
                  </form>

               </div>

            </div>

         </div>

      </div>

   </div>
@endsection
