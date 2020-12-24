<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Smarty</title>
</head>
<body>
<ul>
{* テンプレート変数booksの内容を順にリストに整形 *}
{foreach from=$books item=book}
  <li
    {if $book.price gt 3800}style="color:red;"{/if}>
    <a href="https://google.com/">{$book.title}</a>
    ({$book.price|number_format:1}円／
      {$book.published|date_format:'%Y/%m/%d'}刊行)
  </li>  
{/foreach}
</ul>
</body>
</html>