@extends('layout.main')

@section('content')

<div class="panel panel-default">

    <table class="table">
    @foreach($contacts as $contact)

        <tr>
        <td class="middle">
            <div class="media">
            <div class="media-left">
                <a href="#">
                <img class="media-object" src="http://placehold.it/100x100" alt="...">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">{{ $contact->name }}</h4>
                <address>
                    <strong>{{ $contact->company }}</strong><br>
                    {{ $contact->email }}
                </address>
            </div>
            </div>
        </td>
        <td width="100" class="middle">
            <div>
            <a href="{{ route("contacts.edit", $contact->id) }}" class="btn btn-circle btn-default btn-xs" title="Edit">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <a href="contacts.edit" class="btn btn-circle btn-danger btn-xs" title="Edit">
                <i class="glyphicon glyphicon-remove"></i>
            </a>
            </div>
        </td>
        </tr>

    @endforeach
    </table>            
</div>

          <div class="text-center">
            <nav>
             {{-- untuk query string pagination, supaya ketika pilih filter dari pagination tidak ke reset dan balik ke filter all contact --}}
            {!! $contacts->appends( Request::query() )->render() !!}
            </nav>
          </div>

          
@endsection