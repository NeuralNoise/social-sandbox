<?php use_helper('I18N') ?>

<div class="container">
    <div class="register_ok" style="float: right">
        <h2><?php echo __('Hello %name%', array('%name%' => $user->getUsername()), 'sf_guard') ?></h2>

        <h3><?php echo __('Enter your new password in the form below.', null, 'sf_guard') ?></h3>

        <form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key=' . $sf_request->getParameter('unique_key')) ?>" method="POST">
            <table>
                <tbody>
                    <?php echo $form ?>
                </tbody>
                <tfoot><tr><td><input type="submit" class="submit"  name="change" value="<?php echo __('Change', null, 'sf_guard') ?>" /></td></tr></tfoot>
            </table>
        </form>
    </div>
</div>