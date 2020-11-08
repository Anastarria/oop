{extends file="layout.tpl"}
{block name=body}

    {foreach from=$posts item=post}
        <div class="card">
            <div class='card-header'>
                {$post['title']}
            </div>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>
                    <p>{$post['text']}</p>
                    <footer class='blockquote-footer'>Added by <cite title='Source Title'>{$post['author_email']}</cite></footer>
                </blockquote>
            </div>
            <a href="/post/terminate/{$post['id']}" class="btn btn-danger">Terminate</a>
            <a href="/post/updatePage/{$post['id']}" class="btn btn-warning">Update</a>

        </div>
    {/foreach}


{/block}