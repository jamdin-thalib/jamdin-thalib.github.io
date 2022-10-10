<h1><?= lang('Auth.edit_user_heading');?></h1>
<p><?= lang('Auth.edit_user_subheading');?></p>

<div id="infoMessage"><?= $message;?></div>

<?= form_open(uri_string());?>

      <p>
            <?= form_label(lang('Auth.edit_user_name_label'), 'first_name');?> <br />
            <?= form_input($nama_user);?>
      </p>

      <p>
            <?= form_label(lang('Auth.edit_user_company_label'), 'company');?> <br />
            <?= form_input($company);?>
      </p>

      <p>
            <?= form_label(lang('Auth.edit_user_phone_label'), 'phone');?> <br />
            <?= form_input($phone);?>
      </p>

      <p>
            <?= form_label(lang('Auth.edit_user_password_label'), 'password');?> <br />
            <?= form_input($password);?>
      </p>

      <p>
            <?= form_label(lang('Auth.edit_user_password_confirm_label'), 'password_confirm');?><br />
            <?= form_input($password_confirm);?>
      </p>

      <?php if ($ionAuth->isAdmin()): ?>

          <h3><?= lang('Auth.edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID = $group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked = ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?= $group['id'];?>"<?= $checked;?>>
              <?= htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?= form_hidden('id', $user->id);?>

      <p><?= form_submit('submit', lang('Auth.edit_user_submit_btn'));?></p>

<?= form_close();?>
