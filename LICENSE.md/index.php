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
