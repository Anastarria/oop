{extends file="layout.tpl"}
{block name=body}

    <form action="/post/make" method="POST" class="form-group">
        <label for="exampleFormControlTextarea1">Title</label>
        <input class="form-control" type="text" name="title" placeholder="The title for your post">
        <label for="exampleFormControlTextarea1">Add your post here</label>
        <textarea class="form-control"  name="text" rows="5"></textarea>
        <input type="submit" class="btn btn-success" value="Publish">
    </form>

{/block}