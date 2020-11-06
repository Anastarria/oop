{extends file="layout.tpl"}
{block name=body}

    ID: {$user->getID()}<br>
    EMAIL: {$user->getEmail()}<br>
    CREATED_AT: {$user->getCreatedAt()}<br>

{/block}