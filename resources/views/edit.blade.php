<style>
  th {
    background-color: black;
    color: white;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    background: black;
    color: white;
  }
</style>
@section('title', 'edit.blade.php')


@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/edit" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr>
      <th>
        content
      </th>
      <td>
        <input type="text" name="content" value="{{ $form->content }}">
      </td>
    </tr>
  </table>
  <button>送信</button>
</form>
