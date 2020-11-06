{extends file="layout.tpl"}
{block name=body}

    Current time: {{$now}}

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Terminate</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$users item=user}
                <tr>
                    <td><a href="/user/info/{$user['id']}">{$user['id']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['created_at']}</td>
                    <td><a href="/user/delete/{$user['id']}" class="btn btn-danger">Terminate</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}