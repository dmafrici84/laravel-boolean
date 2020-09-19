@extends('layouts.main-layout')

@section('content')
  @isset($data)
  <section class="content">
    <div class="lunghe-corte">
      <h1 id="lunghe">LE LUNGHE</h1>
      <ul id="lista-lunghe" class="pasta">

          @foreach ($data as $values)
            @if($values['tipo'] == "lunga")
              <li>
                <a href="#">
                  <img src="{{ $values["src"] }}" alt="">
                </a>
              </li>
            @endif
          @endforeach

      </ul>
      <h1 id="corte">LE CORTE</h1>
      <ul id="lista-corte" class="pasta">

          @foreach ($data as $values)
            @if($values['tipo'] == "corta")
              <li>
                <a href="#">
                  <img src="{{ $values["src"] }}" alt="">
                </a>
              </li>
            @endif
          @endforeach

      </ul>
    </div>
    <div class="cortissime">
      <h1 id="cortissime">LE CORTISSIME</h1>
      <ul id="lista-cortissime" class="pasta">

          @foreach ($data as $values)
            @if($values['tipo'] == "cortissima")
              <li>
                <a href="#">
                  <img src="{{ $values["src"] }}" alt="">
                </a>
              </li>
            @endif
          @endforeach

      </ul>
    </div>
  </section>
  @endisset
  @empty($data)
      No from variable
    @endempty
@endsection
