@extends('layouts.admin')

@section('content')
   <div class="container">

      <div class="row justify-content-center">

         <div class="col-md-11 mt-4">

            <div class="card">

               <h2 class="card-header">{{ __('Tickets Index') }}</h2>

               <div class="card-body">

                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                     </div>
                  @endif

                  <div class="table-responsive small">

                     <table class="table table-striped table-sm">

                        <thead>

                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Description</th>
                              <th scope="col">Operator</th>
                              <th scope="col">Category</th>
                              <th scope="col">Status</th>
                           </tr>

                        </thead>

                        <tbody>

                           @foreach ($ticketsArray as $ticket)
                              <tr>
                                 <td>{{ $ticket['id'] }}</td>
                                 <td>{{ $ticket['title'] }}</td>
                                 <td>{{ $ticket['description'] }}</td>
                                 <td>{{ $ticket->operator->name }}</td>
                                 <td>{{ $ticket->category->name }}</td>
                                 <td>{{ $ticket['status'] }}</td>
                              </tr>
                           @endforeach

                        </tbody>

                     </table>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>
@endsection
