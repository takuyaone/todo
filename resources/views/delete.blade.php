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
@section('title', 'delete.blade.php')


<form action="/delete" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>
        content
      </th>
      <td>
        {{$form->content}}
      </td>
    </tr>
  </table>
  <button>送信</button>
</form>