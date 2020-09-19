@extends('layouts.main-layout')

@section('content')
  @isset($data)
  <section class="content">
    <h1 id="lunghe">Le Lunghe</h1>
    <ul id="lista-lunghe" class="pasta">

        @foreach ($data as $values)
          @if($values['tipo'] == "lunga")
            <li> <img src="{{ $values["src"] }}" alt=""></li>
          @endif
        @endforeach

    </ul>
    <h1 id="corte">Le Corte</h1>
    <ul id="lista-corte" class="pasta">

        @foreach ($data as $values)
          @if($values['tipo'] == "corta")
            <li> <img src="{{ $values["src"] }}" alt=""> </li>
          @endif
        @endforeach

    </ul>
    <h1 id="cortissime">Le Cortissime</h1>
    <ul id="lista-cortissime" class="pasta">

        @foreach ($data as $values)
          @if($values['tipo'] == "cortissima")
            <li> <img src="{{ $values["src"] }}" alt=""> </li>
          @endif
        @endforeach

    </ul>
  </section>
  @endisset
  @empty($data)
      No from variable
    @endempty
@endsection
