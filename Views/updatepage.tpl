{extends file="layout.tpl"}
{block name=body}
        <form action="/post/update/{$post->getId()}" method="POST">
        <div class="card">
            <div class='card-header'>
                <label for="exampleFormControlTextarea1">{$post->getTitle()}</label>
                <input class="form-control" type="text" name="title" placeholder="The title for your post">


            </div>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>

                    <label for="exampleFormControlTextarea1">Make changes to your current post</label>
                    <textarea class="form-control"  name="text" rows="5">{$post->getText()}</textarea>
                    <footer class='blockquote-footer'>Added by <cite title='Source Title'>{$post->getAuthorEmail()}</cite></footer>
                </blockquote>
            </div>
            <input type="submit" class="btn btn-success" value="Update">



        </div>
        </form>



{/block}