{extends file="layout.tpl"}
{block name=body}

     <form action="/auth/register" method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@domain.com">
        <input class="form-control" type="password" name="password" placeholder="Your password here">
        <input type="submit" class="btn btn-success" value="Create">
    </form>
    <div>
        Already have an account? <a href="/auth/login">Login!</a>
    </div>

{/block}