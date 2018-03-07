<form method="post" action="{$smarty.const.IA_SELF}">
    {preventCsrf}
    <p>{lang key='agreement'}</p>
    <p>
        <button type="submit" name="agree" class="btn btn-success"><span class="fa fa-check"></span> {lang key='agree'}</button>
        <button type="submit" name="not_agree" class="btn btn-danger"><span class="fa fa-remove"></span> {lang key='not_agree'}</button>
    </p>
</form>