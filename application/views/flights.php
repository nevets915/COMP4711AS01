<div class="tables">
    <table>        
        <thead>
            <tr>
               <th>Flight Number</th>
               <th>Departure Airport</th>
               <th>Arrival Airport</th>
            </tr>
        </thead>        
        <tbody>
            {flights}
            <tr title="Plane: {Plane ID}
                Depart: {Departure time} Arrive: {Arrival time}">
                <td>{id}</td>
                <td>{Departure Airport}</td>
                <td>{Arrival Airport}</td>
            </tr>
            {/flights}
        </tbody>
    </table>
</div>