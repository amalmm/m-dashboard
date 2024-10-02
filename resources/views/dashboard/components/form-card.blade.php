 <div class="    border border-gray-300  rounded-md px-5 py-7">
    <form action="{{$action ?? ''}}" method="{{$method ?? ''}}"  class="">
        @csrf
          {{$slot}}
        </form>
 </div>
