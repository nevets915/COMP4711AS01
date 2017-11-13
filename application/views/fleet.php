{pagetitle}

<div class="tables">
    <table>        
        <thead>
            <tr>
               <th>Fleet ID</th>
               <th>Model </th>
            </tr>
        </thead>        
        <tbody>
            {fleet}
                <tr>
                    <td><a href="fleet/show/{id}">{id}</a></td>
                    <td>{Model}</td>
                </tr>
            {/fleet}
        </tbody>
    </table>
</div>
<br/>
<br/>
{add}
