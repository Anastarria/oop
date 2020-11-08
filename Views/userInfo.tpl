{extends file="layout.tpl"}
{block name=body}

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$users item=user}
                <tr>
                    <td>{$user['id']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['created_at']}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}