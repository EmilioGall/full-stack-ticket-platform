@extends('layouts.admin')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-11 mt-4">
            <div class="card">
               <h2 class="card-header">{{ __('Ticket Details') }}</h2>

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                     </div>
                  @endif

                  <div class="mb-3">
                     <strong>{{ __('Title:') }}</strong>
                     <p>{{ $ticket->title }}</p>
                  </div>

                  <div class="mb-3">
                     <strong>{{ __('Description:') }}</strong>
                     <p>{{ $ticket->description }}</p>
                  </div>

                  <div class="mb-3">
                     <strong>{{ __('Operator:') }}</strong>
                     <p>{{ $ticket->operator->name }}</p>
                  </div>

                  <div class="mb-3">
                     <strong>{{ __('Category:') }}</strong>
                     <p>{{ $ticket->category->name }}</p>
                  </div>

                  <div class="mb-3">
                     <strong>{{ __('Status:') }}</strong>
                     <p>{{ $ticket->status }}</p>
                  </div>

                  <div class="mb-3">
                     <strong>{{ __('Created At:') }}</strong>
                     <p>{{ $ticket->created_at->format('d-m-Y H:i') }}</p>
                  </div>

                  <div class="mb-3">
                     <strong>{{ __('Updated At:') }}</strong>
                     <p>{{ $ticket->updated_at->format('d-m-Y H:i') }}</p>
                  </div>

                  <div class="d-flex justify-content-between mt-4">
                     <a href="{{ route('admin.ticket.index') }}" class="btn btn-secondary">{{ __('Back to Tickets') }}</a>
                     <a href="{{ route('admin.ticket.edit', $ticket->id) }}" class="btn btn-primary">{{ __('Edit Ticket') }}</a>
                     <a href="{{ route('admin.ticket.edit', $ticket->id) }}" class="btn btn-danger">{{ __('Delete Ticket') }}</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection