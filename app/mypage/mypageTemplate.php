<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <div id="FAlist">
    {: foreach($numberlist as $number) %then :}
      <div class="ModelNumber">
        {:: $number :};
      </div>
    {: %end :}
  </div>
  <div id="editView">
    
  </div>
</body>
</html>
