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
                    <td>{model}</td>
                </tr>
            {/fleet}
        </tbody>
    </table>
</div>