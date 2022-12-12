@foreach($members as $member)
  <ul>
  @foreach($member as $key=>$value)
      <li>{{ $key }}：{{ $value }}</li>
  @endforeach
  </ul>
@endforeach  