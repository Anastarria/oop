{extends file="layout.tpl"}
{block name=body}

    <form action="/auth/login" method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@domain.com">
        <input class="form-control" type="password" name="password" placeholder="Your password here">
        <input type="submit" class="btn btn-success" value="Log in">
    </form>


{/block}