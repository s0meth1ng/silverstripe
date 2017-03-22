<h1>{$Title}</h1>

<ul>
    <% loop $Children.Sort('PublishDate DESC').Limit(10) %>
        <li>   
            <h2>{$Title}</h2>
            <time>{$PublishDate.Format('j.m.y')}</time>
            {$Image.CroppedImage(100,100)}
            <%if Summary %>
            <p>{$Summary}</p>
            <% else %>
            <p>{$Content.Summary}</p>
            <% end_if %>
            <a href="{$Link}">Czytaj ...</a>
        </li>
    <% end_loop%>
</ul>