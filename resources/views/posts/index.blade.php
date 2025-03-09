<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <table>
       <tr>
           <th>ID</th>
           <th>タイトル</th>
           <th>本文</th>
           <th>作成日時</th>
           <th>更新日時</th>
       </tr>
       @foreach($products as $product)
           <tr>
               <td>{{ $product->id }}</td>
               <td>{{ $product->title }}</td>
               <td>{{ $product->content }}</td>
               <td>{{ $product->created_at }}</td>
               <td>{{ $product->updated_at }}</td>
           </tr>            
       @endforeach       
   </table>
</body>

</html>