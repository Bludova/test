<form method='POST'>
  <select name='assigned_user_id'>
    <?php
      foreach ($results as $keys => $values) {
    ?>
        <option value="<?=$values['id'];?>"> <?=$values['login'];?></option>
    <?php  
      }
    ?>
  </select>
  <input type='submit' name='assign' value='Переложить ответственность'>
  </form>




// в Нетологии если просмотреть код к этому заданию форма реализована так:

<form method='POST'>  
  <select name='assigned_user_id'>
    <option value='user_5_task_423'>slava</option>
  </select>
</form>
